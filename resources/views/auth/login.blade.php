<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="img js-fullheight" style="background-image: url(assets/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-3">
                <img src="{{asset('assets/images/logo.png')}}" style="widht: 140px; height: 150px" alt="">
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Silahkan Melakukan Login</h3>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                            <!-- Email  -->
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                                    required>
                            </div>
                            <!-- Password  -->
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" id="password" type="password"
                                    name="password" required autocomplete="current-password">
                                    <span style="color: black;" toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                
                            </div>
                            <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span  class="checkmark"></span>
                                    </label>
                                </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                            </div>
                            <div class="form-group d-md-flex row">
                               
                                <div class="w-50 text-md-left">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="w-50 text-md-right" style="text-align: center;">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('register') }}">
                                        {{ __('Create new  account') }}
                                    </a>
                            </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
