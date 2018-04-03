@extends('layouts.app')

@section('content')
    <h1 s>library website ,you can borrow a book from someone hard copy for some mony</h1>
    <div class="container Home">
        <div class="row">
            <div class="col-md-4">
                <div class="header">
                    <img src="http://www.lorempixel.com/300/240/nightlife/5/" class="imgBc" />
                    <img src="http://www.lorempixel.com/110/110/nightlife/5/" class="circle" />
                    <h3>Hassan OSC</h3>
                </div>
                <ul class="list-unstyled options">
                    <li><span class="glyphicon glyphicon-info-sign"></span>
                        <p>
                            this is my first App i like it very much
                        </p>
                    </li>
                    <a href="{{ url('/home') }}"><li><span class="glyphicon glyphicon-folder-open"></span>my Books</li></a>
                    <a href="{{ url('/brow') }}"><li><span class="glyphicon glyphicon-user"></span>Brow Book</li></a>
                    <a href="{{ url('/mybrow') }}"><li><span class="glyphicon glyphicon-user"></span>My Brow Book</li></a>
                    <a><li><span class="glyphicon glyphicon-star"></span>Rate</li></a>
                    <a href="{{ url('/add') }}"><li><span class="glyphicon glyphicon-plus"></span>Add Book</li></a>
                </ul>
            </div>
            <div class="col-md-8">
                @foreach($books as $book)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$book->photo}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ url('/home') }}" class="btn btn-primary">Delete</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>


@endsection
