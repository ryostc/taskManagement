@extends('layouts.app')

@section('heading')
<div class="mt-3">登録</div>
@endsection

@section('title', '登録')

{{-- バリデーションのエラーを表示する --}}
@section('errors')
@include('common.errors')
@endsection

@section('content')
<form action="/" method="post">
    @csrf
    <div class="row mb-2">
        <div class="col-md-10">
            <label for="task" class="form-label">タスク</label>
            <input type="text" class="form-control" name="task" id="task">
        </div>
        <div class="col-md-2">
            <label for="expected_time" class="form-label">予想時間</label>
            <div class="input-group">
                <input type="int" class="form-control" name="expected_time" id="expected_time">
                <div class="input-group-text">分</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="deadline" class="form-label">締め切り</label>
        <input type="datetime-local" class="form-control" name="deadline" id="deadline">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-secondary">
            登録
        </button>
    </div>
    <div class="row mb-2">
        <button type="submit" class="btn btn-outline-info col">
            未達成タスク一覧へ
        </button>
        <button type="submit" class="btn btn-outline-success col">
            達成タスク一覧へ
        </button>
    </div>
</form>
@endsection