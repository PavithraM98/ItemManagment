<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('posts.index', compact('posts'))->with('posts',$posts);;
        // return view('product.index')->with('products',$product);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);

        $this->postService->createPost($data);

        return redirect()->route('posts.index');

    }

    public function edit($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.edit', compact('post'))->with('posts',$post);
    }

    public function update($id, Request $request)
    {
        // dd('hhh');
        $data = $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);

        $this->postService->updatePost($id, $data);

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return redirect('/posts');
    }
}

