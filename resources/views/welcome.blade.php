@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
        @if (count($tasks) > 0)
            @include('tasks.tasks', ['tasks' => $tasks])
        @else
             {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-success']) !!}
        @endif
        
    @else
    
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Tasklistへようこそ！</h1>
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-success mt-3']) !!}
        </div>
    </div>
    @endif
@endsection
