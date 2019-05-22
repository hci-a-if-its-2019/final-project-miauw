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

        #right-sidebar{
            z-index: 1;
            width: 50%;
            height: 100%;
            top: 0;
            right:0; 
            bottom: 0;
            background: #FFFFFF; 
            position:absolute;
            overflow: auto;
        }

        .delete-table h5 {
            margin-bottom: 0;
        }

        .delete-table td {
            padding: 0.4rem 0.5rem;
        }

        #right-sidebar #close-delete {
            float: right;
        }

        .accordion .card-header {
            padding: 0.2rem 0.2rem;
        }

        #right-sidebar h4 {
            margin-top: 15px;
        }

        #right-sidebar h5 {
            font-weight: 500;
        }

        #right-sidebar .resource-group > h2 {
            margin-top: 25px;
        }

        .accordion {
            margin-bottom: 30px;
        }

        


    </style>
@endsection

@section('body')
    @include('nav')

    <div class="main-content vertical-center">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Resource groups</li>
            </ol>
        </nav>

        <nav class="navbar navbar-horizontal navbar-expand-lg border-bottom navbar-1">
            <div class="container">
                <a class="navbar-brand">
                    <h3>RESOURCE GROUPS</h3>
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
                                <i class="fas fa-columns"></i>
                                <span class="nav-link-inner--text">Edit Columns</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-redo-alt"></i>
                                <span class="nav-link-inner--text">Refresh</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <i class="fas fa-tags"></i>
                                <span class="nav-link-inner--text">Assign Tags</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" id="delete-groups">
                                <i class="fas fa-trash"></i>
                                <span class="nav-link-inner--text">Delete</span>
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
                        <th>Subscription</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>something</td>
                        <td>Azure for Students</td>
                        <td>Southeast Asia</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>expr</td>
                        <td>Azure for Students</td>
                        <td>Southeast Asia</td>
                    </tr>
                    <tr id="rg-hehe">
                        <td></td>
                        <td>hehe</td>
                        <td>Azure for Students</td>
                        <td>Southeast Asia</td>
                    </tr>
                    <tr id="rg-hehe2">
                        <td></td>
                        <td>hehe2</td>
                        <td>Azure for Students</td>
                        <td>Southeast Asia</td>
                    </tr>
                    
                </tbody>
            </table>
                    
        </div>

        <div id="right-sidebar" class="shadow-lg p-3 mb-5 rounded">
            
            <i id="close-delete" class="fas fa-times"></i>

            <div class="resource-group">
                <h2>Are you sure you want to delete "hehe"?</h2>
                
                <div class="delete-warning">
                    <div style="overflow: auto;">
                        <div class="delete-warning-1" style="width: 10%; float:left">
                            <i class="fas fa-exclamation-triangle fa-3x" style="color: orange;"></i> 
                        </div>
                    

                    <div class="delete-warning-2" style="width: 87%; float:right; margin-left: 15px;">
                        <h5>Warning! Deleting the "hehe" resource group is irreversible. The action you're about to take can't be undone. Going further will delete this resource group and all the resources in it permanently.</h5>
                    </div>

                    </div>

                    <h4>TYPE THE RESOURCE GROUP NAME</h4>
                    <input type="text" class="form-control" placeholder="Resource group name" name="resource-group-1">
                    
                    <h4>AFFECTED RESOURCES</h4>
                    
                    
                    <div class="accordion" id="accordion-r1">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-r1" aria-expanded="false" aria-controls="collapse-r1">
                                        Affected Resources
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse-r1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-r1">
                                <div class="card-body">
                                    <h5>There are 7 resources in this resource group that will be deleted.</h5>
                                    <div class="delete-table">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th><h5>NAME</h5></th>
                                                    <th><h5>TYPE</h5></th>
                                                    <th><h5>LOCATION</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h5>exprdiag</h5></td>
                                                    <td><h5>Storage account</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>expr-vnet</h5></td>
                                                    <td><h5>Virtual network</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground</h5></td>
                                                    <td><h5>Virtual machine</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground_OsDisk</h5></td>
                                                    <td><h5>Disk</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground669</h5></td>
                                                    <td><h5>Network interface</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground-ip</h5></td>
                                                    <td><h5>Public IP address</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground-nsg</h5></td>
                                                    <td><h5>Network security group</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>    
                    </div>
                </div>
            </div>

            <div class="resource-group">
                <h2>Are you sure you want to delete "hehe2"?</h2>
                
                <div class="delete-warning">
                    <div style="overflow: auto;">
                        <div class="delete-warning-1" style="width: 10%; float:left">
                            <i class="fas fa-exclamation-triangle fa-3x" style="color: orange;"></i> 
                        </div>
                    

                    <div class="delete-warning-2" style="width: 87%; float:right; margin-left: 15px;">
                        <h5>Warning! Deleting the "hehe2" resource group is irreversible. The action you're about to take can't be undone. Going further will delete this resource group and all the resources in it permanently.</h5>
                    </div>

                    </div>

                    <h4>TYPE THE RESOURCE GROUP NAME</h4>
                    <input type="text" class="form-control" placeholder="Resource group name" name="resource-group-2">
                    
                    <h4>AFFECTED RESOURCES</h4>
                    
                    
                    <div class="accordion" id="accordion-r2">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-r2" aria-expanded="false" aria-controls="collapse-r2">
                                        Affected Resources
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </button>
                                    
                                </h2>

                            </div>

                            <div id="collapse-r2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-r2">
                                <div class="card-body">
                                    <h5>There are 7 resources in this resource group that will be deleted.</h5>
                                    <div class="delete-table">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th><h5>NAME</h5></th>
                                                    <th><h5>TYPE</h5></th>
                                                    <th><h5>LOCATION</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h5>exprdiag</h5></td>
                                                    <td><h5>Storage account</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>expr-vnet</h5></td>
                                                    <td><h5>Virtual network</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground</h5></td>
                                                    <td><h5>Virtual machine</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground_OsDisk</h5></td>
                                                    <td><h5>Disk</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground669</h5></td>
                                                    <td><h5>Network interface</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground-ip</h5></td>
                                                    <td><h5>Public IP address</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>playground-nsg</h5></td>
                                                    <td><h5>Network security group</h5></td>
                                                    <td><h5>Southeast Asia</h5></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>    
                    </div>
                </div>
            </div>

            <div class="button-delete-rg border-top mt-5">
                <button type="button" class="btn btn-primary mt-3 mb-2" id="button-delete-rg">Delete</button>
            </div>



	    </div>
        
        

    </div>
@endsection

@section('js')
    <script>

        $('#close-delete').click(function(){
            $('#right-sidebar').toggle('show');
        });

        $('#delete-groups').click(function(){
            $('#right-sidebar').toggle('show');
        });

        $('#button-delete-rg').click(function(){
            $('#right-sidebar').toggle('show');
            $('#rg-hehe').remove();
            $('#rg-hehe2').remove();
            
        });

        $(document).ready(function() {
            $('#right-sidebar').hide();
            let example = $('#example').DataTable({
                "lengthChange": false,
                columnDefs: [ {
                    orderable: false,
                    bSort: false,
                    className: 'select-checkbox dt-head-center',
                    targets:   0
                } ],
                select: {
                    style:    'multi',
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
