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
    <link rel="stylesheet" href="./assets/Course-detail.css">
    <link rel="stylesheet" href="./assets/index-responsive.css">
</head>

<body>
    <div class="page-wrapper">
        <?php
        include "./assets/include_pages/navbar.php";
        ?>

        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            <div class="course-details__top">

                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">New React Bootcamp</h2>
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
                                </div>
                                <div class="course-details__top-right">
                                    <a href="#none" class="course-one__category">marketing</a>
                                </div>
                            </div>
                            <div class="course-one__image">
                                <img src="https://kipso-gatsby.vercel.app/static/course-d-1-25e712f5bb5dc65d69e960dd3a1deb16.jpg"
                                    alt="">
                                <i class="far fa-heart"></i>
                            </div>
                            <nav>
                                <div class="course-details__tab-navs list-unstyled nav nav-tabs" id="myTab"
                                    role="tablist">
                                    <button class="active" id="nav-overview-tab" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#overview" type="button" aria-controls="overview" aria-selected="true">Overview</button>
                                    <button class="" id="nav-curriculum-tab" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#curriculum" aria-controls="curriculum" type="button"
                                        aria-selected="false">Curriculum</button>
                                    <button class="" id="nav-review-tab" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#review" aria-controls="review" type="button" aria-selected="false">Reviews</button>
                                </div>
                            </nav>
                            <div class="tab-content course-details__tab-content " id="nav-tabContent">
                                <div class="tab-pane show active fade animated fadeInUp" role="tabpanel" id="overview"
                                    tabindex="0" aria-labelledby="nav-overview-tab">
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur
                                        turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry’s standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged.</p>
                                    <br>
                                    <p class="course-details__tab-text">It was popularised in the 1960s with the release
                                        of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of lorem
                                        ipsum amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry’s standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting.</p>
                                    <br>
                                    <ul class="list-unstyled course-details__overview-list">
                                        <li>It has survived not only five centuries</li>
                                        <li>Lorem Ipsum is simply dummy text of the new design</li>
                                        <li>Printng and type setting ipsum</li>
                                        <li>Take a look at our round up of the best shows</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade animated fadeInUp" role="tabpanel" id="curriculum"
                                    tabindex="0" aria-labelledby="nav-curriculum-tab">
                                    <h3 class="course-details__tab-title">Starting beginners level course</h3>
                                    <br>
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur
                                        turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry’s standard dummy text
                                        ever since.</p>
                                    <br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                                <a href="#none">Introduction to Editing</a>
                                                <span>Preview</span>
                                            </div>
                                            <div class="course-details__curriculum-list-right">16 minutes</div>
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                                <a href="#none">Overview of Editing</a>
                                                <span>Preview</span>
                                            </div>
                                            <div class="course-details__curriculum-list-right">10 minutes</div>
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon"><i
                                                        class="fas fa-folder"></i></div><a href="#none">Basic Editing
                                                    Technology</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon"><i
                                                        class="fas fa-comment"></i></div><a href="#none">Quiz</a>
                                            </div>
                                            <div class="course-details__curriculum-list-right">6 questions</div>
                                        </li>
                                    </ul><br><br>
                                    <h3 class="course-details__tab-title">Intermediate Level</h3><br>
                                    <p class="course-details__tab-text">Aelltes port lacus quis enim var sed efficitur
                                        turpis gilla sed sit Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry’s standard dummy text
                                        ever since.</p><br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon"><i
                                                        class="fas fa-play"></i></div><a href="#none">Introduction to
                                                    Editing</a><span>Preview</span>
                                            </div>
                                            <div class="course-details__curriculum-list-right">16 minutes</div>
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon"><i
                                                        class="fas fa-folder"></i></div><a href="#none">Basic Editing
                                                    Technology</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon"><i
                                                        class="fas fa-comment"></i></div><a href="#none">Quiz</a>
                                            </div>
                                            <div class="course-details__curriculum-list-right">6 questions</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade animated fadeInUp" role="tabpanel" id="review" tabindex="0"
                                    aria-labelledby="nav-review-tab">
                                    <div class="row">
                                        <div class="col-xl-7 d-flex">
                                            <div class="course-details__progress my-auto">
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Excellent</p>
                                                    <div class="course-details__progress-bar"><span
                                                            style="width: 95%;"></span></div>
                                                    <p class="course-details__progress-count">5</p>
                                                </div>
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Very Good</p>
                                                    <div class="course-details__progress-bar"><span
                                                            style="width: 65%;"></span></div>
                                                    <p class="course-details__progress-count">2</p>
                                                </div>
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Average</p>
                                                    <div class="course-details__progress-bar"><span
                                                            style="width: 33%;"></span></div>
                                                    <p class="course-details__progress-count">1</p>
                                                </div>
                                                <div class="course-details__progress-itxem">
                                                    <p class="course-details__progress-text">Poor</p>
                                                    <div class="course-details__progress-bar"><span class="no-bubble"
                                                            style="width: 0%;"></span></div>
                                                    <p class="course-details__progress-count">0</p>
                                                </div>
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Terrible</p>
                                                    <div class="course-details__progress-bar"><span class="no-bubble"
                                                            style="width: 0%;"></span></div>
                                                    <p class="course-details__progress-count">0</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 justify-content-xl-end justify-content-sm-center d-flex">
                                            <div class="course-details__review-box">
                                                <p class="course-details__review-count">4.6</p>
                                                <div class="course-details__review-stars"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star-half"></i></div>
                                                <p class="course-details__review-text">30 reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-details__comment">
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img"><img
                                                        src="https://kipso-gatsby.vercel.app/static/team-1-1-f8cf39053ac9b7e87c900fc95863e4c5.jpg"
                                                        alt=""></div>
                                                <div class="course-details__comment-right">
                                                    <h2 class="course-details__comment-name">Steven Meyer</h2>
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">26 July, 2019</p>
                                                        <div class="course-details__comment-stars"><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star star-disabled"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="course-details__comment-text">Lorem ipsum is simply free text used
                                                by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed
                                                inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo.</p>
                                        </div>
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img"><img
                                                        src="https://kipso-gatsby.vercel.app/static/team-1-1-f8cf39053ac9b7e87c900fc95863e4c5.jpg"
                                                        alt=""></div>
                                                <div class="course-details__comment-right">
                                                    <h2 class="course-details__comment-name">Lina Kelley</h2>
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">26 July, 2019</p>
                                                        <div class="course-details__comment-stars"><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i
                                                                class="fa fa-star star-disabled"></i><i
                                                                class="fa fa-star star-disabled"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="course-details__comment-text">Lorem ipsum is simply free text used
                                                by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed
                                                inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo.</p>
                                        </div>
                                    </div>
                                    <form action="#" class="course-details__comment-form">
                                        <h2 class="course-details__title">Add a review</h2>
                                        <p class="course-details__comment-form-text">Rate this Course? <a
                                                href="#give-star" aria-label="review stars"><i
                                                    class="fas fa-star"></i></a><a href="#give-star"
                                                aria-label="review stars"><i class="fas fa-star"></i></a><a
                                                href="#give-star" aria-label="review stars"><i
                                                    class="fas fa-star"></i></a><a href="#give-star"
                                                aria-label="review stars"><i class="fas fa-star"></i></a><a
                                                href="#give-star" aria-label="review stars"><i
                                                    class="fas fa-star"></i></a></p>
                                        <div class="row">
                                            <div class="col-lg-6"><input type="text" placeholder="Your Name"><input
                                                    type="text" placeholder="Email Address"></div>
                                            <div class="col-lg-12"><textarea
                                                    placeholder="Write Message"></textarea><button type="submit"
                                                    class="thm-btn course-details__comment-form-btn">Leave a
                                                    Review</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price">
                            <p class="course-details__price-text">Course price </p>
                            <p class="course-details__price-amount">$18.00</p><a href="#none"
                                class="thm-btn course-details__price-btn">Buy This Course</a>
                        </div>
                        <div class="course-details__meta"><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="far fa-clock"></i></span>Durations:
                                <span>10 hours</span></a><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="far fa-folder-open"></i></span>Lectures:
                                <span>6</span></a><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="far fa-user-circle"></i></span>Students:
                                <span>Max 4</span></a><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="fas fa-play"></i></span>Video: <span>8
                                    hours</span></a><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="far fa-flag"></i></span>Skill Level:
                                <span>Advanced</span></a><a href="#none" class="course-details__meta-link"><span
                                    class="course-details__meta-icon"><i class="far fa-bell"></i></span>Language:
                                <span>English</span></a></div>
                        <div class="course-details__list">
                            <h2 class="course-details__list-title">New Courses</h2>
                            <div class="course-details__list-item">
                                <div class="course-details__list-img"><img
                                        src="https://kipso-gatsby.vercel.app/static/course-d-1-25e712f5bb5dc65d69e960dd3a1deb16.jpg"
                                        alt=""></div>
                                <div class="course-details__list-content">
                                    <h3><a href="#none">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><span>4.8</span></div>
                                </div>
                            </div>
                            <div class="course-details__list-item">
                                <div class="course-details__list-img"><img
                                        src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFQzhCREE5QkZDODMxMUU5QjlFN0FCMjdCRUVGQkZCNCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFQzhCREE5Q0ZDODMxMUU5QjlFN0FCMjdCRUVGQkZCNCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkVDOEJEQTk5RkM4MzExRTlCOUU3QUIyN0JFRUZCRkI0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkVDOEJEQTlBRkM4MzExRTlCOUU3QUIyN0JFRUZCRkI0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAAQEBAQEBAQEBAQEBAQEB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"
                                        alt=""></div>
                                <div class="course-details__list-content">
                                    <h3><a href="#none">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><span>4.8</span></div>
                                </div>
                            </div>
                            <div class="course-details__list-item">
                                <div class="course-details__list-img"><img
                                        src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGOTdGQzcyMEZDODMxMUU5QkI1Mzk0QTBFOTM0NjE0QyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGOTdGQzcyMUZDODMxMUU5QkI1Mzk0QTBFOTM0NjE0QyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkY5N0ZDNzFFRkM4MzExRTlCQjUzOTRBMEU5MzQ2MTRDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkY5N0ZDNzFGRkM4MzExRTlCQjUzOTRBMEU5MzQ2MTRDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAAQEBAQEBAQEBAQEBAQEB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"
                                        alt=""></div>
                                <div class="course-details__list-content">
                                    <h3><a href="#none">Marketing strategies</a></h3>
                                    <div class="course-details__list-stars"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><span>4.8</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include "./footer.php";
        ?>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="./assets/jquery/jquery-3.6.1.min.js"></script>
    <script src="./assets/myscript.js"> </script>
</body>

</html>