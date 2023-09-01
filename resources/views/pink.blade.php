@extends('layout')

@section('title')
    Reviews
@endsection

@section('same_content')

    <h4><font color="#a52a2a">We would appreciate your feedback</font></h4>

    @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach(@$errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
        </div>
    @endif
    <form class="contact-form" action="/pink/check" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Feedback:</label>
            <textarea class="form-control" id="otzyv" name="otzyv" placeholder="Its so fast and cheaper than others" rows="3"></textarea>

        </div>
        <button type="submit" class="btn btn-success" style="height:40px;width:80px" >Submit</button>
    </form>




@endsection
