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
  
            <div class="row mt-30">
                @foreach ($doctors as $doctor)
                    <div class="col-lg-3 col-sm-6">
                      <div class="single_member">
                          <div class="author">
                              <img src="{{asset($doctor->imagepath)}}" alt="{{$doctor->imagename}}">
                          </div>
                          <div class="author_decs">
                              <div class="social_icons">
                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                  <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                              <h4>{{$doctor->Fname}}</h4>
                              <p class="profession">{{$doctor->department}}</p>
                              <p>{{$doctor->description}}</p>
                          </div>
                      </div>
                  </div>
                  
                  @endforeach
                
                </div>
               
            </div>
        </div>
    </section>

    @include('admin.footer')

</body>

</html>
