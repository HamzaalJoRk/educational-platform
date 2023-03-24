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
        <div class="row pt-2">
            <div class="col-12">
                <a href="/programmer1000" class="btn btn-outline-success btn-sm ">Go Back</a>
                <div class="border rounder mt-5 p-4">
                    <h1>Create a course</h1>
                    <hr>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="CourseName">Course name</label>
                                <input type="text" id="CourseName" class="form-control @error('CourseName') is-invalid @enderror"
                                       name="CourseName" value="{{old('CourseName')}}" autocomplete="off" placeholder="Enter Course name"  >
                                @error('CourseName')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="control-group col-12">
                                <label for="Details">Details</label>
                                <input type="text" id="Details" class="form-control @error('Details') is-invalid @enderror"
                                       name="Details" value="{{old('Details')}}" autocomplete="off" placeholder="Enter details"  >
                                @error('teacher')
                                <div class="alert alert-danger mt-2">
                                    {{$message}}
                                </div>
                                @enderror
{{--                                <label for="hours">The number of course hours</label>--}}
{{--                                <input type="text" id="hours" class="form-control @error('name') is-invalid @enderror"--}}
{{--                                       name="hours" value="{{old('hours')}}" autocomplete="off" placeholder="Enter the number of course hours"  >--}}
{{--                                @error('hours')--}}
{{--                                <div class="alert alert-danger mt-2">--}}
{{--                                    {{$message}}--}}
{{--                                </div>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-success">
                                    Create Course
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
