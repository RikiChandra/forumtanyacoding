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
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/cheatsheet.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                <img src="../assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="me-3"
                    alt="Bootstrap">
                ForumTanyaCoding
            </h1>

        </div>
    </header>
    <aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#contents-collapse"
                        aria-controls="contents-collapse">Contents</button>
                    <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#typography">Typography</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#images">Images</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#tables">Tables</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#figures">Figures</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#forms-collapse"
                        aria-controls="forms-collapse">Forms</button>
                    <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#overview">Overview</a></li>
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
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse"
                        aria-expanded="false" data-bs-target="#components-collapse"
                        aria-controls="components-collapse">Components</button>
                    <ul class="list-unstyled ps-3 collapse" id="components-collapse">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#accordion">Accordion</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#alerts">Alerts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#badge">Badge</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#breadcrumb">Breadcrumb</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#buttons">Buttons</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#button-group">Button group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#card">Card</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#carousel">Carousel</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#dropdowns">Dropdowns</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#list-group">List group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#modal">Modal</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#navs">Navs</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#navbar">Navbar</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#pagination">Pagination</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#popovers">Popovers</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#progress">Progress</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#scrollspy">Scrollspy</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#spinners">Spinners</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#toasts">Toasts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none"
                                href="#tooltips">Tooltips</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="bd-cheatsheet container-fluid bg-body">
        <section id="content">
            <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Contents</h2>

            <article class="my-3" id="typography">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Typography</h3>
                    <a class="d-flex align-items-center" href="../content/typography/">Documentation</a>
                </div>

                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        @yield('content')
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <p class="h1">Heading 1</p>
                            <p class="h2">Heading 2</p>
                            <p class="h3">Heading 3</p>
                            <p class="h4">Heading 4</p>
                            <p class="h5">Heading 5</p>
                            <p class="h6">Heading 6</p>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined.</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <hr>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <ul class="list-unstyled">
                                <li>This is a list.</li>
                                <li>It appears completely unstyled.</li>
                                <li>Structurally, it's still a list.</li>
                                <li>However, this style only applies to immediate child elements.</li>
                                <li>Nested lists:
                                    <ul>
                                        <li>are unaffected by this style</li>
                                        <li>will still show a bullet</li>
                                        <li>and have appropriate left margin</li>
                                    </ul>
                                </li>
                                <li>This may still come in handy in some situations.</li>
                            </ul>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <ul class="list-inline">
                                <li class="list-inline-item">This is a list item.</li>
                                <li class="list-inline-item">And another one.</li>
                                <li class="list-inline-item">But they're displayed inline.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </article>
            <article class="my-3" id="images">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Images</h3>
                    <a class="d-flex align-items-center" href="../content/images/">Documentation</a>
                </div>

                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%"
                                height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" /><text x="50%"
                                    y="50%" fill="#dee2e6" dy=".3em">Responsive image</text>
                            </svg>

                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <svg class="bd-placeholder-img img-thumbnail" width="200" height="200"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>A generic square placeholder image with a white border around it, making it
                                    resemble a photograph
                                    taken with an old instant camera</title>
                                <rect width="100%" height="100%" fill="#868e96" /><text x="50%"
                                    y="50%" fill="#dee2e6" dy=".3em">200x200</text>
                            </svg>

                        </div>
                    </div>

                </div>
            </article>
            <article class="my-3" id="tables">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Tables</h3>
                    <a class="d-flex align-items-center" href="../content/tables/">Documentation</a>
                </div>

                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <table class="table table-dark table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Class</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Default</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>

                                    <tr class="table-primary">
                                        <th scope="row">Primary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Secondary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">Success</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Danger</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Warning</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Info</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-light">
                                        <th scope="row">Light</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-dark">
                                        <th scope="row">Dark</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </article>
            <article class="my-3" id="figures">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Figures</h3>
                    <a class="d-flex align-items-center" href="../content/figures/">Documentation</a>
                </div>

                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example">
                            <figure class="figure">
                                <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400"
                                    height="300" xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: 400x300" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%"
                                        y="50%" fill="#dee2e6" dy=".3em">400x300</text>
                                </svg>

                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
            </article>
        </section>
    </div>




    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/cheatsheet.js') }}"></script>
</body>

</html>
