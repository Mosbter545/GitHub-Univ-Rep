<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeControl extends Controller
{
function alert(){return view('posts/alert');}
function create(){return view('posts/create');}
function edit(){return view('posts/edit');}
function show(){return view('posts/show');}
function inicio(){return view('components/paginabase');}
function buttonview(){return view('posts/buttonview');}
function cardview(){return view('posts/cardview');}




function index (Request $request){

$postsQuery = Post::query();

if ($request->Filled('estado')){
$postsQuery->filterbyEstado($request->input('estado'));
}

$post = $postsQuery->orderBy('created_at', 'desc')->GET();
return view('posts/index', compact('post'));



;}
};