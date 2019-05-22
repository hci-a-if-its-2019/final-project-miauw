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

        .custom-select {
            height: auto;
        }

        .review-table .table-borderless {
            width: 80%;
            table-layout: fixed;
        }

        .review-table .table-borderless td {
            padding: 0;
            width: 100px;
            overflow-x: hidden;
        }

        .review-table .table-borderless td:nth-child(1) h5 {
            color: #545454;
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

                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Disks</button>

                </div>

                <div class="tab-pane" id="fc-two">
                    <h5>Azure VMs have one operating system disk and a temporary disk for short-term storage. You can attach additional data disks. The size of the VM determines the type of storage you can use and the number of data disks allowed. <a href="#">Learn more</a></h5>
                    
                    <h4>DISK OPTIONS</h4>

                    <div class="form-group row" id="input-os-disk">
                        <label for="osdisktype" class="col-md-4 col-form-label">OS disk type</label>
                        <div class="col-md-8">
                            <input name="osdisktype" type="hidden" value="">
                            <select class="custom-select" id="osdisktype">
                                <option value="Premium SSD" selected>Premium SSD</option>
                                <option value="Standard SSD">Standard SSD</option>
                                <option value="Standard HDD">Standard HDD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-ultra-ssd">
                        <label for="ultrassd" class="col-md-4 col-form-label">Enable Ultra SSD compability</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-3" class="custom-control-input" id="customRadio5" checked="" type="radio">
                                <label class="custom-control-label" for="customRadio5">Yes</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-3" class="custom-control-input" id="customRadio6" type="radio">
                                <label class="custom-control-label" for="customRadio6">No</label>
                            </div>
                        </div>
                    </div>

                    <h4>DATA DISKS</h4>

                    <h5>You can add and configure additional data disks for your virtual machine or attach existing disks. This VM also comes with a temporary disk.</h5>

                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">LUN</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">SIZE (GB)</th>
                                    <th scope="col">DISK TYPE</th>
                                    <th scope="col">HOST CACHING</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h5>
                        <a href="#">Create and attach a new disk</a>
                        <span style="margin-right: 50px;">&nbsp;</span>
                        <a href="#">Attach an existing disk</a>
                    </h5>

                    

                    <div id="accordion-advanced">
                        <div class="card">
                            <div class="card-header" id="headingadvanced">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#advanced" aria-expanded="true">
                                        <h4>Advanced</h4>
                                    </button>
                                </h5>
                            </div>

                            <div id="advanced" class="collapse" aria-labelledby="headingadvanced" data-parent="#accordion-advanced">
                                <div class="card-body">
                                    <div class="form-group row" id="input-managed-disks">
                                        <label for="manageddisks" class="col-md-4 col-form-label">Use managed disks</label>
                                        <div class="col-md-8">
                                            <div class="custom-control custom-radio mb-2">
                                                <input name="custom-radio-4" class="custom-control-input" id="customRadio7" checked="" type="radio">
                                                <label class="custom-control-label" for="customRadio7">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input name="custom-radio-4" class="custom-control-input" id="customRadio8" type="radio">
                                                <label class="custom-control-label" for="customRadio8">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Networking</button>

                </div>

                <div class="tab-pane" id="fc-three">
                    <h5>Define network connectivity for your virtual machine by configuring network interface card (NIC) settings. You can control ports, inbound and outbound connectivity with security group rules, or place behind an existing load balancing solution. <a href="#">Learn more</a></h5>
                    
                    <h4>NETWORK INTERFACE</h4>

                    <h5>When creating a virtual machine, a network interface will be created for you.</h5>

                    <div class="form-group row" id="input-virtual-network">
                        <label for="virtualnetwork" class="col-md-4 col-form-label">Virtual network</label>
                        <div class="col-md-8">
                            <input name="virtualnetwork" type="hidden" value="">
                            <select class="custom-select" id="virtualnetwork">
                                <option selected>Choose</option>
                                <option value="somethingvnet90">somethingvnet90</option>
                                <option value="">Create New</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-subnet">
                        <label for="virtualnetwork" class="col-md-4 col-form-label">Subnet</label>
                        <div class="col-md-8">
                            <input name="subnet" type="hidden" value="">
                            <select class="custom-select" id="subnet">
                                <option value="default (10.0.1.0/24)" selected>default (10.0.1.0/24)</option>
                                <option value="">Create New</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-public-ip">
                        <label for="publicip" class="col-md-4 col-form-label">Public IP</label>
                        <div class="col-md-8">
                            <input name="publicip" type="hidden" value="">
                            <select class="custom-select" id="publicip">
                                <option value="None" selected>None</option>
                                <option value="test-ip">test-ip</option>
                                <option value="">Create New</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="input-sku">
                        <label for="sku" class="col-md-4 col-form-label">SKU</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-5" class="custom-control-input" checked="" id="customRadio9" type="radio">
                                <label class="custom-control-label" for="customRadio9">Basic</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-5" class="custom-control-input" id="customRadio10" type="radio">
                                <label class="custom-control-label" for="customRadio10">Standard</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="input-assignment">
                        <label for="assignment" class="col-md-4 col-form-label">Assignment</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-6" class="custom-control-input" checked="" id="customRadio11" type="radio">
                                <label class="custom-control-label" for="customRadio11">Dynamic</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-6" class="custom-control-input" id="customRadio12" type="radio">
                                <label class="custom-control-label" for="customRadio12">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="input-accelerated-networking">
                        <label for="acceleratednetworking" class="col-md-4 col-form-label">Accelerated networking</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-7" class="custom-control-input" id="customRadio13" type="radio">
                                <label class="custom-control-label" for="customRadio13">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-7" class="custom-control-input" checked="" id="customRadio14" type="radio">
                                <label class="custom-control-label" for="customRadio14">Off</label>
                            </div>
                        </div>
                    </div>

                    <h4>LOAD BALANCING</h4>

                    <h5>You can place this virtual machine in the backend pool of an existing Azure load balancing solution. <a href="#">Learn more</a></h5>

                    <div class="form-group row" id="input-load-balancing">
                        <label for="loadbalancing" class="col-md-4 col-form-label">Place this virtual machine behind an existing load balancing solution?</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-8" class="custom-control-input" id="customRadio15" type="radio">
                                <label class="custom-control-label" for="customRadio15">Yes</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-8" class="custom-control-input" checked="" id="customRadio16" type="radio">
                                <label class="custom-control-label" for="customRadio16">No</label>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Management</button>
                </div>

                <div class="tab-pane" id="fc-four">
                    <h5>Configure monitoring and management options for your VM.​</h5>
                    
                    <h4>AZURE SECURITY CENTER</h4>

                    <h5>Azure Security Center provides unified security management and advanced threat protection across hybrid cloud workloads. <a href="#">Learn more</a></h5>
                    <h5>
                        <i class="fas fa-check-circle" style="color: #00ff00;"></i>
                        Your subscription is protected by Azure Security Center basic plan.
                    </h5>

                    <h4>MONITORING</h4>

                    <div class="form-group row" id="input-boot-diagnostics">
                        <label for="bootdiagnostics" class="col-md-4 col-form-label">Boot diagnostics</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-9" checked="" class="custom-control-input" id="customRadio17" type="radio">
                                <label class="custom-control-label" for="customRadio17">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-9" class="custom-control-input"  id="customRadio18" type="radio">
                                <label class="custom-control-label" for="customRadio18">Off</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="input-os-guest-diagnostics">
                        <label for="osguestdiagnostics" class="col-md-4 col-form-label">OS guest diagnostics</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-10" class="custom-control-input" id="customRadio19" type="radio">
                                <label class="custom-control-label" for="customRadio19">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-10" checked="" class="custom-control-input"  id="customRadio20" type="radio">
                                <label class="custom-control-label" for="customRadio20">Off</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="input-diag-storage-account">
                        <label for="diagstorageaccount" class="col-md-4 col-form-label">Diagnostic storage account</label>
                        <div class="col-md-8">
                            <input name="diagstorageaccount" type="hidden" value="">
                            <select class="custom-select" id="diagstorageaccount">
                                <option value="somethingdiag556" selected>somethingdiag556</option>
                                <option value="">Create New</option>

                            </select>
                        </div>
                    </div>

                    <h4>IDENTITY</h4>

                    <div class="form-group row" id="input-managed-identity">
                        <label for="managedidentity" class="col-md-4 col-form-label">System assigned managed identity</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-11"  class="custom-control-input" id="customRadio21" type="radio">
                                <label class="custom-control-label" for="customRadio21">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-11" checked="" class="custom-control-input"  id="customRadio22" type="radio">
                                <label class="custom-control-label" for="customRadio22">Off</label>
                            </div>
                        </div>
                    </div>

                    <h4>AUTO SHUTDOWN</h4>

                    <div class="form-group row" id="input-auto-shutdown">
                        <label for="autoshutdown" class="col-md-4 col-form-label">Enable auto shutdown</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-12" class="custom-control-input" id="customRadio23" type="radio">
                                <label class="custom-control-label" for="customRadio23">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-12" checked="" class="custom-control-input"  id="customRadio24" type="radio">
                                <label class="custom-control-label" for="customRadio24">Off</label>
                            </div>
                        </div>
                    </div>

                    <h4>BACKUP</h4>

                    <div class="form-group row" id="input-auto-backup">
                        <label for="backup" class="col-md-4 col-form-label">Enable backup</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-13" class="custom-control-input" id="customRadio25" type="radio">
                                <label class="custom-control-label" for="customRadio25">On</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input name="custom-radio-13" checked="" class="custom-control-input"  id="customRadio26" type="radio">
                                <label class="custom-control-label" for="customRadio26">Off</label>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Advanced</button>
                </div>    

                <div class="tab-pane" id="fc-five">
                    <h5>Add additional configuration, agents, scripts or applications via virtual machine extensions or cloud-init.​</h5>
                    
                    <h4>EXTENSIONS</h4>

                    <h5>Extensions provide post-deployment configuration and automation.</h5>

                    <h5>Extentsions <span style="margin-right: 150px;">&nbsp;</span> <a href="#">Select an extension to install</a></h5>
                    
                    <h4>CLOUD INIT</h4>

                    <h5>Cloud init is a widely used approach to customize a Linux VM as it boots for the first time. You can use cloud-init to install packages and write files or to configure users and security. <a href="#">Learn more</a></h5>
                    
                    <div class="alert alert-default" role="alert">
                        <h5 style="color: #F2F3F4;">The selected image does not support cloud init.</h5>
                    </div>



                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Tags</button>
                </div>    

                <div class="tab-pane" id="fc-six">
                    <h5>Tags are name/value pairs that enable you to categorize resources and view consolidated billing by applying the same tag to multiple resources and resource groups. <a href="#">Learn more</a></h5>
                    <h5 style="margin-top: 10px; margin-bottom: 20px;">Note that if you create tags and then change resource settings on other tabs, your tags will be automatically updated.</h5>

                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">NAME</th>
                                    <th scope="col">VALUE</th>
                                    <th scope="col">RESOURCE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="custom-select" id="tags-name">
                                            <option value="" selected></option>
                                            <option value="">loading ...</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="tags-value">
                                            <option value="" selected></option>
                                            <option value="">loading ...</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="tags-resource">
                                            <option value="all" selected>All</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="button" class="btn btn-outline-primary" onclick="nextTabForm()">Next: Review + create</button>
                </div>    

                <div class="tab-pane" id="fc-seven">
                    <h4>PRODUCT DETAILS</h4>
                    <div>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 style="margin: 0;">Debian Linux</h4>
                                        <h5>by Debian</h5>
                                        <h5>
                                            <a href="#">Terms of use</a> | 
                                            <a href="#">Privacy policy</a>
                                        </h5>
                                    </td>
                                    <td><h5>Pricing not available for this offering</h5></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 style="margin: 0;">Standard B1-s</h4>
                                        <h5>by Microsoft</h5>
                                        <h5>
                                            <a href="#">Terms of use</a> | 
                                            <a href="#">Privacy policy</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5>Subscription credits apply</h5>
                                        <h5><strong>129.34 IDR/hr</strong></h5>
                                        <h5><a href="#">Pricing for other VM sizes</a></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4>TERMS</h4>
                    <h5>By clicking "Create", I (a) agree to the legal terms and privacy statement(s) associated with the Marketplace offering(s) listed above; (b) authorize Microsoft to bill my current payment method for the fees associated with the offering(s), with the same billing frequency as my Azure subscription; and (c) agree that Microsoft may share my contact, usage and transactional information with the provider(s) of the offering(s) for support, billing and other transactional activities. Microsoft does not provide rights for third-party offerings. <a href="#">See the Azure Marketplace Terms</a> for additional details.</h5>
                    
                    <h4>BASICS</h4>

                    <div class="review-table">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><h5>Subscription</h5></td>
                                    <td><h5>Azure for Students</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Resource group</h5></td>
                                    <td><h5>(new) test</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Virtual machine name</h5></td>
                                    <td><h5>test-titut</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Region</h5></td>
                                    <td><h5>(Asia Pacific) East Asia</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Availability options</h5></td>
                                    <td><h5>No infrastructure redundancy required</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Authentication type</h5></td>
                                    <td><h5>Password</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>yolandahp</h5></td>
                                    <td><h5>SSH</h5></td>
                                </tr>
 
                            </tbody>
                        </table>
                    </div>

                    <h4>DISKS</h4>

                    <div class="review-table">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><h5>OS disk type</h5></td>
                                    <td><h5>Premium SSD</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Use managed disks</h5></td>
                                    <td><h5>Yes</h5></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4>NETWORKING</h4>

                    <div class="review-table">
                        <table class="table table-borderless">
                            <tbody>
                                
                                <tr>
                                    <td><h5>Virtual network</h5></td>
                                    <td><h5>(new) test-vnet</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Subnet</h5></td>
                                    <td><h5>(new) default (10.0.2.0/24)</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Public IP</h5></td>
                                    <td><h5>(new) test-titut-ip</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Accelerated networking</h5></td>
                                    <td><h5>Off</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Place this virtual machine behind an existing <br>load balancing solution?</h5></td>
                                    <td><h5>No</h5></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4>MANAGEMENT</h4>

                    <div class="review-table">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><h5>Boot diagnostics</h5></td>
                                    <td><h5>On</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>OS guest diagnostics</h5></td>
                                    <td><h5>On</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Azure Security Center</h5></td>
                                    <td><h5>Basic (free)</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Diagnostics storage account</h5></td>
                                    <td><h5>(new) yolandahp</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>System assigned managed identity</h5></td>
                                    <td><h5>Off</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Auto-shutdown</h5></td>
                                    <td><h5>Off</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Backup</h5></td>
                                    <td><h5>Disabled</h5></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4>ADVANCED</h4>

                    <div class="review-table">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><h5>Extensions</h5></td>
                                    <td><h5>None</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Cloud init</h5></td>
                                    <td><h5>No</h5></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    


                    <button type="button" class="btn btn-outline-primary" onclick="prevTabForm()">Previous</button>
                    <button type="submit" class="btn btn-outline-primary" onclick="nextTabForm()">Create</button>
                </div>    

            </div>
        </form>
        
    </div>


    </div>
@endsection

@section('js')
    <script>
        $('#my-form-create li a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })

        function nextTabForm() {
            var idx = $('#my-form-create li a.active').index('#my-form-create li a');
            var new_idx = parseInt(parseInt(idx) +2);
            //console.log(new_idx)
            $('#my-form-create li:nth-child(' + new_idx + ') a'   ).tab('show');
        }

        function prevTabForm() {
            var idx = $('#my-form-create li a.active').index('#my-form-create li a');
            var new_idx = parseInt(idx);
            $('#my-form-create li:nth-child(' + new_idx + ') a'   ).tab('show');
        }
    </script>
@endsection