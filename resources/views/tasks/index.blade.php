@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク内容</th>
                    <th>状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td><span class="badge">{{$task->status }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <!-- リストタグの場合
    
    @if (count($tasks) > 0)
        
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->id }} : {{ $task->content }} : {{ $task->status }} : {!! link_to_route('tasks.show', '詳細', ['id' => $task->id]) !!}</li>
            @endforeach
        </ul>
    @endif
-->
    {!! link_to_route('tasks.create', ' 新規タスクの登録', null, ['class' => 'btn btn-primary glyphicon glyphicon-pencil']) !!}

@endsection