<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    
    public function index()
    {
        return Blog::all();
    }

    public function store(BlogRequest $request)
    {
        return Blog::create($request->all());
    }
    
    public function show($id)
    {
        return Blog::find($id);
    }

    public function update(BlogRequest $request, $id)
    {
        Blog::where('id',$id)->update([
            'title'=> $request ->title,
            'author'=>$request->author,
            'brief'=> $request->brief,
            'body'=> $request->body,
            'status'=> $request->status,
        ]);
        $blog=Blog::find($id);
        return $blog;
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog ->delete();
        return response()->json([
            'response'=>'El Blog fue eliminado'
        ]);
    }
}
