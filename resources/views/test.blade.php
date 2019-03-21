@extends('layouts.app')

@section('metainfo')
<title>{{$current->seotitle}}</title>
<meta name="description" content="{{$current->seodesc}}">
@endsection

@section('content')
<div class="container">
<h1>Podstrona: {{$current->title}}</h1>
<div class="desc">
<blockquote class="blockquote my-5">
  <p class="mb-0">{!! html_entity_decode($current->desc) !!}</p>
  <footer class="blockquote-footer">{{($current->created_at == $current->updated_at) ? 'dodany: '.$current->created_at : 'ostatnio edytowany: '.$current->created_at}}</footer>
</blockquote>
</div>
</div>
@endsection
