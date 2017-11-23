@extends('layouts.app')

@section('content')

    <h1>id： {{$task->id}} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク内容') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'タスクの状況') !!}
        {!! Form::select('status', ['未着手' => '未着手', '進行中' => '進行中', '完了' => '完了' ]) !!}
        
        {!! Form::submit('更新') !!}
    
    {!! Form::close() !!}

@endsection