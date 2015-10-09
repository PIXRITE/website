@extends('pages')
@section('page_tag', 'contact')

@section('content')
	
<!-- Page Top -->
<div class="page_top">
    @include('pages._partials.header')
    
    <h1 class="page_top--heading">Some Short, Catchy Headline</h1>
    
    @include('pages._partials.page-bar')
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="page_body--left">Test Content</div>
    
    <div class="page_body--right">Test Content</div>    
</div>

@endsection