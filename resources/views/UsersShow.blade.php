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
        <a href="/programmer" class="btn btn-outline-success btn-sm mt-2 mb-4">Go Back</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Roles</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                @foreach($users as $user)
                <tbody class="table-group-divider">
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>student</td>
                    <td><a href="/programmer/users/show/{{$user->id}}" class="btn btn-outline-success">edit</a>
                        <a href="/programmer/users/delete/{{$user->id}}" class="btn btn-outline-danger">delete</a></td>
                </tr>
                </tbody>
                @endforeach
            </table>
    </div>
@endsection
