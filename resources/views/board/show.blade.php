@extends('layout.master')
@section('title')
    Detail page!
@endsection

@section('content')
    <strong>Show board</strong>
    <div>
    <p>제목 : {{$board->title}}</p>
    <p>내용 : {{$board->story}}</p>
    <a href="/boards/{{$board->id}}/edit">수정하기</a>
        <form action="/board/{{$board->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">삭제</button>
        </form>
    </div>
@endsection
