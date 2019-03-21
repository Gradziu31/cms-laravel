<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests\CreatePagesRequest;
use App\Pages;
use App\Menu_items;
use Auth;
use Session;

class PagesController extends Controller
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
        $pages = Pages::paginate(10);
        return view('admin.pages.index')->with('pages', $pages);
    }


    public function create()
    {
        $allpages = Pages::all();
        $items = Menu_items::all();
        return view('admin.pages.create', compact('items', 'allpages'));
    }

    public function store(CreatePagesRequest $request)
    {
        // $request->user_id = Auth::id();
        $request['user_id'] = Auth::id();
        $request['slug'] = str_slug($request['title']);
        Pages::create($request->all());
        return redirect('admin/pages');
    }

    public function show($id)
    {
        $page = Pages::findOrFail($id);
        return view('admin/pages/show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allpages = Pages::all();
        $page = Pages::findOrFail($id);
        // return view('admin/pages/edit')->with('page', $page);
        return view('admin/pages/edit', compact('page', 'allpages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreatePagesRequest $request)
    {
        $pages = Pages::findOrFail($id);
        $request['slug'] = str_slug($request['title']);
        $pages->update($request->all());
        return redirect('admin/pages/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pages::findOrFail($id)->delete();
        return redirect('/admin/pages');
    }
}
