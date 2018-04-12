@extends('layouts.app')

@section('content')
@yield('title')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
<link href="{{ asset('css/hint.min.css') }}" rel="stylesheet">



<div class="form-group extra-class" > 
        
      
        <label for="ex3">Title</label>
        <input class="form-control" id="ex3" type="text">
           
          <label for="ex3" >Author</label>
        <input class="form-control" id="ex3" type="text">
           
                   <label for="ex3">Keyword</label>
        <input class="form-control" id="ex3" type="text">
    
              <label for="ex3">ISBN</label>  
    
    <div class="isbninfo">
                     <input class="form-control" id="ex3" type="text"><i class="fas fa-info-circle"></i>
                    <span class="fa-info-circle hint--right hint--bounce" aria-label="you can get it from goodreads" id="rr"></span>
   </div>
   
</div>

    <div class="btn-content">
       <button type="button" class="btn btn-info btn btn-dark form-control"  style ="width: 20%; font-size:1.3em; ">
      <span class="glyphicon glyphicon-search" ></span> Search </button>
     </div>
@endsection


