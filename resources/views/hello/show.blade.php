@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    @if($items != null)
        @foreach ($items as $item)
        <table width="400px">
            <tr><th width="50px">id:</th><td width="50px">{{$item->id}}</td><th width="50px">name:</th><td width="50px">{{$item->name}}</td></tr>    
        </table>
        @endforeach
    @endif  
@endsection

@section('footer')
    copyright 2018 hogehoge.
@endsection