<x-laravel-ui-adminlte::adminlte-layout>
    <style>
        .login-box-msg {
            font-size: 30px ;
        }
        .img{
            height: 100px;
            padding-left: 110px;
        }
    </style>


    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <!-- <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a> -->
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <img src="images/logo.png" class="img">
                    <p class="login-box-msg">Online Leave Filling System</p>

                    <form method="post" action="{{ url('/login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <a href="{{ route('register') }}" class="text-center">Register a new account</a>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>

                        </div>
                    </form>

                    <!-- <p class="mb-1">
                        <a href="{{ route('password.request') }}">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">Register a new account</a>
                    </p>
                </div> -->
                    <!-- /.login-card-body -->
                </div>

            </div>
            <!-- /.login-box -->
    </body>
</x-laravel-ui-adminlte::adminlte-layout>