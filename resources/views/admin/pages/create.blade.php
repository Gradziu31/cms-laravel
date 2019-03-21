
@extends('admin.layout.main')

@section('content')

<form action="/admin/pages/" method="post">
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
@csrf
<label>title <input type="text" name="title"></label><br><br>
<label>opis <input type="text" name="opis"></label><br>
<label>seo title<input type="text" name="seo_title"></label><br>
<label>seo desc<input type="text" name="seo_description"></label><br>
<label>content<input type="text" name="content"></label><br>
<label>category<input type="text" name="category"></label><br>
<label>rodzic: 
<select name="parent_id" id="parent_id">
        <option value="">Brak rodzica</option>
            @foreach($allpages->all() as $allpage)
            @if(!$allpage->parent_id)
                <option value="{{$allpage->id}}" >{{$allpage->title}}</option>
                @endif
            @endforeach
        </select>
</label><br>
<label>thumb<input type="text" name="thumb"></label><br>
<label>ukryty na stronie głównej?<input type="text" name="hide_menu"></label>


<button>submit</button>
</form>


@endsection
