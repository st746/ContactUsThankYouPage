
@extends('layouts.default')

@section('content')

    <h1>Contact</h1>
    <p class="lead">Please fill out below form to contact this site owner</p>

    <form action="/contact" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Name">Name</label>
            <input name="Name" type="text" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="Email">Email address</label>
            <input name="email" type="emial" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
@endsection