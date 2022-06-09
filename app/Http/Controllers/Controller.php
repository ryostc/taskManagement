<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Not_achieved_task;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    public function registerShow(Request $request)
    {
        $not_achieved_tasks = Not_achieved_task::orderBy('created_at', 'asc')->get();
        return view('layouts.register', ['not_achieved_tasks' => $not_achieved_tasks]);
    }

    public function register(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'task' => 'required',
            'expected_time' => 'integer|min:1',
            'required_time' => 'integer|min:1',
            'deadline' => 'required|date',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        ///Eloquentモデル(登録処理)
        $not_achieved_tasks = new Not_achieved_task;
        $not_achieved_tasks->task = $request->task;
        $not_achieved_tasks->expected_time = 30;
        $not_achieved_tasks->deadline = '2022-06-01 00:00:00';
        $not_achieved_tasks->save();
        return redirect('/');
    }
}
