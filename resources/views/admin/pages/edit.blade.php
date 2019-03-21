@extends('admin.layout.main')

@section('content')
<h2>Edytujesz:</h2>

<form action="/admin/pages/{{$page->id}}" method="post">
    @csrf
    @method('put')
    <label>title <input type="text" name="title" value="{{$page->title}}"></label><br>
    <label>opis <input type="text" name="opis" value="{{$page->opis}}"></label><br>
    <label>seo title<input type="text" name="seo_title" value="{{$page->seo_title}}"></label><br>
    <label>seo desc<input type="text" name="seo_description" value="{{$page->seo_description}}"></label><br>
<label>        <select name="parent_id" id="parent_id">
        <option value="">Brak rodzica</option>
            @foreach($allpages->all() as $allpage)
            @if(!$allpage->parent_id)
                <option value="{{$allpage->id}}" @if($page->parent_id == 13) selected @endif>{{$allpage->title}}</option>
                @endif
            @endforeach
        </select>
</label><br>
    <label>thumb<input type="text" name="thumb" value="{{$page->thumb}}"></label><br>
    <button>submit</button>
</form>

@endsection
