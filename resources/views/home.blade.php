@extends('layout.app')
 @section('content')
 <div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
            
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+63 9305773709</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">jolinaarcina2@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a><a href="#">Sign In</a></p>

              </div>
            </div>
            <div class="row">
            <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo url('/'); ?>/images/sun.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-5 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Life is Better on the Farm</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Investments in agriculture are the best weapons against hunger and poverty, and they have made life better for billions of people. -Bill Gates</p>
            <form action="#" class="search-location">
              <div class="row">
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <div class="form-field">
                      <input type="text" class="form-control" placeholder="Search location">
                      <button><a href="/icon"  span class="ion-ios-search"></a></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              </div>
              </div>
    </section>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  
@endsection
   

  </body>
</html>