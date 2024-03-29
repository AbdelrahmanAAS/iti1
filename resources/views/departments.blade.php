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
                        <a href="departments.html">Departments</a>
                    </div>
                    <h2>Departments</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="department_area section_gap">
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
            @foreach ($data as $value)
                  <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset($value->imgname) }}" alt>
                        </div>
                        <h4>{{$value->Depname}}</h4>
                    </div>
                </div>
            @endforeach
            {{--<div class="row">
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon1.png') }}" alt>
                        </div>
                        <h4>Cardiology</h4>
                    </div>
                </div>
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon2.png') }}" alt>
                        </div>
                        <h4>Urology</h4>
                    </div>
                </div>
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon3.png') }}" alt>
                        </div>
                        <h4>Dental Care</h4>
                    </div>
                </div>
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon4.png') }}" alt>
                        </div>
                        <h4>Eye Care</h4>
                    </div>
                </div>
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon5.png') }}" alt>
                        </div>
                        <h4>Neurology</h4>
                    </div>
                </div>
      
                <div class="col-lg-2 text-center col-sm-6">
                    <div class="single_department">
                        <div class="dpmt-thumb">
                            <img src="{{ asset('assets/img/department/d-icon6.png') }}" alt>
                        </div>
                        <h4>Plastic Surgery</h4>
                    </div>
                </div>
                <a class="primary-btn text-uppercase" href="#">Learn More</a>
        </div>--}}
      </section>


    
      <section class="section_gap counter_area overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">30</span>K</h1>
                        <p>Years <br> of Experiences</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">2</span>K+</h1>
                        <p>Instant <br> Blood Donors </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">5</span>K+</h1>
                        <p>Well Cured <br> Patients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">20</span>K+</h1>
                        <p>Internal <br> Stuff Groups</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="features_area section_gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon1.png" alt>
                            <h4>Emergency Services</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Call Us: 215 - 3695 - 9584</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon2.png" alt>
                            <h4>Doctors Schedule</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon3.png" alt>
                            <h4>Online Appointment</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Get Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('admin.footer')
</body>

</html>
