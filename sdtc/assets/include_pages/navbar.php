<!-- <style>
    header {
        font-size: 14px;
    }
</style> -->
<header>
    <div class="comtainer ">
        <div class="container-fluid bg-white px-0 m-0" id="n">
            <div class="row gx-0 bg-dark m-0">
                <div class="col-lg-3 cut  bg-white d-none d-lg-block"
                    style="border-radius: 0px 40px 0px 0px; z-index: 10;">
                    <a href="./" class="navbar-brand h-100 d-flex align-items-center justify-content-center">
                        <img src="./assets/logo.jpeg" class="logoimg d-inline-block align-top" alt="">
                        <h1 class="logotext m-0 text-uppercase " style="color: #f4b525;">Silverwink</h1>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="headerinfo row gx- bg-dark d-none d-lg-flex">
                        <div class="col-lg  text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4 " style="margin-left: 25px;">
                                <i class="fa fa-envelope text-warning me-2"></i>
                                <p class="mb-0 text-light">Silverwink@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-warning me-2"></i>
                                <p class="mb-0 text-light">+91 8156465625</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-5 px-5 text-end">
                                <div class="d-inline-flex align-items-center py-2">
                                    <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div> -->
                    </div>
                    <nav class="navbar navbar-expand-lg bg-white p-lg-1 " style="width: 112.5%;">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <img class="logoimg d-inline-block align-top" src="./assets/logo.jpeg" alt="">
                            <h1 class="logotext m-0 text-warning text-uppercase">Silverwink</h1>
                        </a>

                        <!-- <button type="button" class="reslogin"><i class="fa-solid fa-user"
                                style="margin-right: 6px;"></i></button> -->
                        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="offcanvas offcanvas-end  zindex-100 " tabindex="1000" id="offcanvasDarkNavbar"
                            aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Exit</h5> -->
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <div class="navbar-nav d-flex justify-content-center align-items-center">
                                <a href="./" class="nav-item nav-link">Home</a>
                                <!-- <a href="#" class="nav-item  nav-link">Services</a> -->
                                <a href="./Course" class="nav-item  nav-link">Courses</a>
                                <a href="./contact" class="nav-item   nav-link">Contact</a>
                                <a href="./about" class="nav-item   nav-link">About</a>
                                <div class="m-auto">
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop"><i class="fa-solid fa-user-plus"
                                                style="margin-right: 6px; "></i>Sign
                                            Up</button> -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBa0c">
                                        <div class=" modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal
                                                        title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Understood</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navright">
                                        <button class=" search btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#searchmodal"> <i class="fas fa-search"></i></button>
                                        <div class="modal fade" id="searchmodal" tabindex="-1"
                                            aria-labelledby="searchmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="searchmodalLabel">Search
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <!-- <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class=" btn login-btn btn-primary " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i
                                                class="fa-solid fa-user" style="margin-right: 6px;"></i>Login</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Username:</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message-text"
                                                                    class="col-form-label">Password:</label>
                                                                <input type="password" class="form-control"
                                                                    id="recipient-pass">
                                                            </div>
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Student Login
                                                            </label>
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Teacher Login
                                                            </label>
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Admin Login
                                                            </label>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<nav id="newnav" class="newnav navbar navbar-expand-md bg-white align-items-center w-100 "
    style="overflow: visible; z-index: 1000;">
    <div class="container-fluid" style="z-index: 1000; overflow: visible;">
        <a class=" navbar-brand p-0 m-0" href="./"><img src="./assets/logo.jpeg" class="navbar-logo p-0"
                alt="">SILVERWINK</a>
        <!-- <a href=""></a> -->
        <button type="button " class=" btn-primary " data-bs-toggle="modal" data-bs-target="#Modaltwo"
            data-bs-whatever="@mdo"><i class="fa-solid fa-user"></i></button>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-white h-100 " tabindex="1000" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel" aria-modal="true" role="dialog">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center " style=" overflow: visible;z-index: 1000;">
                <a class=" p-0 m-0" href="#"><img src="./assets/logo.jpeg" class="navbar-logo offcanvaslogo p-0"
                        alt=""></a>
                <ul class="navbar-nav ml-auto mt-2 p-0" style="overflow: visible; z-index: 1000;">
                    <li class="nav-item">
                        <a class="nav-link " href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link " href="#">Services</a>  -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./Course">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./about">About</a>
                    </li>

                    <!-- <li class="nav-item dropdown down">

                            <a class="newnav-loginbtn nav-link dropdown-toggle " href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Login
                                <i class="fa-solid fa-caret-down m-lg-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-item" href="#">Student Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Teacher Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Member Login</a></li>
                            </ul>
                        </li> -->

                </ul>


            </div>

        </div>
    </div>
</nav>

<div class="modal fade" id="Modaltwo" tabindex="-1" aria-labelledby="ModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModaltwoLabel">Login
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="recipient-pass">
                    </div>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Student Login
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Teacher Login
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Admin Login
                    </label>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>