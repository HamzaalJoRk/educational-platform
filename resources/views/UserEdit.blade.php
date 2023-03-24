@extends('layouts.master')
@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <img style="width: 80px" src="http://lms.theitsea.com/pluginfile.php/1/core_admin/logo/0x150/1668494695/%D8%B4%D8%B9%D8%A7%D8%B1%20%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A5%D8%B9%D8%AF%D8%A7%D8%AF%201000%D9%85%D8%A8%D8%B1%D9%85%D8%AC%20%281%29.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-success fw-bold" aria-current="page" href="/programmer">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fw-bold" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fw-bold" href="#">Countact</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class=""></div>
    </nav>
@endsection
@section('main')
    <div class="container">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="control-group col-12">
                    <a href="/programmer/users/show" class="btn btn-outline-success btn-sm mt-2 mb-2">Go Back</a>
                    <label for="name">User Name</label>
                    <input type="text" id="name" class="form-control"
                           name="name" placeholder="Enter New Name" value="{{$user->name}}" required >
                </div>
                <div class="control-group col-12">
                    <label for="email">User Email</label>
                    <input type="text" id="email" class="form-control"
                           name="email" placeholder="Enter Email" value="{{$user->email}}" required >
                </div>
                <div class="control-group col-12">
                    <label for="password">User Password</label>
                    <input type="text" id="password" class="form-control"
                           name="password" placeholder="Enter Password" value="{{$user->password}}" required >
            <div class="row mt-2">
                <div class="control-group col-12 text-center">
                    <button id="btn-submit" class="btn btn-outline-success">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
