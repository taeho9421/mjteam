{{-- 글쓰기 페이지 --}}
@extends('layout.master')
@section('title')
    CreateBoard
@endsection

@section('content')
    <form action="/boards" method="post">
        @csrf
        <label for="title">제목</label>
        <p><input type="text" id="title" name="title"></p><br>
        <label for="story">내용</label>
        <p><textarea id="story" name="story" cols="30" rows="10" placeholder="내용을입력하세요!"></textarea></p>
        <input type="submit" value="작성">
    </form>
@endsection
