@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Tasklistへようこそ！</h1>
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-success mt-3']) !!}
        </div>
    </div>
    @endif
@endsection
