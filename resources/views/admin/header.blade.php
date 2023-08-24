<header class="header_area">
  <div class="header-top">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-3 col-sm-6 col-4 header-top-left">
              </div>
              <div class="col-lg-9 col-sm-6 col-8 header-top-right">
                  <a href="{{Route('login')}}"><span class="lnr lnr-phone-handset"></span> <span
                          class="text"><span class="text">Admin</span></span></a>
                  <a href=""><span
                          class="lnr lnr-envelope"></span> <span class="text"><span class="text"><span
                                  class="__cf_email__"
                                  data-cfemail="71020401011e030531121e1d1e031d18135f121e1c">Medicare@hos.med</span></span></span></a>
                  <a href="appointment" class="primary-btn text-uppercase">Appointment</a>
              </div>
          </div>
      </div>
  </div>
  <div class="main_menu">
      <div class="search_input" id="search_input_box">
          <div class="container">
              <form class="d-flex justify-content-between">
                  <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                  <button type="submit" class="btn"></button>
                  <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
              </form>
          </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">

              <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets/img/logo.png') }}"
                      alt></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                  <ul class="nav navbar-nav menu_nav ml-auto">
                      <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="about-us">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="departments">Department</a></li>
                      <li class="nav-item submenu dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false">Pages</a>
                          <ul class="dropdown-menu">
                              <li class="nav-item"><a class="nav-link" href="doctors">Doctors</a></li>
                              
                          </ul>
                      </li>
                      <li class="nav-item submenu dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                              role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                          <ul class="dropdown-menu">
                              <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                              <li class="nav-item"><a class="nav-link" href="single-blog">Blog Details</a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                  </ul>
                  <ul class="nav navbar-nav ml-auto">
                      <li class="nav-item"><a href="#" class="search">
                              <i class="lnr lnr-magnifier" id="search"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </div>
</header>

