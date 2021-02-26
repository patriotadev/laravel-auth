@extends('master')

@section('konten')

<div class="container c-user">
    <h1 class="title d-flex justify-content-center">
        Selamat datang User!
    </h1>

    <a href="/logout">
        <button class="l-button">Logout</button>
    </a>
</div>

@endsection

<style>
    .c-user {
        color: white;
        margin-top: 10%;
        background-color: cornflowerblue;
        width: 60px;
        height: 60px;
        border-radius: 0px 80% 0px 80%;
        border-bottom: 7px salmon dotted;
    }

    .l-button {
        color: white;
        padding: 15px;
        border-radius: 0px 80% 0px 80%;
        border: 7px salmon dotted;
        background-color: cornflowerblue;
        transition: 0.5s all ease;
    }

    .l-button:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 8px 4px lightgray;
    }
</style>