@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            <h1>新規タスク登録ページ</h1>
            
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'タスク内容') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'タスクの状況') !!}
                    {!! Form::select('status', ['未着手' => '未着手', '進行中' => '進行中', '完了' => '完了' ], null, ['class' => 'form-control']) !!}
                </div>
                    {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection