@extends('layout')

@section('title')
    Registration
@endsection

@section('same_content')

        <h4><font color="#a52a2a">Fill the gaps to order</font></h4>

        @if($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach(@$errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
            @endif
        <form class="contact-form" action="/ordering/check" method="post">
            @csrf
            <font color="black"><b for="Fullname:">Full name:</label></br><input type="text" name="name" id="Full name" placeholder="Shyngys Khan"></br>
                <font color="black"><label for="email:">email:</label></br><input type="text" name="email" id="email" placeholder="example@gmail.com"></br>
                    <font color="black"><label for="phone:">Phone number:</label></br><input type="text" name="number"id="number"placeholder="87777171717"></br>
                        <font color="black"><label for="order:">Ordering food:</b></label></br> <textarea name="order" id="order" placeholder="ordering food name"></textarea></br>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
        <style>
            body {
             background-image: url(images/delivery1.jpg);
                background-color:yellow;
            }
        </style>
<!--
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>img</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div class="container">
            <div class="glass">
                <img src="set1.jpeg" style="width:100%";>
            </div>
            <div class="glass">
                <img src="set2.jpeg" style="width:100%";>
            </div>
        </div>

        </body>
        </html>
->>
@endsection
