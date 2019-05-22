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

        .main-content .deployment {
            width: 75%;
            padding-left: 20px;
            padding-right: 20px;
        }

        .dep-name-2 h5 {
            margin-bottom: 0;
            margin-left: 20px;
        }

        .deployment-detail h5 {
            margin-bottom: 0;
            margin-left: 10px;
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

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-trash"></i>
                                <span class="nav-link-inner--text">Delete</span>
                            </a>
                        </li>
                        
                        <li class="nav-item nav-active">
                            <a class="nav-link nav-link-icon" href="{{url('create')}}">
                                <i class="fas fa-stop-circle"></i>
                                <span class="nav-link-inner--text">Cancel</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="nav-link-inner--text">Redeploy</span>
                            </a>
                        </li>

                        <li class="nav-item nav-active">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-redo"></i>
                                <span class="nav-link-inner--text">Refresh</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
        
        <div class="deployment">
            <div class="deployment-status">
                <div class="deployment-underway">
                    <i class="fas fa-spinner d-inline"></i>
                    <h2 class="d-inline">Your deployment is underway</h2>
                    <h5>Check the status of your deployment, manage resources, or troubleshoot deployment issues. Pin this page to your dashboard to easily find it next time</h5>
                </div>
            </div>

            <div class="deployment-name">
                <div class="dep-name-1" style="width: 10%; float:left">
                    <i><svg viewBox="0 0 50 50" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-064"><g><title></title><path d="M31 38H19c1.634 5.768-.386 7-10 7v3h32v-3c-9.614 0-11.636-1.229-10-7z" class="msportalfx-svg-c04" fill="#7a7a7a"></path><path d="M46.979 2H2.717C1.213 2 0 3.325 0 4.805v30.412c0 1.471 1.213 2.782 2.717 2.782h44.262c1.501 0 3.021-1.31 3.021-2.782V4.805C50 3.321 48.48 2 46.979 2" class="msportalfx-svg-c03" fill="#a0a1a2"></path><path opacity=".2" d="M47.01 2.003l-.031-.002H2.716c-1.504 0-2.717 1.324-2.717 2.805v30.411C-.001 36.69 1.212 38 2.716 38h1.053L47.01 2.003z" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M46 6v28H4V6z" class="msportalfx-svg-c15" fill="#59b4d9"></path><path d="M9 44.979L41 45v3H9z" class="msportalfx-svg-c03" fill="#a0a1a2"></path><path d="M25.517 4.095a.71.71 0 1 1-1.42 0 .71.71 0 0 1 1.42 0" class="msportalfx-svg-c13" fill="#b8d432"></path><path d="M25.027 18.802a.271.271 0 0 1-.13-.036l-8.56-4.858a.257.257 0 0 1-.128-.221c0-.091.05-.175.128-.22l8.508-4.826a.265.265 0 0 1 .256 0l8.563 4.859a.25.25 0 0 1 .127.22.251.251 0 0 1-.127.22l-8.505 4.825a.274.274 0 0 1-.132.037" class="msportalfx-svg-c01" fill="#ffffff"></path><path opacity=".7" d="M23.797 30.608a.245.245 0 0 1-.13-.034l-8.534-4.842a.25.25 0 0 1-.133-.221v-9.717c0-.092.05-.175.132-.221a.26.26 0 0 1 .261 0l8.533 4.84a.265.265 0 0 1 .126.223v9.717a.26.26 0 0 1-.126.221.274.274 0 0 1-.129.034" class="msportalfx-svg-c01" fill="#ffffff"></path><path opacity=".4" d="M26.213 30.608a.28.28 0 0 1-.134-.034.257.257 0 0 1-.125-.221v-9.656c0-.09.05-.174.125-.221l8.533-4.84a.257.257 0 0 1 .257 0 .252.252 0 0 1 .131.22v9.655a.25.25 0 0 1-.131.221l-8.53 4.842a.236.236 0 0 1-.126.034" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M15 8H6v9h3v-6h6zM6 23v9h9v-3H9v-6zm29 9h9v-9h-3v6h-6zm9-15V8h-9v3h6v6z" class="msportalfx-svg-c01" fill="#ffffff"></path></g></svg></i> 
                </div>

                <div class="dep-name-2" style="width: 90%; float:right">
                    <h5>Deployment name: CreateVm-credativ.20190522154210</h5>
                    <h5>Subscription: <a href="#">Azure for Students</a></h5>
                    <h5>Resource group: <a href="#">hehe</a></h5>
                </div>
            </div>

            <div class="deployment-detail" style="margin-top: 110px;">
                <h4>DEPLOYMENT DETAILS</h4>
                <h5>Start time: 5/22/2019, 3:44:16 PM</h5>
                <h5>Correlation ID: 9c81f7e8-7240-4cc0-b6bc-745ab9be051f</h5>
            </div>

            <div class="progress-wrapper">
                <div class="progress-info">
                    <div class="progress-label">
                        <span>Task completed</span>
                    </div>
                    <div class="progress-percentage">
                        <span>1%</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%; " id="progressBar"></div>
                </div>
            </div>
        
        </div>

    </div>
@endsection

@section('js')
    <script>
        // function progress(timeleft, timetotal, $element) {
        //     var progressBarWidth = timeleft * $element.width() / timetotal;
        //     console.log(progressBarWidth)
            
        //     $('#progressBar').animate(
        //         { width: progressBarWidth + 'px'}, 
        //         timeleft == timetotal ? 0 : 1000, 'linear');
        //     if(timeleft < timetotal) {
                
        //         setTimeout(function() {
        //             progress(timeleft + 1, timetotal, $element);
        //         }, 1000);
                
        //     }
        // };

        // progress(0, 15, $('#progressBar'));

        function move() {
            var elem = document.getElementById("progressBar"); 
            var width = 1;
            var id = setInterval(frame, 1000);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    $('.deployment-underway i').removeClass("fa-spinner");
                    $('.deployment-underway i').addClass("fa-check-circle");
                    $('.deployment-underway i').css("color","#00ff00");
                    $('.deployment-underway h2').text("Your deployment is ready");
                    $('.navbar-2 .nav-item:nth-child(1)').addClass("nav-active");
                    $('.navbar-2 .nav-item:nth-child(3)').addClass("nav-active");
                    $('.navbar-2 .nav-item:nth-child(2)').removeClass("nav-active")
                    $('.deployment-detail').append("<h5>Duration: 1 minutes 40 seconds</h5>");
                } else {
                    width++; 
                    elem.style.width = width + '%';
                    $('.progress-percentage span').text(width + '%'); 
                }
            }
        }

        
        move();

    </script>
@endsection