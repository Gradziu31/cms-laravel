@extends('admin.layout.main')

@section('content')
<div class="breadcrumb">{{url()->current()}}</div>
<div class="pages">
    <h2>Pages info:</h2>
    <b>Wszystkie strony:</b> {{ $pages->count() }}<br>
    <b>Posty na blogu:</b> {{ $posts->count() }}
</div>
@endsection
