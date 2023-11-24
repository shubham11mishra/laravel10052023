<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return  ResourceCollection
     */
    public function index()
    {

        $response = Post::query()
            ->where('published', '=', true)
            //            ->with(['user:id,name,email',
            //                    'comments:id,parent_id,post_id,user_id,content,published_at',
            //                    'comments.user:id,name,email',
            //                    'comments.replies:id,parent_id,post_id,user_id,content,published_at',
            //                    'comments.replies.user:id,name,email',
            //                    'comments.replies.replies:id,parent_id,post_id,user_id,content,published_at',
            //                    'comments.replies.replies.user:id,name,email',
            //                ]
            //            )

            ->withCount('comments')
            ->with(['user:id,name,email', 'tags:id,title,slug'])
            ->get();

        return view('home', compact('response'));
    }

    function create()
    {

        return view('post.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $response = DB::transaction(function () use ($request) {
            $created = Post::query()->create([
                'title' => $request->title,
                'body' => $request->body
            ]);
            $created->users()->sync([1, 2]);
        });

        return new JsonResponse($response);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $response = Post::query()
            ->where('slug', '=', $slug)
            ->where('published', '=', true)
            ->with(
                [
                    'user:id,name,email',
                    'comments:id,parent_id,post_id,user_id,content,published_at',
                    'comments.user:id,name,email',
                    'comments.replies:id,parent_id,post_id,user_id,content,published_at',
                    'comments.replies.user:id,name,email',
                    'comments.replies.replies:id,parent_id,post_id,user_id,content,published_at',
                    'comments.replies.replies.user:id,name,email',
                    'tags:id,title,slug'
                ]
            )
            ->withCount('comments')
            ->get();
        return $response;
        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
