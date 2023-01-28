<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-login-form.min.css') }}" />
</head>

<body>
    <!-- Start your project here-->

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="form-control form-control-lg"
                                name="name" />
                            <label class="form-label" for="form1Example13">Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg"
                                name="email" />
                            <label class="form-label" for="form1Example13">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg"
                                name="password" />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg"
                                name="password_confirmation" />
                            <label class="form-label" for="form1Example23">Confirm Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <a href="/login">Sudah punya akun?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                            role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                            role="button">
                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('assets/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
