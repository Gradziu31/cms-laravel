@extends('admin.layout.main')

@section('content')
    <div class="breadcrumb">{{url()->current()}}</div>
    <div class="pages">
    <h2>All pages:</h2>
    <ul>
    @foreach($pages as $page)
        <li class="mb-1 justify-content-between row">
                <div class="page-name">{{$page->title}}</div>
                <div class="page-action d-flex">
                <a href="/admin/pages/{{$page->id}}"><button class="btn btn-dark">show</button></a>
                <a href="/admin/pages/{{$page->id}}/edit"><button class="btn btn-secondary">edit</button></a> 
                <form action="/admin/pages/{{$page->id}}" method="post">
                <input class="btn btn-default" type="submit" value="Delete" />
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
              </form>
                </div>
        </li>
    @endforeach
    </ul>
    {{$pages->links()}}
    </div>
    <a href="/admin/pages/create"><button class="btn btn-success">Add new</button></a>
@endsection
