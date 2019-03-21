@extends('admin.layout.main')

@section('content')
    <div class="breadcrumb">{{url()->current()}}</div>
    <div class="pages">
        <h2>Nazwa strony: {{$page->title}}</h2>
        <p>Opis strony: {{$page->opis}}</p>
        <p>Slug strony: {{$page->slug}}</p>
        <p>Tytuł SEO strony: {{$page->seotitle}}</p>
        <p>Opis SEO strony: {{$page->seodesc}}</p>
        <p>ID Rodzica strony: {{$page->parent_id}}</p>
    </div>
<div class="d-flex justify-content-between">    
    <a href="/admin/pages/"><button class="btn btn-dark">back</button></a>
    <a href="/admin/pages/{{$page->id}}/edit"><button class="btn btn-success">edit</button></a>
</div>
@endsection
