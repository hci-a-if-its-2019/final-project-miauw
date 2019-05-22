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

        .main-content .navbar-2 .nav-active .nav-item * {
            color: #0038A8;
        }

        table.dataTable th.select-checkbox::before {
            content: ' ';
            margin-top: -6px;
            margin-left: -6px;
            border: 1px solid black;
            border-radius: 3px;
        }

        table.dataTable tr th.select-checkbox.selected::after {
            content: "✔";
            margin-top: -11px;
            margin-left: -4px;
            text-align: center;
            text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
        }

        table.dataTable th.select-checkbox::before, table.dataTable th.select-checkbox::after {
            display: block;
            top: 1.2em;
            left: 50%;
            width: 12px;
            height: 12px;
            box-sizing: border-box;
        }

        #example_wrapper {
            margin-top: 20px;
            width: 100%;
        }

        


    </style>
@endsection

@section('body')
    @include('nav')

    <div class="main-content vertical-center">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Virtual machine</li>
            </ol>
        </nav>

        <nav class="navbar navbar-horizontal navbar-expand-lg border-bottom navbar-1">
            <div class="container">
                <a class="navbar-brand">
                    <h3>Virtual Machines</h3>
                </a>
                <div class="collapse navbar-collapse" id="navbar-default">
                    
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <span class="nav-link-inner--text">Documentation</span>
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-thumbtack"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{url('home')}}" role="button" >
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
                    
                    <ul class="navbar-nav nav-active ml-0 mr-2">
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
                                <i class="fas fa-trash"></i>
                                <span class="nav-link-inner--text">Delete</span>
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

        <div class="vm-data container">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Resource Group</th>
                        <th>Location</th>
                        <th>Maintenance Status</th>
                        <th>Subscription</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Something</td>
                        <td>Virtual machine</td>
                        <td>Running</td>
                        <td>something</td>
                        <td>Southeast Asia</td>
                        <td>-</td>
                        <td>Azure for Students</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>vscode</td>
                        <td>Virtual machine</td>
                        <td>Stopped (deallocated)</td>
                        <td>something</td>
                        <td>Southeast Asia</td>
                        <td>-</td>
                        <td>Azure for Students</td>
                    </tr>
                    
                </tbody>
            </table>
                    
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let example = $('#example').DataTable({
                "lengthChange": false,
                columnDefs: [ {
                    orderable: false,
                    className: 'select-checkbox',
                    targets:   0
                } ],
                select: {
                    style:    'os',
                    selector: 'td:first-child'
                },
                order: [[ 1, 'asc' ]]
            });


            example.on("click", "th.select-checkbox", function() {
                if ($("th.select-checkbox").hasClass("selected")) {
                    example.rows().deselect();
                    $("th.select-checkbox").removeClass("selected");
                } else {
                    example.rows().select();
                    $("th.select-checkbox").addClass("selected");
                }
            }).on("select deselect", function() {
                ("Some selection or deselection going on")
                if (example.rows({
                        selected: true
                    }).count() !== example.rows().count()) {
                    $("th.select-checkbox").removeClass("selected");
                } else {
                    $("th.select-checkbox").addClass("selected");
                }
            });

            
        
            example
                .on( 'select', function ( e, dt, type, indexes ) {
                    var rowData = example.rows( indexes ).data().toArray();
                    $(".navbar-2 ul.navbar-nav").addClass("nav-active");
                } )
                .on( 'deselect', function ( e, dt, type, indexes ) {
                    var rowData = example.rows( indexes ).data().toArray();
                    $(".navbar-2 ul.navbar-nav:nth-child(2)").removeClass("nav-active");
                } );

        } );

        
                
    </script>
@endsection