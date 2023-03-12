<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        media="all" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" media="all"
        type="text/css">
    <link rel="stylesheet" href="./assets/Course.css">
    <link rel="stylesheet" href="./assets/index-responsive.css">
</head>

<body>

    <?php
    include "./assets/include_pages/navbar.php";
    ?>
    <div class="page-wrapper">
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="./index">Home</a></li>
                    <li class="active"><a href="./Course">Courses</a></li>
                </ul>
                <form action="https://www.google.com/search" method="get" class="search-bar" traget="_blank">
                    <input type="text" placeholder="search Course" name="q">
                    <button type="submit"> <i class="fas fa-search"></i></button>

                </form>
                <h2 class="inner-banner__title">Courses</h2>
            </div>
        </section>

        <section class="course-one course-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image">
                                <img src="https://kipso-gatsby.vercel.app/static/course-1-1-91ffd47222f3e96a27db42d3cd1c9ce3.jpg"
                                    alt="">
                                <!-- <i class="far fa-heart"></i> -->
                            </div>
                            <div class="course-one__content">
                                <a href="#none" class="course-one__category">development</a>
                                <h2 class="course-one__title"><a href="./course-detail">New react bootcamp</a></h2>
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="course-one__count">4.8</span>
                                    <span class="course-one__stars-count">250</span>
                                </div>
                                <div class="course-one__meta">
                                    <a href="/course-details">
                                        <i class="far fa-clock"></i>
                                        10 Hours
                                    </a>
                                    <a href="/course-details">
                                        <i class="far fa-folder-open"></i>
                                        6 Lecture
                                    </a>
                                    <a href="/course-details">$18</a>
                                </div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-2-b55fdbe5081b9d49ffe17abee0c4c501.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content">
                                <a href="#none" class="course-one__category">It &amp;
                                    Software</a>

                                <h2 class="course-one__title"><a href="/course-details">Android Development </a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a>
                                </div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-3-6aff34dbaf8aeccc938a2e8d2d03cf16.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none" class="course-one__category">Designing</a>

                                <h2 class="course-one__title"><a href="/course-details">Graphic Designing</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a></div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-4-4e3018ee02870c8a517b52ef8dec380c.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none"
                                    class="course-one__category">Programming</a>

                                <h2 class="course-one__title"><a href="/course-details">java Programming</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a></div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-5-0d8f8b9d3f9d927e075a7c84c3abee4b.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none"
                                    class="course-one__category">Programmming</a>

                                <h2 class="course-one__title"><a href="/course-details">Python Programming</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a></div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-6-d31ab0bda7c00a8b056b62f6a9a8bcde.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none" class="course-one__category">Web
                                    development</a>

                                <h2 class="course-one__title"><a href="/course-details">Web Development</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a>
                                </div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-6-d31ab0bda7c00a8b056b62f6a9a8bcde.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none" class="course-one__category">Web
                                    development</a>

                                <h2 class="course-one__title"><a href="/course-details">Web Development</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a>
                                </div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="course-one__single">
                            <div class="course-one__image"><img
                                    src="https://kipso-gatsby.vercel.app/static/course-1-6-d31ab0bda7c00a8b056b62f6a9a8bcde.jpg"
                                    alt=""><i class="far fa-heart"></i></div>
                            <div class="course-one__content"><a href="#none" class="course-one__category">Web
                                    development</a>

                                <h2 class="course-one__title"><a href="/course-details">Web Development</a></h2>
                                <div class="course-one__stars"><span class="course-one__stars-wrap"><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span><span
                                        class="course-one__count">4.8</span><span
                                        class="course-one__stars-count">250</span></div>
                                <div class="course-one__meta"><a href="/course-details"><i class="far fa-clock"></i>
                                        10
                                        Hours</a><a href="/course-details"><i class="far fa-folder-open"></i> 6
                                        Lectures</a><a href="/course-details">$18</a>
                                </div>
                                <div class="twobutton">
                                    <a href="#none" class="course-one__link">ENROLL</a>
                                    <a href="#none" class="course-one__link">SYLLABUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-pagination"><a href="#none"><i class="fa fa-angle-double-left"></i></a><a
                        class="active" href="#none">1</a><a href="#none">2</a><a href="#none">3</a><a
                        href="#none">4</a><a href="#none"><i class="fa fa-angle-double-right"></i></a></div>
            </div>
        </section>
    </div>

    <?php
    include "./footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="./assets/jquery/jquery-3.6.1.min.js"></script>
    <script src="./assets/myscript.js"> </script>
</body>

</html>