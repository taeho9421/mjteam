{{-- 게시판 리스트 (Home) --}}
@extends('layout.master')
@section('title')
    제목
@endsection

@section('content')
    @foreach($boards as $board)
        번호 : {{$board->id}}
        <a href="/boards/{{$board->id}}">
        제목 : {{$board->title}}
        </a>
        내용 : {{$board->story}}
        날짜 : {{$board->created_at}}<br>
    @endforeach
@endsection
