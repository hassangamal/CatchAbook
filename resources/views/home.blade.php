@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row">
                <div class="col-md-4 profile-badge">
                    <div class="panel">
                        <img src="https://dummyimage.com/400x200/e85b27/e85b27">
                        <div class="profile-pic">
                            <img src="http://susicastle.com/wp-content/uploads/2014/09/yokoyama.png" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="user-detail text-center">
                            <h1>Hassan OSC</h1>
                            <p class="title">Web Developer IN OSC</p>
                            <hr>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-twitter btn-sm" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher" href="#">
                                <i class="fab fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div class="card-header">About</div>
                        <div class="card-body">
                            <div class="card-body text-light">
                                <a href="#"><i class="fa fa-map-marker"></i> Went To<span style="color:orange"> Holanda</span> </a>
                                <a href="#"><i class="fa fa-briefcase"></i> Worked at <span style="color:orange"> Booking</span> </a>
                                <a href="#"><i class="fa fa-home "></i> Lives in <span style="color:orange"> Cairo</span></a>
                                <a href="#"><i class="fa fa-user "></i> Followers <span style="color:orange"> 10</span></a>
                            </div>
                            <hr>
                            <div class="follow">
                                <div>
                                    <a href="{{ url('/borrow') }}">
                                        <button class="btn btn-primary add" style=" font-size: 15px;margin-bottom: 5px;">Borrow</button>
                                    </a>
                                    <a href="{{ url('/myborrow') }}">
                                        <button class="btn btn-primary add" style="font-size: 15px;">MyBorrow</button>
                                    </a>
                                </div>
                                <div >
                                    <h3 style=" font-size: 15px;margin-top: 8px;">{{$user->borrows}}</h3>
                                    <h3 style=" font-size: 15px;margin-top: 20px;">{{$user->myborrows}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">Contact</div>
                        <div class="card-body">
                            <div class="follow">
                                <a href="#" class="btn btn-success btn-sm add" style=" padding: 10px">Follow</a>
                                <a href="#" class="btn btn-info btn-sm add"style=" padding: 10px">Send Messege</a>
                            </div>
                        </div>
                        <div class="card-header">Comments</div>
                        <div class="card-body" >
                            @foreach($comments as $comm)
                                <p>{{$comm->comment}}</p>
                                <hr>
                            @endforeach
                                <form method="post" action="{{ url("addcomment/$user->id")}}" style="width: 90%">
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" id="comment" name="comment" style="padding: 10px; border: 1px solid #f90;font-size: 14px; border-radius: 5px; width: 90%" placeholder="Please Add Your Comment Here" required>
                                    <button class="btn btn-info btn btn-dark form-control add" type="submit" style="font-size: 15px; text-align: center;margin-top: 5px; width: 90%" >
                                        <span class="glyphicon glyphicon-plus"></span> Add Comment</button>
                                </form>
                        </div>
                    </div>
                </div>

            <div class="col-md-8 Home" >
                @foreach($books as $book)
                    <div class="card" style="width: 26rem; border-radius: 5%;">
                        <img class="card-img-top" style="height: 160px;padding: 5px;border-radius: 15px;" src="{{$book->photo}}">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold;font-size: 20px">{{$book->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                        </div>
                        <div style="display: grid;  grid-template-columns: 1fr 1fr; grid-column-gap: 5px;padding: 5px;">
                            <form method="post" action="{{ url("delete/$book->id")}}" >
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger btn-sm add"  type="submit" >
                                    <span class="glyphicon glyphicon-trash" style="margin-right: 20px;
    padding: 5px; width: 70px; margin-left: 20px">Delete</span></button>
                            </form>
                            <form method="post" action="{{ url("edit/$book->id")}}">
                                {{ method_field('GET') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-success btn-sm add" type="submit">
                                    <span class="glyphicon glyphicon-edit" style="margin-right: 20px;
    padding: 5px;width: 70px; margin-left: 20px">Update</span></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
