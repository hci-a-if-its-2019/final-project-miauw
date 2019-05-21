@extends('master')
@section('css')
    <style>
        html, body {
            background-color: #F2F3F4;
            height: 100vh;
            font-family: 'Open Sans', sans-serif;   
        }

        #sidenav-main {
            background-color: #1B1B1B;
            color: #F2F3F4;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #F2F3F4;
        }

        .navbar-horizontal .navbar-nav .nav-link {
            padding-top: 0;
            padding-bottom: 0;
        }

        header.navbar.navbar-horizontal {
            background-color: #1B1B1B;
            z-index: 1;
            padding: 0.5rem 1rem;
        }

        .navbar-vertical.navbar-expand-md .navbar-nav {
            padding-top: 1rem;
        }

        .navbar-horizontal .navbar-brand {
            color: #F2F3F4;
            font-weight: 700;
        }

        .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
            padding: 0.25rem 1rem;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #C8C4BF;
        }

        .navbar-vertical .navbar-nav .nav-link i svg {
            height: 20px;
            width: 20px;
        }

        .navbar-search {
            height: 30px;
        }

        .navbar-search * {
            height: 30px;
        }

        .navbar-search .input-group.input-group-alternative {
            width: 500px;
        }

        .navbar-search .input-group .input-group-text {
            margin-top: 5px;
        }

        .navbar-search .input-group .form-control:not(:first-child) {
            margin-top: -3px;
        }
    </style>
@endsection

