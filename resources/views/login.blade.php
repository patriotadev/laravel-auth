@extends('master')


@section('konten')


<div class="container c-login">
    <h1 class="mb-5">Login</h1>
    <form action="/ceklogin" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

<style>
    .c-login {
        color: white;
        margin-top: 10%;
        background-image: linear-gradient(to right, #5757C9, #F1ABB6);
        padding: 20px;
        border-radius: 20px;
        transition: 0.5s all ease;
    }

    .c-login:hover {
        transform: scale(1.15);
        box-shadow: 0px 4px 4px 4px lightgray;
    }
</style>