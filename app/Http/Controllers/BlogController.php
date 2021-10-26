<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs() {
        $blogs = blog::all(); // blog db의 모든것을 꺼내오겠다.
        return view('index',compact('blogs')); // index 페이지에 blogs를 뿌려준다
    }
}
