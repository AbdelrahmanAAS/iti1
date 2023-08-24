<!doctype html>
<html lang="en">

<head>@include('admin.head')</head>

<body>
    @include('admin.header')


    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="doctors.html">Doctors</a>
                    </div>
                    <h2>Our Consultants</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="section_gap team_area lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Medicare Popular Departments</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="img/team/member1.png" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Ethel Davis</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="img/team/member2.png" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Rodney Cooper</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="img/team/member3.png" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Dane Walker</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="img/team/member4.png" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Lena Keller</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>
            </div>
           @include('admin.doctors')
        </div>
    </section>

    @include('admin.footer')

</body>

</html>
