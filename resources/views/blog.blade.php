@extends('layouts.app')

@section('metainfo')
<title>BLOG</title>
<meta name="description" content="">
@endsection

@section('content')
<div class="container">
@foreach($blog as $test)
<ul>
<li>{{$test->id}} | {{$test->title}} | thumb {{$test->thumb}}</li>
</ul>
@endforeach
</div>
@endsection
