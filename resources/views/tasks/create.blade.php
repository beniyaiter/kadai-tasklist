@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク内容') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'タスクの状況') !!}
        {!! Form::select('status', ['未着手' => '未着手', '進行中' => '進行中', '完了' => '完了' ]) !!}

        {!! Form::submit('登録') !!}
    
    {!! Form::close() !!}

@endsection