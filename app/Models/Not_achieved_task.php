<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Not_achieved_task extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'id' => 'required',
        'task' => 'required',
        'expected_time' => 'integer|min:1',
        'required_time' => 'integer|min:1',
        'deadline' => 'required|date',
    );
}
