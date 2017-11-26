@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細</h1>
    
        <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>状態</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    <!-- pタグ使用
    <p>タスク内容：{{ $task->content }}</p>
    <p>状態：{{ $task->status }}</p>
    -->
    {!! link_to_route('tasks.edit', ' このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-primary glyphicon glyphicon-pencil']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection