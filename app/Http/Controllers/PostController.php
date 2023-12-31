<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return  ResourceCollection
     */
    public function index(Request $request)
    {
        // dump('$request->path() => ' . $request->path());
        // dump('$request->url() => ' . $request->url());
        // dump('$request->fullUrl() => ' . $request->fullUrl());
        // dump('$request->fullUrlWithQuery(["b"=>1]) => ' . $request->fullUrlWithQuery(['b' => 1]));
        // dump('$request->host() => ' . $request->host());
        // dump('$request->httpHost() => ' . $request->httpHost()    );
        // dump('$request->schemeAndHttpHost() => '. $request->schemeAndHttpHost());
        // dump(' $request->method() => ' . $request->method());
        // dump('$request->bearerToken() => ' . $request->bearerToken());
        // dump('$request->ip() => ' . $request->ip());
        // dump('$request->all() => ' , $request->all());
        // dump('$request->query("a") => ' . $request->query('a'));
        // dump('=>');
        // dump('=>');

        // dd('a');
        $type =  $request->query('type');
        $tag =  $request->query('tag');
        // dd(collect([...request()->query()])->except('d')->merge(['a' => 1])->toArray());
        // dd(now());
        $query = Post::query()
            ->where('published', '=', true)
            ->withCount('comments')
            ->with(['user:id,name,email', 'tags:id,title,slug']);

        if ($type) {
            if ($type == 'latest') {
                $query = $query->orderBy('published_at', 'desc');
            }
            if ($type == 'top') {
                $query = $query->orderBy('comments_count', 'desc');
            }
            if ($type == 'relevent') {
                $query = $query->orderBy('comments_count', 'desc');
            }
        }
        if ($tag) {
        }
        $response = $query->paginate()->withQueryString();

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
        Post::create($request->all());
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
