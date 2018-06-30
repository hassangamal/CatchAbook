@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/add.css') }}" rel="stylesheet">

    <div class="box">
        <h1>Add a Book</h1>
        <p class="start">The Image</p>
        <label for="inputfile"><input type="file" id="inputfile" /></label>
        <div class="inputbox">
            <form>

                <input type="text" name="" required="">
                <label>BookName</label>
        </div>
        <div class="inputbox">
            <input type="text" name="" required="">
            <label>Keywords</label>
        </div>
        <div class="inputbox">
            <input type="text" name="" required="">
            <label>ISBN</label>
        </diV>
        <div class="star-rating">
            <p class="state">The State</p>
            <input id="star-5" type="radio" name="rating" value="star-5">
            <label for="star-5" title="very excellent">
                <i class="active fa fa-star" aria-hidden="true"></i>
            </label>
            <input id="star-4" type="radio" name="rating" value="star-4">
            <label for="star-4" title="excellent">
                <i class="active fa fa-star" aria-hidden="true"></i>
            </label>
            <input id="star-3" type="radio" name="rating" value="star-3">
            <label for="star-3" title="good">
                <i class="active fa fa-star" aria-hidden="true"></i>
            </label>
            <input id="star-2" type="radio" name="rating" value="star-2">
            <label for="star-2" title="bad">
                <i class="active fa fa-star" aria-hidden="true"></i>
            </label>
            <input id="star-1" type="radio" name="rating" value="star-1">
            <label for="star-1" title="verybad">
                <i class="active fa fa-star" aria-hidden="true"></i>
            </label>
        </div>
        <div class="btn-sbmt">
            <input type="submit" value="Add The Book" class="button" >
        </div>

        </form>
    </div>
@endsection