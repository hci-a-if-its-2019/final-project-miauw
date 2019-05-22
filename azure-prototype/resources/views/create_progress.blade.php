@extends('master')


@section('css')
    @include('nav_css')
    <style>
        html, body {
            background-color: #FFFFFF;
        }

        .main-content {
            top: 52px;
            position: relative;
            overflow: hidden;
            height: calc(100vh - 52px);
        }

        .main-content .breadcrumb {
            background-color: inherit;
            font-size: 13px;
            margin-bottom: 0;
        }

        .main-content .navbar-1 {
            padding: 0.3rem 1rem;
            background-color: inherit;
        }

        .main-content .navbar-1 .nav-item * {
            font-size: 13px;
        }

        .main-content .navbar-1 .nav-item .nav-link-inner--text {
            color: #0038A8;
        }

        .main-content .navbar-2 {
            padding: 0.5rem 1rem;
            background-color: inherit;   
        }

        .main-content .navbar-2 .navbar-nav .nav-item * {
            font-size: 14px;
            color: #C8C4BF;
        }

        .main-content .navbar-2 .navbar-nav .nav-active * {
            color: #0038A8;
        }
    </style>
@endsection

@section('body')
    @include('nav')

    <div class="main-content vertical-center">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CreateVm-credativ.20190522154210 - Overview</li>
            </ol>
        </nav>

        <nav class="navbar navbar-horizontal navbar-expand-lg border-bottom navbar-1">
            <div class="container">
                <a class="navbar-brand">
                    <h3>CreateVm-credativ.20190522154210 - Overview</h3>
                </a>
                <div class="collapse navbar-collapse" id="navbar-default">
                    
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{url('virtual_machine')}}" role="button" >
                                <i class="fas fa-times"></i>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-horizontal navbar-expand-lg border-bottom navbar-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbar-default">
                    
                    <ul class="navbar-nav ml-0 mr-2">

                        <li class="nav-item nav-active">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-trash"></i>
                                <span class="nav-link-inner--text">Delete</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{url('create')}}">
                                <i class="fas fa-plus"></i>
                                <span class="nav-link-inner--text">Add</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-clock"></i>
                                <span class="nav-link-inner--text">Reservation</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-columns"></i>
                                <span class="nav-link-inner--text">Edit Columns</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-retweet"></i>
                                <span class="nav-link-inner--text">Refresh</span>
                            </a>
                        </li>
                        
                        
                    </ul>

                    <ul class="navbar-nav ml-0 mr-2">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-tags"></i>
                                <span class="nav-link-inner--text">Assign Tags</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-play"></i>
                                <span class="nav-link-inner--text">Start</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-redo-alt"></i>
                                <span class="nav-link-inner--text">Restart</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-stop"></i>
                                <span class="nav-link-inner--text">Stop</span>
                            </a>
                        </li>

                        
                        
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-tasks"></i>
                                <span class="nav-link-inner--text">Services</span>
                            </a>
                        </li>
                        
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('js')
    <script>
    </script>
@endsection