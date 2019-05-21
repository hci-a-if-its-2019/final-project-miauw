@extends('master')
@section('css')
    <style>
        html, body {
            background-color: #0038A8;
            height: 100vh;
            font-family: 'Open Sans', sans-serif;   
        }

        .main-content.vertical-center {
            min-height: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
        }

        .login-header {
            text-align: center;
        }

        .login-header h2 {
            color: #F2F3F4;
            font-weight: 700;
        }

        .btn-signin {
            background-color: #001373;
        }
    </style>
@endsection

@section('body')
    <div class="main-content vertical-center">
        <div class="container">
            <div class="login-header">
                <h2>Microsoft Azure</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                        <span class="btn-inner--text">Github</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                        <span class="btn-inner--text">Google</span>
                        </a>
                    </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <small>Or sign in with credentials</small>
                    </div>
                    <form role="form">
                        <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email">
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password">
                        </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for=" customCheckLogin">
                            <span class="text-muted">Remember me</span>
                        </label>
                        </div>
                        <div class="text-center">
                        <button type="button" class="btn btn-primary my-4 btn-signin">Sign in</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                    <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                    <a href="#" class="text-light"><small>Create new account</small></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    
    <script>
        
        
    </script>
@endsection
