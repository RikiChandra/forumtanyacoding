<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cheatsheet/">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/trix.css') }}">



    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/cheatsheet.css') }}" rel="stylesheet">
</head>

<body class="">

    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                {{-- <img src="../assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="me-3"
                    alt="Bootstrap"> --}}
                ForumTanyaCoding
            </h1>

        </div>
    </header>
    <aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                @auth
                    <li class="my-2">
                        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                            aria-expanded="false" data-bs-target="#contents-collapse"
                            aria-controls="contents-collapse">Home</button>
                        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="{{ route('/questions/user') }}">My questions</a></li>
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="#images">Images</a></li>
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="#tables">Tables</a></li>
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="#figures">Figures</a></li>
                        </ul>
                    </li>
                @endauth
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#forms-collapse1"
                        aria-controls="forms-collapse">Public</button>
                    <ul class="list-unstyled ps-3 collapse" id="forms-collapse1">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="{{ route('/questions/public') }}">Public Question</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#disabled-forms">Disabled forms</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#sizing">Sizing</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#input-group">Input group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#floating-labels">Floating labels</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#validation">Validation</a></li>
                    </ul>
                </li>
                @auth
                    <li class="my-2">
                        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                            aria-expanded="false" data-bs-target="#forms-collapse2"
                            aria-controls="forms-collapse">{{ auth()->user()->name }}</button>
                        <ul class="list-unstyled ps-3 collapse" id="forms-collapse2">
                            <li>
                                <form method="get" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="/logout" class="d-inline-flex align-items-center rounded text-decoration-none">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Sign out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="my-2">
                        <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                            aria-expanded="false" data-bs-target="#forms-collapse"
                            aria-controls="forms-collapse">Account</button>
                        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="{{ route('login') }}">Sign in</a></li>
                            <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                    href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </nav>
    </aside>
    <div class="bd-cheatsheet container-fluid bg-body">
        <section id="content">


            <article class="my-3" id="typography">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">

                </div>

                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        @yield('content')
                    </div>
                </div>
            </article>
        </section>
    </div>




    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/cheatsheet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/trix.js') }}"></script>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    </script>
</body>



</html>
