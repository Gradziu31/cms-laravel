
@extends('admin.layout.main')

@section('content')

<form action="/admin/blog/" method="post">
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
@csrf
<label>title <input type="text" name="title"></label><br><br>
<label>opis <input type="text" name="opis"></label><br>
<label>thumb<input type="text" name="thumb"></label><br>
<label>content<input type="text" name="content"></label><br>
<label>category<input type="text" name="category"></label><br>
<label>seo_title<input type="text" name="seo_title"></label><br>
<label>seo_description<input type="text" name="seo_description"></label><br>
<button>submit</button>
</form>


@endsection
