@extends('layout.master')
@section('title')
    Edit page
@endsection

@section('content')
    <div style="margin-top:100px; margin-left:100px">
        <form action="/boards/{{$board->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">제목</label>
            <p><input type="text" name="title" id="title" value="{{$board->title}}"></p>
            <p><label for="story">본문</label><p>
            <p><textarea name="story" id="story"cols="30" rows="10">{{$board->story}}</textarea></p>
            <input type="submit" value="수정">
        </form>
    </div>
@endsection
