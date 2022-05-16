<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $blog_articles = Article::paginate(4);
        return view("blog.index", compact('blog_articles'));
//        return view("blog.index");
    }

    public function add_page()
    {
        return view("blog.create-post");
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'text' => 'required',
            'image' => 'required',
            'category' => 'required|numeric|gte:0|lte:4',
            'created_by' => 'required|max:30',
        ]);

        $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
        $path = $request->image->move('uploads/articles', $image_name);
        $data = Article::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $path,
            'category' => $request->category,
            'created_by' => $request->created_by,
        ]);
        $data->save();

        return response()->json(
            [
                'status' => true,
                'id' => $data->id,
            ]
        );
    }

    public function update_page($id)
    {
        $get_article = Article::find($id);
        return view("blog.update-post", compact('get_article'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'text' => 'required',
            'category' => 'required|numeric|gte:0|lte:4',
            'created_by' => 'required|max:30',
        ]);

        $get_article = Article::find($id);

        if ($request->hasFile('image')) {

            $image_name = "image-" . time() . "." . $request->image->getClientOriginalExtension();
            $path = $request->image->move('uploads/articles/updated', $image_name);

            if ($get_article) {
                $get_article->update([
                    'title' => $request->title,
                    'text' => $request->text,
                    'image' => $path,
                    'category' => $request->category,
                    'created_by' => $request->created_by,
                ]);
            }
            return response()->json(
                [
                    'status' => true,
                    'title' => $request->title,
                        'image' => asset($get_article->image)
                ]
            );
        } else {
            if ($get_article) {
                $get_article->update([
                    'title' => $request->title,
                    'text' => $request->text,
                    'category' => $request->category,
                    'created_by' => $request->created_by,
                ]);
            }

            return response()->json(
                [
                    'status' => true,
                    'title' => $request->title,
                ]
            );
        }
    }

    public function article($id)
    {
        $get_article = Article::find($id);
        return view("blog.post", compact('get_article'));
    }

    public function add_comment($id, Request $request)
    {

        $get_article = Article::findOrFail($id);

        $request->validate([
            'name' => 'required|max:35',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
        $data = Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'article_id' => (int)$id,
        ]);
        $data->save();

        return response()->json(
            [
                'status' => true,
                'id' => $data->id,
                'name' => $data->name,
                'email' => $data->email,
                'comment' => $data->comment,
                'created_at' => $data->created_at->format('Y-m-d H:i:s'),
            ]
        );
    }

}
