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
                    <li><span class="glyphicon glyphicon-folder-open"></span>my Books</li>
                    <li><span class="glyphicon glyphicon-user"></span>Brow Book</li>
                    <li><span class="glyphicon glyphicon-user"></span>My Brow Book</li>
                    <li><span class="glyphicon glyphicon-star"></span>Rate</li>
                </ul>
            </div>
            <div class="col-md-8">
                @foreach($books as $book)
                    <img src="{{$book->photo}}">
                    <h3>{{$book->name}}</h3>
                @endforeach
            </div>
        </div>
    </div>


@endsection
