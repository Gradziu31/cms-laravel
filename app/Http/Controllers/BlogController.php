<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests\CreateBlogRequest;
use App\Blog;
use App\Menu_items;
use Auth;
use Session;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $blog = blog::paginate(10);
        return view('admin.blog.index')->with('blog', $blog);
    }





// FRONT
    public function blog()
    {        
        $blog = blog::paginate(10);
        return view('blog')->with('blog', $blog);
    }
    public function blogpost($slug){
        ///tutaj w current muszę dawac where slug -> ale nie ma takiego w bazie dopisac i bedzie ładowanie po slugu bloga
        $current = blog::where('title', $slug)->firstorfail();
        dd($current);
    }
// koniec





    public function create()
    {
        $allblog = blog::all();
        $items = Menu_items::all();
        return view('admin.blog.create', compact('items', 'allblog'));
    }

    public function store(CreateBlogRequest $request)
    {
        $request['user_id'] = Auth::id();
        $request['slug'] = str_slug($request['title']);
        blog::create($request->all());
        return redirect('admin/blog');
    }

    public function show($id)
    {
        $page = blog::findOrFail($id);
        return view('admin/blog/show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allblog = blog::all();
        $page = blog::findOrFail($id);
        // return view('admin/blog/edit')->with('page', $page);
        return view('admin/blog/edit', compact('page', 'allblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreateBlogRequest $request)
    {
        $blog = blog::findOrFail($id);
        $blog->update($request->all());
        return redirect('admin/blog/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::findOrFail($id)->delete();
        return redirect('/admin/blog');
    }
}
