@extends('pages')
@section('page_tag', 'work')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE</title>
@endsection

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <h1 class="page_top--heading">Some Our Past Work</h1>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <div class="page_body--left">Test Content</div>

        <div class="page_body--right">Test Content</div>
    </div> 
</div>

@endsection