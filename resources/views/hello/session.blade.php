@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{$session_data}}</p> 
    <form action="/hello/session" method="post">
        {{ csrf_field() }}
        <input type="text" name="input">
        <input type="submit" name="send">
    </form>
@endsection

@section('footer')
    copyright 2018 hogehoge.
@endsection