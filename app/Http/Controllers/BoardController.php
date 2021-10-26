<?php

namespace App\Http\Controllers;

use App\Models\board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    // 게시판 리스트
    public function index() {
        $boards = board::all();
        return view('board.index',compact('boards'));
    }
    // 글쓰기 페이지이동
    public function create() {
        return view('board.create');
    }

    // 글 저장하기
    public function store(Request $request) {
        $board = board::create([
            'title' => $request -> input('title'),
            'story' => $request -> input('story')
        ]);
        return redirect('/boards/'.$board->id);
    }
    // 상세보기
    public function show(board $board) {
        return view('board.show',compact('board'));
    }

    // 수정페이지 이동
    public function edit(board $board) {
        return view('board.edit',compact('board'));
    }

    // 수정완료
    public function update(Board $board) {
        $board -> update(request(['title','content']));
        return redirect('/boards/'.$board->id);
    }

    // 삭제하기
    public function delete(Board $board) {
        $board -> delete();
        return redirect('/boards');
    }
}
