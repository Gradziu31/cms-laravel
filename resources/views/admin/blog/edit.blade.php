@extends('admin.layout.main')

@section('content')
<h2>Edytujesz:</h2>

<form action="/admin/blog/{{$page->id}}" method="post">
    @csrf
    @method('put')
    <label>title <input type="text" name="title" value="{{$page->title}}"></label><br>
    <label>opis <input type="text" name="opis" value="{{$page->opis}}"></label><br>
    <label>thumb<input type="text" name="thumb" value="{{$page->thumb}}"></label><br>
    <button>submit</button>
</form>

@endsection