@section('body')

    <header class="navbar navbar-horizontal navbar-expand navbar-dark flex-row align-items-md-center ct-navbar">
        <a class="navbar-brand mr-0 mr-md-2" href="" aria-label="Bootstrap">
            Microsoft Azure
        </a>

        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search resources, services, and docs" type="text">
                </div>
            </div>
        </form>

        <div class="d-none d-sm-block ml-5 mr-5">
            <ul class="navbar-nav ct-navbar-nav flex-row align-items-center">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon">
                        <i class="fas fa-terminal"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon">
                        <i class="far fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon">
                        <i class="fas fa-question"></i>
                    </a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">rahandi48@live.com</span>
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                        <h4 class="text-overflow m-0">Rahandi Pasha</h4>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My microsoft account</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="fab fa-keycdn"></i>
                        <span>My permissions</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <span> View my bill</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        

        
        

    </header>


    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">
                        <i class="far fa-plus-square"></i> Create a resource
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/icons.html">
                        <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/maps.html">
                        <i class="fas fa-columns"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/profile.html">
                        <i class="fas fa-list-ul"></i> All services
                        </a>
                    </li>
                </ul>
                
                <!-- Divider -->
                <hr class="my-3">
                
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">
                <i class="fas fa-star"></i> Favorites
                </h6>
                
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="./docs/getting-started/overview.html">
                            <i><svg viewBox="-454 256 50 50" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-0da"><g><title></title><path d="M-449 261h12v12h-12zm14 0h12v12h-12zm14 0h12v12h-12zm-28 14h12v12h-12zm14 0h12v12h-12zm14 0h12v12h-12zm-28 14h12v12h-12zm14 0h12v12h-12zm14 0h12v12h-12z" class="msportalfx-svg-c13" fill="#b8d432"></path></g></svg></i> 
                            All resources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./docs/foundation/colors.html">
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><path fill="#3999C6" d="M25.047,22.647c-0.078,0-0.15-0.023-0.22-0.064l-14.711-8.49c-0.14-0.08-0.223-0.228-0.223-0.389c0-0.156,0.083-0.304,0.223-0.382l14.616-8.435c0.139-0.077,0.309-0.077,0.442,0l14.714,8.495c0.133,0.078,0.221,0.224,0.221,0.382c0,0.163-0.088,0.308-0.221,0.387l-14.619,8.433C25.2,22.624,25.126,22.647,25.047,22.647"/><path fill="#59B4D9" d="M22.932,43.284c-0.08,0-0.158-0.019-0.226-0.059L8.042,34.761c-0.142-0.079-0.226-0.224-0.226-0.386V17.39c0-0.159,0.084-0.305,0.226-0.389c0.134-0.077,0.306-0.077,0.448,0l14.662,8.464c0.136,0.082,0.218,0.228,0.218,0.387v16.987c0,0.163-0.083,0.305-0.218,0.386C23.079,43.266,23.006,43.284,22.932,43.284"/><path fill="#59B4D9" d="M27.081,43.284c-0.075,0-0.152-0.019-0.226-0.059c-0.136-0.081-0.22-0.223-0.22-0.386V25.962c0-0.159,0.084-0.305,0.22-0.387l14.66-8.461c0.142-0.078,0.308-0.078,0.448,0c0.134,0.08,0.22,0.227,0.22,0.385v16.877c0,0.162-0.085,0.306-0.22,0.386l-14.665,8.464C27.237,43.266,27.158,43.284,27.081,43.284"/><path opacity="0.5" fill="#FFFFFF" d="M27.081,43.284c-0.075,0-0.152-0.019-0.226-0.059c-0.136-0.081-0.22-0.223-0.22-0.386V25.962c0-0.159,0.084-0.305,0.22-0.387l14.66-8.461c0.142-0.078,0.308-0.078,0.448,0c0.134,0.08,0.22,0.227,0.22,0.385v16.877c0,0.162-0.085,0.306-0.22,0.386l-14.665,8.464C27.237,43.266,27.158,43.284,27.081,43.284"/><path fill="#7A7A7A" d="M9.558,45.171c-0.247,0-0.497-0.063-0.726-0.195l-6.845-3.952C0.835,40.358,0,38.911,0,37.582V12.418c0-1.329,0.835-2.777,1.987-3.441l6.845-3.952c0.697-0.401,1.586-0.163,1.987,0.532c0.402,0.696,0.163,1.585-0.532,1.987l-6.845,3.952c-0.243,0.141-0.532,0.641-0.532,0.922v25.164c0,0.281,0.289,0.782,0.532,0.922l6.845,3.952c0.696,0.402,0.934,1.291,0.532,1.987C10.55,44.91,10.061,45.171,9.558,45.171z"/><path fill="#7A7A7A" d="M40.442,4.829c0.247,0,0.497,0.063,0.726,0.195l6.845,3.952C49.165,9.642,50,11.089,50,12.418v25.164c0,1.329-0.835,2.777-1.987,3.441l-6.845,3.952c-0.697,0.401-1.586,0.163-1.987-0.532c-0.402-0.696-0.163-1.585,0.532-1.987l6.845-3.952c0.243-0.141,0.532-0.641,0.532-0.922V12.418c0-0.281-0.289-0.782-0.532-0.922l-6.845-3.952c-0.696-0.402-0.934-1.291-0.532-1.987C39.45,5.09,39.939,4.829,40.442,4.829z"/></svg></i>
                            Resource groups 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg viewBox="0 0 50 50" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-051"><g><title></title><path d="M40.193 44.839a24.898 24.898 0 0 1-15.167 5.151c-7.52 0-14.956-3.376-19.87-9.803C-3.24 29.225-1.168 13.548 9.814 5.148 14.343 1.663 19.686 0 24.979 0c7.52 0 14.958 3.376 19.87 9.809 8.398 10.959 6.305 26.639-4.656 35.03" class="msportalfx-svg-c15" fill="#59b4d9"></path><path d="M35.6 29.378a5.385 5.385 0 0 0 7.541 1.004c.123-.094.218-.208.33-.309 2.409 1.697 4.082 2.817 5.025 3.459.279-.723.472-1.417.67-2.142a130.857 130.857 0 0 1-4.29-3.356c.639-1.68.437-3.64-.73-5.171a5.36 5.36 0 0 0-6.936-1.377 224.317 224.317 0 0 1-8.293-7.833c9.165-4.929 15.676-4.207 15.676-4.207-1.087-1.386-2.305-2.6-3.606-3.697-3.865-.597-9.869-.53-16.729 3.119l-.002-.003h-.001a200.322 200.322 0 0 1-6.983-7.712A23.264 23.264 0 0 0 13.96 2.5c1.749 2.862 4.102 5.749 6.754 8.565l.017.017a46.293 46.293 0 0 0-6.944 6.015c-.29.309-.569.62-.842.931a7.546 7.546 0 0 0-4.117.282C6.564 13.425 6.746 9.501 7.104 7.478c-.983 1.03-1.901 2.113-2.692 3.267-.591 2.415-.759 5.898.985 10.095a7.538 7.538 0 0 0-.005 9.153c.176.229.364.442.559.645a37.87 37.87 0 0 0-1.46 8.761c.237.322.237.582.472.896 1.199 1.538 2.705 2.834 4.16 4.008-.18-2.75.014-6.806 1.714-11.372a7.507 7.507 0 0 0 3.483-.566c.64.563 1.31 1.132 2.025 1.711a41.672 41.672 0 0 0 7.285 4.643 4.974 4.974 0 0 0 .968 3.518 4.998 4.998 0 0 0 6.983.919 4.918 4.918 0 0 0 1.108-1.216c3.889.866 7.287 1.019 9.806 1.019.386 0 2.177-2.436 3.203-3.946-1.534.321-6.083.946-12.3-.84a4.952 4.952 0 0 0-.898-1.98c-1.579-2.07-4.466-2.518-6.618-1.133a46.853 46.853 0 0 1-6.758-4.49 46.422 46.422 0 0 1-1.359-1.118 7.578 7.578 0 0 0 .318-7.55c.286-.286.567-.573.871-.857 2.311-2.159 4.485-3.887 6.519-5.274-.082-.076-.156-.156-.236-.233.081.075.157.152.239.227l-.002.001c3.121 2.886 6.43 5.621 9.564 8.065-.829 1.758-.699 3.899.562 5.547z" class="msportalfx-svg-c01" fill="#ffffff"></path></g></svg></i>
                            App Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"><g><path fill="#3999C6" d="M63.6,32.4c0.6-0.6,0.5-1.7,0-2.3L60.5,27L46.7,13.6c-0.6-0.6-1.5-0.6-2.2,0l0,0c-0.6,0.6-0.8,1.7,0,2.3L59,30.1c0.6,0.6,0.6,1.7,0,2.3L44.2,47.1c-0.6,0.6-0.6,1.7,0,2.3l0,0c0.6,0.6,1.7,0.5,2.2,0l13.7-13.6c0,0,0,0,0.1-0.1L63.6,32.4z"/><path fill="#3999C6" d="M0.4,32.4c-0.6-0.6-0.5-1.7,0-2.3L3.5,27l13.8-13.4c0.6-0.6,1.5-0.6,2.2,0l0,0c0.6,0.6,0.8,1.7,0,2.3L5.3,30.1c-0.6,0.6-0.6,1.7,0,2.3l14.5,14.7c0.6,0.6,0.6,1.7,0,2.3l0,0c-0.6,0.6-1.7,0.5-2.2,0L3.6,36c0,0,0,0-0.1-0.1L0.4,32.4z"/><polygon fill="#FCD116" points="47.6,2.5 28.1,2.5 17.6,32.1 30.4,32.2 20.4,61.5 48,22.4 34.6,22.4 	"/><polygon opacity="0.3" fill="#FF8C00" enable-background="new    " points="34.6,22.4 47.6,2.5 37.4,2.5 26.6,27.1 39.4,27.2 20.4,61.5 48,22.4 	"/></g></svg></i>
                            Function Apps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg viewBox="-0.5 0.5 50 50" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-0ea"><g><title></title><path d="M5.757 7.288v36.111c0 3.749 8.392 6.789 18.743 6.789v-42.9H5.757z" class="msportalfx-svg-c19" fill="#0072c6"></path><path d="M24.243 50.187h.257c10.351 0 18.743-3.038 18.743-6.788V7.288h-19v42.899z" class="msportalfx-svg-c19" fill="#0072c6"></path><path opacity=".15" d="M24.243 50.187h.257c10.351 0 18.743-3.038 18.743-6.788V7.288h-19v42.899z" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M43.243 7.288c0 3.749-8.392 6.788-18.743 6.788S5.757 11.037 5.757 7.288 14.149.5 24.5.5s18.743 3.039 18.743 6.788" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M39.411 6.897c0 2.475-6.676 4.479-14.911 4.479S9.588 9.372 9.588 6.897c0-2.474 6.677-4.479 14.912-4.479s14.911 2.005 14.911 4.479" class="msportalfx-svg-c14" fill="#7fba00"></path><path d="M36.287 9.634c1.952-.757 3.125-1.705 3.125-2.735 0-2.475-6.676-4.48-14.912-4.48-8.235 0-14.911 2.005-14.911 4.48 0 1.03 1.173 1.978 3.125 2.735C15.44 8.576 19.7 7.893 24.5 7.893c4.801 0 9.059.683 11.787 1.741" class="msportalfx-svg-c13" fill="#b8d432"></path><path d="M18.547 32.354c0 1.122-.407 1.991-1.221 2.607-.814.616-1.938.924-3.373.924-1.221 0-2.241-.22-3.061-.66v-2.64c.946.803 1.988 1.205 3.126 1.205.55 0 .975-.11 1.275-.33s.45-.511.45-.875c0-.357-.144-.668-.433-.932s-.876-.605-1.761-1.023c-1.804-.846-2.706-2.002-2.706-3.464 0-1.061.393-1.912 1.18-2.553.786-.64 1.831-.961 3.134-.961 1.155 0 2.111.152 2.871.454v2.466c-.797-.55-1.705-.825-2.722-.825-.511 0-.915.108-1.212.325a1.026 1.026 0 0 0-.445.87c0 .374.119.681.359.92.239.239.73.535 1.472.887 1.106.523 1.893 1.053 2.364 1.592.468.54.703 1.211.703 2.013zm12.727-2.672c0 1.391-.317 2.599-.949 3.621-.633 1.023-1.523 1.74-2.672 2.153l3.431 3.176H27.62l-2.45-2.747c-1.05-.038-1.998-.316-2.842-.833-.844-.516-1.496-1.225-1.955-2.124s-.689-1.902-.689-3.007c0-1.226.249-2.319.746-3.279.498-.96 1.197-1.698 2.099-2.215.902-.516 1.935-.775 3.102-.775 1.088 0 2.063.25 2.924.751.86.5 1.528 1.212 2.004 2.136.477.924.715 1.972.715 3.143zm-2.804.149c0-1.199-.261-2.146-.784-2.842s-1.237-1.044-2.145-1.044c-.924 0-1.663.349-2.219 1.047-.555.699-.833 1.628-.833 2.788 0 1.155.272 2.077.816 2.767.545.69 1.267 1.035 2.169 1.035.919 0 1.647-.334 2.186-1.002.54-.667.81-1.584.81-2.749zm11.803 5.848h-7.044V23.851h2.664v9.667h4.38z" class="msportalfx-svg-c01" fill="#ffffff"></path></g></svg></i>
                            SQL databases
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                        <i><svg viewBox="0 0 23.981 22" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-0fb"><g><title></title><title>Cosmos_DB_2</title><path d="M19.8 9.8A7.98 7.98 0 1 1 10.3 4a7.95 7.95 0 0 1 9.5 5.8z" class="msportalfx-svg-c15" fill="#59b4d9"></path><path d="M11 14.9a2.112 2.112 0 0 0-2.1-2.1h-.4A2.015 2.015 0 0 0 7 10.3H4.4a7.8 7.8 0 0 0 1.9 6.8h2.6a2.2 2.2 0 0 0 2.1-2.2zm2.6-8.7v.4h-.9a2.2 2.2 0 0 0 0 4.4H20a7.624 7.624 0 0 0-4.1-6.2H15a1.367 1.367 0 0 0-1.4 1.4zm6.4 6.3h-4.3a1.793 1.793 0 0 0-1.8 1.8 2.92 2.92 0 0 0 .2.9 1.812 1.812 0 0 0-1.2 2.2 1.631 1.631 0 0 0 1.7 1.2h1.2a7.947 7.947 0 0 0 4.2-6.1z" opacity=".5" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M3.2 6.4a.215.215 0 0 1-.2-.2A2.8 2.8 0 0 0 .2 3.4c-.1.1-.2-.1-.2-.2A.215.215 0 0 1 .2 3 2.8 2.8 0 0 0 3 .2c0-.2.1-.2.2-.2s.3 0 .3.2A2.8 2.8 0 0 0 6.3 3a.2.2 0 0 1 0 .4 2.8 2.8 0 0 0-2.8 2.8c0 .1-.1.2-.3.2z" class="msportalfx-svg-c13" fill="#b8d432"></path><path d="M20.3 22c-.1 0-.1 0-.1-.1a1.666 1.666 0 0 0-1.7-1.6c-.1 0-.1 0-.1-.1s0-.1.1-.1a1.735 1.735 0 0 0 1.7-1.6c0-.1 0-.1.1-.1s.1 0 .1.1a1.666 1.666 0 0 0 1.7 1.6c.1 0 .1 0 .1.1s0 .1-.1.1a1.735 1.735 0 0 0-1.7 1.6c.1.1 0 .1-.1.1z" class="msportalfx-svg-c15" fill="#59b4d9"></path><path d="M23.7 4.6c-.8-1.2-2.6-1.5-5.5-.8a19.752 19.752 0 0 0-2.6.8 7.837 7.837 0 0 1 1.5 1c.5-.1 1-.3 1.4-.4a9.079 9.079 0 0 1 2.3-.3c.9 0 1.4.2 1.6.5.3.5 0 1.7-1.6 3.6a9.428 9.428 0 0 1-1 1 34.078 34.078 0 0 1-6 4.6A27.9 27.9 0 0 1 7 17.7c-2.9.9-4.9.9-5.3.2s.4-2.5 2.6-4.6a11.019 11.019 0 0 1-.2-1.8C.7 14.6-.4 17.3.4 18.7a3.51 3.51 0 0 0 3 1.2 15.047 15.047 0 0 0 5.1-1.1 33.625 33.625 0 0 0 6-3 41.869 41.869 0 0 0 5.4-4 17.044 17.044 0 0 0 1.9-1.9c2-2.3 2.6-4.1 1.9-5.3z"></path></g></svg></i>
                        Azure cosmos DB
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('virtual_machine')}}">
                        <i><svg viewBox="0 0 50 50" class="fxs-portal-svg" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-064"><g><title></title><path d="M31 38H19c1.634 5.768-.386 7-10 7v3h32v-3c-9.614 0-11.636-1.229-10-7z" class="msportalfx-svg-c04" fill="#7a7a7a"></path><path d="M46.979 2H2.717C1.213 2 0 3.325 0 4.805v30.412c0 1.471 1.213 2.782 2.717 2.782h44.262c1.501 0 3.021-1.31 3.021-2.782V4.805C50 3.321 48.48 2 46.979 2" class="msportalfx-svg-c03" fill="#a0a1a2"></path><path opacity=".2" d="M47.01 2.003l-.031-.002H2.716c-1.504 0-2.717 1.324-2.717 2.805v30.411C-.001 36.69 1.212 38 2.716 38h1.053L47.01 2.003z" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M46 6v28H4V6z" class="msportalfx-svg-c15" fill="#59b4d9"></path><path d="M9 44.979L41 45v3H9z" class="msportalfx-svg-c03" fill="#a0a1a2"></path><path d="M25.517 4.095a.71.71 0 1 1-1.42 0 .71.71 0 0 1 1.42 0" class="msportalfx-svg-c13" fill="#b8d432"></path><path d="M25.027 18.802a.271.271 0 0 1-.13-.036l-8.56-4.858a.257.257 0 0 1-.128-.221c0-.091.05-.175.128-.22l8.508-4.826a.265.265 0 0 1 .256 0l8.563 4.859a.25.25 0 0 1 .127.22.251.251 0 0 1-.127.22l-8.505 4.825a.274.274 0 0 1-.132.037" class="msportalfx-svg-c01" fill="#ffffff"></path><path opacity=".7" d="M23.797 30.608a.245.245 0 0 1-.13-.034l-8.534-4.842a.25.25 0 0 1-.133-.221v-9.717c0-.092.05-.175.132-.221a.26.26 0 0 1 .261 0l8.533 4.84a.265.265 0 0 1 .126.223v9.717a.26.26 0 0 1-.126.221.274.274 0 0 1-.129.034" class="msportalfx-svg-c01" fill="#ffffff"></path><path opacity=".4" d="M26.213 30.608a.28.28 0 0 1-.134-.034.257.257 0 0 1-.125-.221v-9.656c0-.09.05-.174.125-.221l8.533-4.84a.257.257 0 0 1 .257 0 .252.252 0 0 1 .131.22v9.655a.25.25 0 0 1-.131.221l-8.53 4.842a.236.236 0 0 1-.126.034" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M15 8H6v9h3v-6h6zM6 23v9h9v-3H9v-6zm29 9h9v-9h-3v6h-6zm9-15V8h-9v3h6v6z" class="msportalfx-svg-c01" fill="#ffffff"></path></g></svg></i> 
                        Virtual machines
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                        <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#3E3E3E" d="M44,50H6c-3.314,0-6-2.686-6-6V5h50v39C50,47.314,47.314,50,44,50z"/> <rect x="4" y="16" opacity="0.9" fill="#FCD116" width="42" height="11"/> <rect x="4" y="31" fill="#7FBA00" width="42" height="15"/> <rect x="4" y="5" opacity="0.9" fill="#FFFFFF" width="42" height="7"/> <rect x="4" y="31" opacity="0.3" fill="#FFFFFF" enable-background="new " width="42" height="2"/> <rect x="4" y="16" opacity="0.3" fill="#FFFFFF" enable-background="new " width="42" height="2"/> <path opacity="0.15" fill="#FFFFFF" enable-background="new " d="M0,5v42.693C0,48.907,0.985,49.9,2.188,49.9H8L40,5H0z"/> </svg> </i> 
                        Storage accounts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#3999C6" d="M49.7,25.7c0.5-0.5,0.4-1.3,0-1.8l-2.4-2.4L36.5,11c-0.5-0.5-1.2-0.5-1.7,0l0,0c-0.5,0.5-0.6,1.3,0,1.8 l11.3,11.1c0.5,0.5,0.5,1.3,0,1.8L34.6,37.2c-0.5,0.5-0.5,1.3,0,1.8l0,0c0.5,0.5,1.3,0.4,1.7,0l10.7-10.6c0,0,0,0,0.1-0.1L49.7,25.7 z"/> <path fill="#3999C6" d="M0.3,25.7c-0.5-0.5-0.4-1.3,0-1.8l2.4-2.4L13.5,11c0.5-0.5,1.2-0.5,1.7,0l0,0c0.5,0.5,0.6,1.3,0,1.8 L4.1,23.9c-0.5,0.5-0.5,1.3,0,1.8l11.3,11.5c0.5,0.5,0.5,1.3,0,1.8l0,0c-0.5,0.5-1.3,0.4-1.7,0L2.8,28.5c0,0,0,0-0.1-0.1L0.3,25.7z" /> <path fill="#7FBA00" d="M18.2,24.8c0,1.9-1.6,3.3-3.3,3.3s-3.5-1.6-3.5-3.3s1.4-3.3,3.5-3.3C16.9,21.5,18.2,23.1,18.2,24.8z"/> <path fill="#7FBA00" d="M28.3,24.8c0,1.9-1.6,3.3-3.3,3.3s-3.5-1.6-3.5-3.3s1.6-3.3,3.5-3.3S28.3,23.1,28.3,24.8z"/> <circle fill="#7FBA00" cx="35.2" cy="24.8" r="3.3"/> </svg> </i>
                            Virtual networks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#59B4D9" d="M25.001,50.001c-1.232,0-2.392-0.48-3.261-1.352L1.351,28.261C0.492,27.402,0,26.215,0,25 c0-1.214,0.492-2.402,1.351-3.26L21.74,1.352C22.611,0.48,23.769,0,25.001,0c1.231,0,2.39,0.48,3.261,1.352L48.648,21.74 C49.521,22.608,50,23.767,50,25c0,1.233-0.479,2.392-1.353,3.263L28.262,48.649C27.392,49.521,26.232,50.001,25.001,50.001"/> <path fill="#FFFFFF" d="M38.614,21.093c-2.16,0-3.91,1.75-3.91,3.909c0,0.792,0.239,1.527,0.645,2.143l-7.744,7.744 c-0.206-0.144-0.427-0.264-0.656-0.373V14.759c1.167-0.676,1.961-1.924,1.961-3.37C28.91,9.23,27.16,7.48,25,7.48 c-2.158,0-3.908,1.75-3.908,3.909c0,1.446,0.794,2.694,1.96,3.37v19.756c-0.219,0.104-0.434,0.216-0.632,0.353l-7.753-7.753 c0.394-0.61,0.628-1.333,0.628-2.113c0-2.159-1.75-3.909-3.908-3.909c-2.16,0-3.91,1.75-3.91,3.909s1.75,3.909,3.91,3.909 c0.448,0,0.872-0.091,1.274-0.23l8.15,8.15c-0.234,0.548-0.364,1.15-0.364,1.783c0,2.513,2.038,4.551,4.551,4.551 c2.514,0,4.551-2.038,4.551-4.551c0-0.621-0.126-1.212-0.351-1.751l8.173-8.172c0.392,0.132,0.804,0.22,1.241,0.22 c2.158,0,3.908-1.75,3.908-3.909S40.771,21.093,38.614,21.093z"/> <rect x="31.006" y="8.226" transform="matrix(-0.707 0.7072 -0.7072 -0.707 68.2099 8.8718)" opacity="0.5" fill="#FFFFFF" width="2.523" height="20.676"/> <rect x="16.487" y="8.242" transform="matrix(0.7071 0.7071 -0.7071 0.7071 18.3355 -7.1088)" opacity="0.5" fill="#FFFFFF" width="2.524" height="20.677"/> <path fill="#B8D432" d="M27.665,38.614c0,1.496-1.214,2.709-2.71,2.709c-1.497,0-2.709-1.213-2.709-2.709 c0-1.496,1.212-2.709,2.709-2.709C26.45,35.905,27.665,37.118,27.665,38.614"/> <path fill="#B8D432" d="M27.174,11.389c0,1.201-0.973,2.174-2.174,2.174c-1.201,0-2.174-0.973-2.174-2.174 c0-1.201,0.973-2.174,2.174-2.174C26.201,9.215,27.174,10.188,27.174,11.389"/> <path fill="#B8D432" d="M13.563,25.001c0,1.201-0.975,2.174-2.174,2.174c-1.201,0-2.174-0.973-2.174-2.174 c0-1.201,0.973-2.174,2.174-2.174C12.588,22.827,13.563,23.8,13.563,25.001"/> <path fill="#B8D432" d="M40.788,25.001c0,1.201-0.975,2.174-2.175,2.174c-1.2,0-2.174-0.973-2.174-2.174 c0-1.201,0.974-2.174,2.174-2.174C39.813,22.827,40.788,23.8,40.788,25.001"/> <path opacity="0.1" fill="#FFFFFF" d="M28.262,1.352C27.391,0.48,26.233,0,25.001,0c-1.231,0-2.389,0.48-3.26,1.352L1.352,21.74 C0.492,22.598,0,23.786,0,25c0,1.215,0.492,2.403,1.352,3.261l11.543,11.544L34.61,7.699L28.262,1.352z"/> </svg></i>
                            Azure active directory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{opacity:0.4;fill:#7FBA00;enable-background:new ;} .st2{opacity:0.8;fill:#7FBA00;enable-background:new ;} .st3{opacity:0.6;fill:#7FBA00;enable-background:new ;} .st4{opacity:0.25;fill:#7FBA00;enable-background:new ;} .st5{fill:#A0A1A2;} .st6{opacity:0.2;fill:#FFFFFF;enable-background:new ;} .st7{fill:#7FBA00;} .st8{fill:#DD5900;} </style> <title>Monitoring</title> <path class="st0" d="M22.8,4.4C11.4,5.6,3.2,15.8,4.4,27.2s11.4,19.7,22.8,18.5s19.7-11.4,18.5-22.8c-0.6-5.5-3.4-10.6-7.7-14.1 C34.2,5.8,29.7,4.2,25,4.3C24.3,4.3,23.6,4.3,22.8,4.4"/> <path class="st1" d="M16.4,19.5l-5-4.1c-2.1,3-3.1,6.6-3,10.2l6.4-0.7C14.9,23,15.4,21.1,16.4,19.5"/> <path class="st2" d="M30.6,16.3l4.1-5c-3-2.1-6.6-3.1-10.2-3l0.7,6.5C27,14.7,28.9,15.2,30.6,16.3"/> <path class="st3" d="M22.8,15l-0.7-6.5c-3.6,0.6-6.9,2.4-9.3,5.1l5,4.1C19.2,16.3,21,15.4,22.8,15"/> <path class="st4" d="M15.1,27.2l-6.5,0.7c0.6,3.6,2.4,6.9,5.1,9.4l4.1-5C16.5,30.8,15.5,29.1,15.1,27.2"/> <path class="st5" d="M49.8,22.4c-0.7-6.7-4-12.7-9.3-16.9c-1-0.8-2-1.5-3.1-2.1l-2,3.8c0.8,0.5,1.6,1,2.4,1.6 c9,7.1,10.5,20.2,3.3,29.2c-3.5,4.4-8.5,7.1-14.1,7.7c-3.7,0.4-7.4-0.2-10.7-1.8l-2,3.8c12.5,5.8,27.3,0.4,33.2-12.1 C49.5,31.5,50.3,26.9,49.8,22.4"/> <path class="st5" d="M11.9,41.1C3,33.9,1.7,20.9,8.9,12c6.5-8,17.8-10,26.6-4.8l2-3.8C26.8-2.8,13.3-0.3,5.6,9.3l0,0 c-8.7,10.7-7.1,26.4,3.6,35.1c1.6,1.3,3.4,2.4,5.3,3.3l2-3.8C14.8,43.2,13.3,42.2,11.9,41.1"/> <path class="st6" d="M11.9,41.1C3,33.9,1.7,20.9,8.9,12c6.5-8,17.8-10,26.6-4.8l2-3.8C26.8-2.8,13.3-0.3,5.6,9.3l0,0 c-8.7,10.7-7.1,26.4,3.6,35.1c1.6,1.3,3.4,2.4,5.3,3.3l2-3.8C14.8,43.2,13.3,42.2,11.9,41.1"/> <path class="st7" d="M36.4,12.6l-4.1,5c1,1,1.8,2.2,2.3,3.4h6.8C40.6,17.9,38.9,14.9,36.4,12.6z"/> <path class="st8" d="M23.1,27c-1.1-1.1-1.2-3,0-4.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.5,0.3,2.1,0.8c0,0,0,0,0,0h14.3h0.6l0,0 c1.2,0,2.1,0.9,2.1,2.1s-0.9,2.1-2.1,2.1H27c-0.5,0.5-1.2,0.8-1.9,0.8C24.3,27.9,23.6,27.6,23.1,27"/> </svg> </i>
                            Monitor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg viewBox="0 0 50 50" class="" role="presentation" focusable="false" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="FxSymbol0-01a"><g><title></title><path d="M50 25.392c0-3.292-2.665-5.799-5.799-5.799h-.784c.313-1.254.627-2.665.627-4.075A15.453 15.453 0 0 0 28.527 0c-6.74 0-12.539 4.389-14.577 10.658-1.097-.313-2.194-.627-3.448-.627C4.702 10.031 0 14.734 0 20.69s4.702 10.658 10.502 10.658h34.169A5.96 5.96 0 0 0 50 25.392" class="msportalfx-svg-c15" fill="#59b4d9"></path><path opacity=".2" d="M15.987 31.348c-1.411-1.411-2.351-3.135-2.821-5.172-1.254-5.799 2.194-11.442 7.994-12.696 1.254-.313 2.351-.313 3.448-.157.47-5.329 3.762-10.188 8.621-12.539A14.755 14.755 0 0 0 28.527 0c-6.74 0-12.539 4.389-14.577 10.658-1.097-.313-2.194-.627-3.448-.627C4.702 10.031 0 14.734 0 20.69s4.702 10.658 10.502 10.658h5.485z" class="msportalfx-svg-c01" fill="#ffffff"></path><path d="M36.526 31.972c-1.58 1.436-3.663 2.298-5.961 2.298s-4.381-.862-5.961-2.298L23.741 50l6.823-6.895L37.388 50l-.862-18.028z" class="msportalfx-svg-c08" fill="#ba141a"></path><circle cx="30.564" cy="25.723" r="11.636" class="msportalfx-svg-c09" fill="#dd5900"></circle><circle cx="30.564" cy="25.723" r="8.763" class="msportalfx-svg-c10" fill="#ff8c00"></circle><path opacity=".15" d="M22.305 33.983c-4.525-4.525-4.525-11.923 0-16.448s11.923-4.525 16.448 0L22.305 33.983z" class="msportalfx-svg-c01" fill="#ffffff"></path></g></svg></i>
                            Advisor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#7FBA00" d="M38.185,5.96L38.185,5.96C27.169,4.745,25.326,0,25.326,0S22.847,6.242,7,6.242v25.611 c0,3.097,1.721,5.997,4.104,8.532l0,0c5.402,5.748,14.223,9.616,14.223,9.616s18.327-8.029,18.327-18.149V6.242 C41.616,6.242,39.803,6.139,38.185,5.96z"/> <path opacity="0.4" fill="#B8D432" d="M29.86,16.543L38.185,5.96C27.169,4.745,25.326,0,25.326,0S22.847,6.242,7,6.242v25.611 c0,3.097,1.721,5.997,4.104,8.532l6.154-7.822L29.86,16.543z"/> <path fill="#FFFFFF" d="M32.595,24.46h-1.066v-3.552c0-1.709-0.629-3.276-1.669-4.45l0,0c-0.039-0.043-0.074-0.09-0.112-0.133 c-1.107-1.186-2.683-1.948-4.422-1.947c-1.736-0.001-3.312,0.761-4.419,1.947c-1.11,1.187-1.783,2.811-1.783,4.582v3.553h-1.065 c-0.443,0-0.801,0.359-0.801,0.801v7.217l0,0.001v2.174c0,0.442,0.359,0.801,0.801,0.801h14.536c0.442,0,0.801-0.359,0.801-0.801 v-9.391C33.396,24.818,33.037,24.46,32.595,24.46z M28.584,24.461h-5.02l0.001-0.001H22.07v-3.552c0-1.022,0.386-1.927,0.988-2.57 c0.605-0.643,1.395-1.013,2.268-1.013c0.874,0,1.665,0.37,2.27,1.013c0.143,0.153,0.271,0.323,0.389,0.504l-0.001,0.001 c0.373,0.579,0.6,1.288,0.6,2.064V24.461z"/> </svg> </i>
                            Security center
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#0F0F0F" d="M28.431,27.562c0,0.811-0.254,1.462-0.764,1.955c-0.512,0.493-1.254,0.796-2.23,0.908v1.59h-1.07v-1.546 c-1.006-0.01-1.928-0.234-2.768-0.674v-2.028c0.264,0.215,0.684,0.423,1.264,0.626c0.578,0.202,1.08,0.318,1.504,0.348v-2.666 c-1.078-0.4-1.844-0.839-2.293-1.314c-0.449-0.477-0.674-1.103-0.674-1.879s0.277-1.432,0.828-1.967 c0.553-0.534,1.266-0.846,2.139-0.934v-1.362h1.07v1.333c1.029,0.049,1.799,0.215,2.307,0.498v1.978 c-0.68-0.41-1.447-0.664-2.307-0.762v2.775c1.078,0.392,1.848,0.831,2.307,1.318C28.203,26.249,28.431,26.849,28.431,27.562z M24.367,24.017v-2.322c-0.678,0.122-1.018,0.477-1.018,1.063C23.349,23.269,23.689,23.69,24.367,24.017z M26.484,27.664 c0-0.473-0.35-0.863-1.047-1.172v2.22C26.134,28.599,26.484,28.25,26.484,27.664z"/> <path fill="#7FBA00" d="M25,38.81c-7.627,0-13.811-6.183-13.811-13.809s6.183-13.809,13.81-13.81l0,0 c7.627,0,13.81,6.182,13.81,13.809h11.19c0-13.807-11.192-25-25-25v0.001C11.191,0.002,0,11.194,0,25.001s11.192,25,25,25 c6.393,0,12.221-2.403,16.641-6.35l-7.457-8.358C31.741,37.474,28.53,38.81,25,38.81z"/> <path opacity="0.1" fill="#FFFFFF" enable-background="new " d="M25,38.81c-7.627,0-13.811-6.183-13.811-13.809 s6.183-13.809,13.81-13.81l0,0c7.627,0,13.81,6.182,13.81,13.809h11.19c0-13.807-11.192-25-25-25v0.001 C11.191,0.002,0,11.194,0,25.001s11.192,25,25,25c6.393,0,12.221-2.403,16.641-6.35l-7.457-8.358 C31.741,37.474,28.53,38.81,25,38.81z"/> <path fill="#FCD116" d="M50,25H38.809c0,4.096-1.793,7.764-4.625,10.292l7.457,8.359C46.768,39.072,50,32.415,50,25"/> <path opacity="0.9" fill="#B8D432" enable-background="new " d="M38.809,25h11.19c0-13.807-11.192-25-25-25v11.191 C32.625,11.191,38.809,17.373,38.809,25"/> </svg> </i>
                            Cost management + Bill
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >
                            <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> <path fill="#59B4D9" d="M34.256,14.928c0,5.006-4.059,9.065-9.066,9.065c-5.007,0-9.065-4.059-9.065-9.065 c0-5.006,4.058-9.065,9.065-9.065C30.197,5.863,34.256,9.922,34.256,14.928"/> <polygon fill="#59B4D9" points="31.818,27.1 25.19,36.387 18.562,27.1 9.001,27.1 9.001,50 41.38,50 41.38,27.1 "/> <path opacity="0.2" fill="#FFFFFF" d="M16.126,14.928c0,4.931,3.939,8.935,8.843,9.054l2.277-17.875 c-0.661-0.154-1.346-0.243-2.055-0.243C20.183,5.863,16.126,9.922,16.126,14.928"/> <polygon opacity="0.2" fill="#FFFFFF" points="18.564,27.1 9,27.1 9,50 21.696,50 23.698,34.297 "/> <path fill="#3E3E3E" d="M39.966,24.14h-6.881v-3.33h3.552v-5.827c0-6.426-5.228-11.654-11.654-11.654S13.329,8.557,13.329,14.983 v1.665h-3.33v-1.665C9.999,6.722,16.721,0,24.982,0s14.983,6.722,14.983,14.983V24.14z"/> <path opacity="0.2" fill="#FFFFFF" d="M24.982,0C16.721,0,9.999,6.722,9.999,14.983v1.665h3.33v-1.665 c0-6.426,5.228-11.654,11.654-11.654c0.964,0,1.896,0.131,2.793,0.352l0.416-3.327C27.156,0.128,26.085,0,24.982,0z"/> </svg> </i>
                            Help + Support
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="main-content vertical-center">
        
    </div>
@endsection

@section('js')
    <script>
        
        
    </script>
@endsection