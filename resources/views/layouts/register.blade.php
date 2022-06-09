@extends('layouts.app')

@section('heading')
<div class="mt-3">登録</div>
@endsection

@section('title', '登録')

@section('content')
{{-- バリデーションエラーの表示 --}}
@if (count($errors) > 0)
<div>
    <div><strong>入力した文字を修正してください。</strong></div>
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<br>

{{-- 登録処理の表示 --}}
<form action="{{ url('/') }}" method="post">
    @csrf
    <div class="row mb-2">
        <div class="form-group col-md-10">
            <label for="task" class="form-label">タスク</label>
            <input type="text" class="form-control" name="task" id="task" value="{{ old('task') }}">
        </div>
        <div class="form-group col-md-2">
            <label for="expected_time" class="form-label">予想時間</label>
            <div class="input-group">
                <input type="int" class="form-control" name="expected_time" id="expected_time"
                    value="{{ old('expected_time') }}">
                <div class="input-group-text">分</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="deadline" class="form-label">締め切り</label>
        <input type="datetime-local" class="form-control" name="deadline" id="deadline" value="{{ old('deadline') }}">
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-outline-secondary">
            登録
        </button>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-outline-info col">
                未達成タスク一覧へ
            </button>
        </div>
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-outline-success col">
                達成タスク一覧へ
            </button>
        </div>
    </div>
</form>
@endsection