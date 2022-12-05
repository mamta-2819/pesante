<!--Header Section Start-->
<header id= "header" data-spy="affix" data-offset-top="60" data-offset-bottom="60">
    <div class="container">
      <div class="row">
        <div class="col-md-8  col-sm-12 col-xs-12 col-sm-12">
          <nav class="navbar"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="#"><img class="logo-dark hidden-xs"  src="{{asset('images/Pesante.png')}}" alt="" /> <img class="logo-dark hidden-lg hidden-md hidden-sm"  src="{{asset('images/pesante.png')}}" alt="" /></a> </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li role="presentation" class="dropdown active"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Home <span class="caret"></span> </a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Home Page 1</a></li>
                    <li><a href="02-homepage.html">Home Page 2</a></li>
                  </ul>
                </li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="service.html">Service</a></li>
                <li role="presentation" class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Pages <span class="caret"></span> </a>
                  <ul class="dropdown-menu">
                    <li><a href="booking.html">Booking Page</a></li>
                    <li><a href="service_detail.html">Servise Deatil</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog_post.html">Single Post</a></li>
                  </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </nav>
        </div>
        <div class="col-md-4  col-sm-12 col-xs-12 col-sm-12 hidden-xs">
          <ul class="right-contact">
            <li><i class="fa fa-phone" aria-hidden="true"></i> +91 8107186985</li>
            <li><a href="#" class="btn btn-primary btn-skin">Get Free Quote</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container --> 
  </header>
  <!--/Header Section End--> 