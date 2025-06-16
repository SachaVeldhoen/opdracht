<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\BlogPost;
use Illuminate\Http\JsonResponse;
use \Illuminate\Database\Eloquent\Collection;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the blog posts.
     */
    public function index(): Collection
    {
        return BlogPost::all();
    }

    /**
     * Show the blog post with the specified ID.
     */
    public function show($id)
    {
        return BlogPost::findOrFail($id);
    }

    /**
     * Store a newly created blog post in storage.
     */
    public function store(BlogPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $blogPost = BlogPost::create($validatedData);

        return response()->json([
            'message' => 'Post created successfully',
            'data' => $blogPost
        ], 201);
    }

    /**
     * Update the specified blog post in storage.
     */
    public function update(BlogPostRequest $request, $id): JsonResponse
    {
        $blogPost = BlogPost::findOrFail($id);

        $validatedData = $request->validated();
        $blogPost->update($validatedData);

        return response()->json([
            'message' => 'Post updated successfully',
            'data' => $blogPost
        ], 200);

    }

    /**
     * Remove the specified blog post from storage.
     */
    public function destroy($id): JsonResponse
    {
        $blogPost = BlogPost::findOrFail($id);
        $blogPost->delete();

        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
