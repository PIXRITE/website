@extends('pages')
@section('page_tag', 'contact')
<?php $page_type = 'inside' ?>

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <h1 class="page_top--heading">How We Can Help?</h1>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="page_body--left">Test Content</div>
    
    <div class="page_body--right">Test Content</div>    
</div>

@endsection