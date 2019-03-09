
        {% set DIR_ASSETS = "./views/assets" %}
        {{ include('header.twig.html') }}

            <body class="index-page">
            <!-- Navbar -->
            <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#" rel="tooltip" title="Auteur du roman \"Billet simple pour l\'Alaska\" data-placement="bottom" target="_blank">
                        Jean Forteroche, acteur et écrivain
                        </a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{DIR_ASSETS}}/img/blurred-image-1.jpg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?=connexion">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    <p>Se connecter</p>
                                </a>
                            </li>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('{{DIR_ASSETS}}/img/header.jpg');">
                </div>
                <div class="container">
                    <div class="content-center brand">
                        <h1 class="h1-seo">Billet simple pour l'Alaska</h1>
                        <h3>Blog de Jean Forteroche</h3>
                    </div>
                    <div class="section-navbars" id="main-navbars">
                        <div class="container-fluid" id="menu-dropdown">
                            <div class="row">
                                <div class="col-xl-12">
                                    <nav class="navbar navbar-toggleable-md bg-primary">
                                        <div class="container">
                                            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#example-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-bar bar1"></span>
                                                <span class="navbar-toggler-bar bar2"></span>
                                                <span class="navbar-toggler-bar bar3"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">Menu</a>
                                            <div class="collapse navbar-collapse" id="example-navbar" data-nav-image="{{DIR_ASSETS}}/img/blurred-image-1.jpg">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">
                                                            <p>Link</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">
                                                            <p>Link</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <p>
                                                                Dropdown
                                                            </p>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="main">
                <div class="section section-pagination">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h4>Pagination</h4>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                {{ include('footer.twig.html') }}
