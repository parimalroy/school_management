<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{url("css/theme-default.css")}}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
   
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    @include('../message')
                    <form action="{{route('auth.login')}}" class="form-horizontal" method="post">
                        @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email"/>
                            @error('email')
                                <div class="text text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"/>
                            @error('password')
                            <div class="text text-danger"><strong>{{ $message }}</strong></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{route('auth.forgot')}}" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; {{date('Y')}} School
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>






