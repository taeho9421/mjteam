@extends('layout')

@section('title')
    반갑습니다!
@endsection

@section('content')
    <h2>내용입니다!</h2>
    @foreach($blogs as $item)
        제목 : {{$item->title}}<br>
        내용 : {{$item->story}}<br>
    @endforeach
@endsection
