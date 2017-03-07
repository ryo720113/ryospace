<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function __construct()
    {
    	//$this->middleware('auth');
    }

    public function index()
    {
    	$postType = '文章總覽';

    	$posts = \App\Post::orderBy('created_at', 'desc')
    					->paginate(5);

    	$data = compact('postType', 'posts');

    	return view('posts.index', $data);
    }

    public function create() 
    {
    	$postType = '新增文章';

    	$data = compact('postType');

    	return view('posts.create', $data);
    }

    public function show($id) 
    {

    	$post = \App\Post::find($id);
    	if(is_null($post)) {
    		return redirect('/posts')->with('warning', '找不到該文章');
    	}

    	$post->page_view += 1;
    	$post->save();

    	$data = compact('post');

    	return view('posts.show', $data);

    }

    public function store(Request $request)
    {
    	$post = \App\Post::create($request->all());

        return redirect()->route('posts.show', $post->id)
                        ->with('success', '新增文章完成');
    }

    public function edit($id)
    {
    	$post = \App\Post::find($id);
        if (is_null($post)) {
            return redirect('/posts')->with('warning', '找不到該文章');
        }

        //權限
        if ($post && $post->user->id != \Auth::user()->id) {
            return redirect('/posts')->with('warning', '您沒有權利編輯這篇文章');
        }

        $data = compact('post');

        return view('posts.edit', $data);
    }

    public function update($id, Request $request)
    {
        $post = \App\Post::find($id);
        if (is_null($post)) {
            return redirect('/posts')->with('warning', '找不到該文章');
        }

        $post->update($request->all());

        return redirect()->route('posts.show', $post->id)
                        ->with('success', '文章更新完成');
    }

    public function destroy($id)
    {
    	$post = \App\Post::find($id);
        if (is_null($post)) {
            return redirect('/posts')->with('warning', '找不到該文章');
        }

        if ($post && $post->user->id != \Auth::user()->id) {
            return redirect('/posts')->with('warning', '您沒有權限刪除這篇文章');    
        }

        $post->delete();

        return redirect('/posts')->with('success', '刪除文章及留言成功!');
    }

    public function comment($id, Request $request)
    {
        $post = \App\Post::find($id);
        if (is_null($post)) {
            return redirect('/posts')->with('warning', '找不到該文章');
        }

        $comment = \App\comment::create($request->all());
        
        dd($comment);

    }
}
