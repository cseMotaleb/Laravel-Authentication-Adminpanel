<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Blog;
use Illuminate\Http\Request;
use Storage;
use Image;
use Intervention\Image\ImageManager;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','show']]);
         $this->middleware('permission:blog-create', ['only' => ['create','store']]);
         $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::latest()->paginate(5);
        return view('backend.blogs.index', compact('blogs'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
        ;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'detail' => 'required',
            'blog_image' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);
    
        if ($blog_image = $request->file('blog_image')) {
            $filename = rand(10, 100) . time().'.'.$blog_image->getClientOriginalExtension();
            $location = public_path('/uploads/blogs/'. $filename);
            Image::make($blog_image)->resize(600, 700)->save($location);
        }

        Blog::create($request->except('blog_image')+['blog_image' => $filename]);

        toastr()->success('Blog created successfully');
        return redirect()->route('blogs.index')
                        ->with('success', 'blog created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('backend.blogs.show', compact('blog'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.blogs.edit', compact('blog'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
         // return response()->json($request->all());
        $data = BlogPost::find($id);
        // for blog image update
        $blogImage = $data->blog_image;

        if ($image = $request->file('blog_image')) {
            $blogImage = rand(10, 100) . time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/uploads/blogs/'. $blogImage);
            Image::make($image)->resize(600, 600)->save($location);
            $oldFilename = $data->blog_image;
            $data->blog_image = $blogImage;
            Storage::delete('/uploads/blogs/'. $oldFilename);
        }
        // blog info update
        $data = $data->update($request->except('blog_image')+['blog_image' => $blogImage]);

        return response()->json('The Blog post successfully updated!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    
        return redirect()->route('blogs.index')
                        ->with('success', 'blog deleted successfully');
    }
}
