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

        .form-create .tab-pane {
            padding:20px;
        }

        .form-create {
            overflow-y: auto;
            height: 80%;
        }

        .form-create form {
            width: 70%;
        }

        .form-create .tab-pane h5:nth-child(1), 
        .form-create .tab-pane h5:nth-child(2) {
            margin-bottom: 0;
        }

        .form-create .tab-pane h4 {
            margin: 20px 0 10px 0;
        }

        .form-create .tab-pane h5 {
            color: #1B1B1B;
            font-weight: 400;
        }

        .form-create .tab-pane .form-group {
            margin-bottom: 0;
        }

        .form-create .tab-pane .form-group > *, .form-create .tab-pane .form-group .form-control {
            font-size: 13px;
        }

        .form-create .tab-pane .form-group .form-control{
            padding: .375rem 1.75rem .375rem .75rem;
        }

        .form-create .tab-pane .form-group .col-md-8 > *{
            height: auto;
            color: #1B1B1B;
        }

        
    </style>
@endsection

@section('body')
    @include('nav')

    <div class="main-content vertical-center">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('virtual_machine')}}">Virtual machines</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create a virtual machine</li>
            </ol>
        </nav>

        <nav class="navbar navbar-horizontal navbar-expand-lg border-bottom navbar-1">
            <div class="container">
                <a class="navbar-brand">
                    <h3>Create a virtual machine</h3>
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

    <div class="form-create">
        <ul class="nav nav-tabs" id="my-form-create">
            <li class="nav-item">
                <a class="nav-link active" href="#fc-one">Basics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-two">Disks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-three">Networking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-four">Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-five">Advanced</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-six">Tags</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fc-seven">Review + Create</a>
            </li>
        </ul>

        <form action="" method="post">
            <div class="tab-content">
                <div class="tab-pane active" id="fc-one">
                    <h5>Create a virtual machine that runs Linux or Windows. Select an image from Azure marketplace or use your own customized image. </h5>
                    <h5>Complete the Basics tab then Review + create to provision a virtual machine with default parameters or review each tab for full customization.</h5>
                    <h5>Looking for classic VMs? Create VM from Azure Marketplace</h5>
                    
                    <h4>PROJECT DETAILS</h4>

                    <h5>Select the subscription to manage deployed resources and costs. Use resource groups like folders to organize and manage all your resources.</h5>

                    <div class="form-group row" id="input-subscription">
                        <label for="subscription" class="col-md-4 col-form-label">Subscription</label>
                        <div class="col-md-8">
                            <input name="subscription" type="hidden" value="">
                            <select class="custom-select" id="subscription">
                                <option selected>Azure for students</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-resource-group">
                        <label for="resourcegroup" class="col-md-4 col-form-label">Resource group</label>
                        <div class="col-md-8">
                            <input name="resourcegroup" type="hidden" value="">
                            <select class="custom-select" id="resourcegroup">
                                <option selected>Choose</option>
                                <option value="NetworkWatcherRG">NetworkWatcherRG</option>
                                <option value="Something">Something</option>
                                <option value="">Create New</option>

                            </select>
                        </div>
                    </div>

                    <h4>INSTANCE DETAILS</h4>

                    <div class="form-group row" id="input-vm-name">
                        <label for="vmname" class="col-md-4 col-form-label">Virtual machine name</label>
                        <div class="col-md-8">
                            <input name="vmname" type="text" class="form-control" id="vmname">
                        </div>
                    </div>

                    <div class="form-group row" id="input-region">
                        <label for="region" class="col-md-4 col-form-label">Region</label>
                        <div class="col-md-8">
                            <input name="region" type="hidden" value="">
                            <select class="custom-select" id="region">
                                <option selected>Choose</option>
                                <option value="(US) East US">(US) East US</option>
                                <option value="(US) East US 2">(US) East US 2</option>
                                <option value="(US) South Central US">(US) South Central US</option>
                                <option value="(US) West US">(US) West US</option>
                                <option value="(US) West US 2">(US) West US 2</option>
                                <option value="(US) Central US">(US) Central US</option>
                                <option value="(Asia Pacific) Australia East">(Asia Pacific) Australia East</option>
                                <option value="(Asia Pacific) Southeast Asia">(Asia Pacific) Southeast Asia</option>
                                <option value="(Asia Pacific) East Asia">(Asia Pacific) East Asia</option>
                                <option value="(Asia Pacific) Japan East">(Asia Pacific) Japan East</option>
                                <option value="(Canada) Canada Central">(Canada) Canada Central</option>
                                <option value="(Europe) North Europe">(Europe) North Europe</option>
                                <option value="(Europe) UK South">(Europe) UK South</option>
                                <option value="(Europe) West Europe">(Europe) West Europe</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-availibility options">
                        <label for="availabilityoptions" class="col-md-4 col-form-label">Availability options</label>
                        <div class="col-md-8">
                            <input name="availabilityoptions" type="hidden" value="">
                            <select class="custom-select" id="availabilityoptions">
                                <option value="No infrastucture redundancy required" selected>No infrastucture redundancy required</option>
                                <option value="Availability Zone">Availability zone</option>
                                <option value="Availability Set">Availability set</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-image">
                        <label for="image" class="col-md-4 col-form-label">Image</label>
                        <div class="col-md-8">
                            <input name="image" type="hidden" value="">
                            <select class="custom-select" id="image">
                                <option value="Debian 9 Stretch with backports kernel" selected>Debian 9 Stretch with backports kernel</option>
                                <option value="Red Hat Enterprise Linux 7.6">Red Hat Enterprise Linux 7.6</option>
                                <option value="SUSE Linux Enterprise Server (SLES) 16">SUSE Linux Enterprise Server (SLES) 16</option>
                                <option value="CentOS-based 7.5">CentOS-based 7.5</option>
                                <option value="Ubuntu Server 18.04 LTS">Ubuntu Server 18.04 LTS</option>
                                <option value="Ubuntu Server 16.04 LTS">Ubuntu Server 16.04 LTS</option>
                                <option value="Windows Server 2019 Datacenter">Windows Server 2019 Datacenter</option>
                                <option value="Windows Server 2016 Datacenter">Windows Server 2016 Datacenter</option>
                                <option value="Windows Server 2012 R2 Datacenter">Windows Server 2012 R2 Datacenter</option>
                                <option value="Windows 10 Pro, Version 1809">Windows 10 Pro, Version 1809</option>
                                <option value="Windows 10 Pro, Version 1803">Windows 10 Pro, Version 1803</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-size">
                        <label for="size" class="col-md-4 col-form-label">
                        Size
                        <a href="" style="font-size: 9px;">See for machine detail and price</a>
                        </label>
                        <div class="col-md-8">
                            <input name="size" type="hidden" value="">
                            <select class="custom-select" id="size">
                                <option value="B1-ls (1 vCPU, O.5 GB memory)" selected>B1-ls (1 vCPU, O.5 GB memory)</option>
                                <option value="B1-s (1 vCPU, 1 GB memory)">B1-s (1 vCPU, 1 GB memory)</option>
                                <option value="B1-ms (1 vCPU, 2 GB memory)">B1-ms (1 vCPU, 2 GB memory)</option>
                                <option value="B2-s (2 vCPU, 4 GB memory)">B2-s (2 vCPU, 4 GB memory)</option>
                                <option value="B2-ms (2 vCPU, 8 GB memory)">B2-ms (2 vCPU, 8 GB memory)</option>
                                <option value="B4-ms (4 vCPU, 16 GB memory)">B4-ms (4 vCPU, 16 GB memory)</option>
                                <option value="D2-s-v3 (2 vCPU, 8 GB memory)">D2-s-v3 (2 vCPU, 8 GB memory)</option>
                                <option value="D4-s-v3 (4 vCPU, 16 GB memory)">D4-s-v3 (4 vCPU, 16 GB memory)</option>
                                <option value="DS1-v2 (1 vCPU, 3.5 GB memory)">DS1-v2 (1 vCPU, 3.5 GB memory)</option>
                                <option value="DS2-v2 (2 vCPU, 7 GB memory)">DS2-v2 (2 vCPU, 7 GB memory)</option>
                                <option value="DS3-v2 (4 vCPU, 14 GB memory)">DS3-v2 (4 vCPU, 14 GB memory)</option>
                            </select>
                        </div>
                    </div>

                    <h4>ADMINISTRATOR ACCOUNT</h4>

                    <div class="form-group row" id="input-authentication-type">
                        <label for="authenticationtype" class="col-md-4 col-form-label">Authentication Type</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-1" class="custom-control-input" id="customRadio1" checked="" type="radio">
                                <label class="custom-control-label" for="customRadio1">Password</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                <label class="custom-control-label" for="customRadio2">SSH public key</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="input-username">
                        <label for="username" class="col-md-4 col-form-label">Username</label>
                        <div class="col-md-8">
                            <input name="username" type="text" class="form-control" id="username">
                        </div>
                    </div>

                    <div class="form-group row" id="input-password">
                        <label for="password" class="col-md-4 col-form-label">Password</label>
                        <div class="col-md-8">
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                    </div>

                    <div class="form-group row" id="input-confirm-password">
                        <label for="confirmpassword" class="col-md-4 col-form-label">Confirm password</label>
                        <div class="col-md-8">
                            <input name="confirmpassword" type="password" class="form-control" id="confirmpassword">
                        </div>
                    </div>

                    <h4>INBOUND PORT RULES</h4>
                    <h5>Select which virtual machine network ports are accessible from the public internet. You can specify more limited or granular network access on the Networking tab.</h5>

                    <div class="form-group row" id="input-public-ports">
                        <label for="publicports" class="col-md-4 col-form-label">Public inbound ports</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-2" class="custom-control-input" checked="" id="customRadio3" type="radio">
                                <label class="custom-control-label" for="customRadio3">None</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-2" class="custom-control-input" id="customRadio4" type="radio">
                                <label class="custom-control-label" for="customRadio4">Allow selected ports</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row" id="input-select-ports">
                        <label for="selectports" class="col-md-4 col-form-label">Select inbound ports</label>
                        <div class="col-md-8">
                            <input name="selectports" type="hidden">
                            <div class="custom-control custom-control-alternative custom-checkbox mb-2">
                                <input class="custom-control-input" id="customCheck1" type="checkbox">
                                <label class="custom-control-label" for="customCheck1">HTTP (80)</label>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox mb-2">
                                <input class="custom-control-input" id="customCheck2" type="checkbox">
                                <label class="custom-control-label" for="customCheck2">HTTPS (443)</label>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox mb-2">
                                <input class="custom-control-input" id="customCheck3" type="checkbox">
                                <label class="custom-control-label" for="customCheck3">SSH (22)</label>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox mb-2">
                                <input class="custom-control-input" id="customCheck4" type="checkbox">
                                <label class="custom-control-label" for="customCheck4">RDP (3389)</label>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary">Next: Disks</button>

                </div>


                <div class="tab-pane" id="fc-two">
                    <input type="text" class="form-control" name="email" placeholder="enter email">
                </div>
                <div class="tab-pane" id="fc-three">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>    
            </div>
        </form>
        
    </div>


    </div>
@endsection

@section('js')
    <script>
        $('#my-form-create a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    </script>
@endsection