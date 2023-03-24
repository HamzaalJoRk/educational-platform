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
                <li class="nav-item">
                    <a class="nav-link text-success fw-bold" href="/programmer/users/show">Users</a>
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
    <div class="row">
        @forelse($course as $courses)
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3 ">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-danger">{{$courses->CourseName}}</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur distinctio dolore facilis nostrum obcaecati recusandae velit. Architecto autem enim excepturi exercitationem hic id incidunt, nam neque officia praesentium quod sequi.</p>
                        <a href="/programmer/{{$courses->id}}" class="btn btn-success">View Course</a>
                    </div>
                </div>
            </div>
        @empty
            <h1>No Courses</h1>
        @endforelse

    </div>
</div>
@endsection
