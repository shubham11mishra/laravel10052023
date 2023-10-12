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
        $response = Post::query()->with('users')->paginate() ;
//        return response()->json($response);
        return  PostResource::collection($response);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $response =   DB::transaction(function () use ($request){
            $created = Post::query()->create([
                'title' => $request->title,
                'body' => $request->body
            ]);
            $created->users()->sync([1,2]);

        });

        return new JsonResponse($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
//        return response()->json($post);
//        return new JsonResponse(['data' => $post]);
        return new PostResource($post);
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
