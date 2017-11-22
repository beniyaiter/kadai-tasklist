@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク内容') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('登録') !!}
    
    {!! Form::close() !!}

@endsection