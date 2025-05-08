@extends('layouts.app')

@section('title', 'Home - TROJAN')

@section('content')
     

      <div class="main-head d-flex justify-content-center mb-5">
      <img src="{{ asset('images/cover1.jpg') }}" class="img-fluid" alt="">
        <div class="container text-success" id="cover-caption">
          <h2 class="text-light text-lg-center">
              Sports and Fashion Wear for you.
          </h2>
          <br>
          <br>
          <div class="container shop-box">
            <button type="button" class="btn btn-success btn-lg shop ">Shop Now!</button>
          </div>
          </div>
      </div>
      
      <div class="container-fluid  quotes" >
        <p class="text-success text-center fs-2 fw-semibold">Perfection is found in the perfect harmony of the creation <br>Spread love everywhere you go <br> #BeTrojan
        </p>
      </div>
         
       <div class="container-lg box-img d-flex justify-content-center">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-3" >
              <div class="image  d-flex flex-column justify-content-center w-100" >
                <img src="images/prod49.jpg" class="img-fluid" alt="">
                <div class="card-body">
                  <br><h5 class="text-center"><a href="#">Scorching Sun  <i class="fa-solid fa-arrow-right"></i></a></h5>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center" >
              <div class="image  d-flex flex-column justify-content-center w-100 mb-3" >
                <img src="images/prod43.jpg" class="img-fluid" alt="">
                <div class="card-body">
                  <br><h5 class="text-center"><a href="#">Moon Glimmer  <i class="fa-solid fa-arrow-right"></i></a></h5>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center" >
              <div class="image  d-flex flex-column justify-content-center w-100 mb-3" >
                <img src="images/prod52.jpg" class="img-fluid" alt="">
                <div class="card-body">
                  <br><h5 class="text-center"><a href="#">Desert Storm  <i class="fa-solid fa-arrow-right"></i></a></h5>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center " >
              <div class="image  d-flex flex-column justify-content-center w-100 mb-3">
                <img src="images/prod39.jpg" class="img-fluid" alt="">
                <div class="card-body">
                  <br><h5 class="text-center"><a href="#">Thunder Clap  <i class="fa-solid fa-arrow-right"></i></a></h5>
                </div>
              </div>
            </div>
        </div>
       </div>
      
       <div class="main-head d-flex justify-content-center mb-5">
        <img src="images/cover3.jpg" class="cover-image img-fluid" alt="">
        <div class="container text-success" id="cover-caption">
          <h2 class="text-light text-lg-center">
            Exciting new year release of modern shoes 2023. Sports and Fashion Wear for you.
          </h2>
          <h3 class="fw-normal text-light "> #WorkoutSwitch <br>
            New arrivals!
            <br></h3>
          <br>
          <br>
          <div class="container shop-box">
            <button type="button" class="btn btn-secondary btn-lg shop ">Explore now</button>
          </div>
          </div>
      </div>
      

       <div class="container-lg cover-4 bg-light">
        <div class="row">
          <div class="col-md left ">
              <img src="images/cover4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md right">
              <div class="text ">
                <p class="fs-1" style="font-weight: 500;">Trojan Shoes is authentic sports wear for your activity needs.</p>
              </div>
              <div class="text">
                <p class="fs-5">Shoes are the quickest way for men and women to achieve instant metamorphosis. Supportive shoes protect your body from joint damage and pulled muscles and tendons, and ones with proper traction can help stop slips and falls.</p>
              </div>
              <div class="btn">
                <button type="button" class="btn btn-success btn-lg "><a href="#" class="text-light">Learn more</a></button>
              </div>
          </div>
        </div>
       </div>

          <div class="container-fluid guide">
              <div class="row justify-content-center">
                <div class="col-6">
                   <div class="text-head text-center mb-4">
                          <h1 class="t-head">Try Them Out!</h1>
                   </div>
                   <div class="text mb-5">
                          <h6 class="fw-normal text-center">You can return the item as many times as you need to find the correct size. Simply contact our team for assistance!</h6>
                   </div>
                   <div class="selects">
                    <div class="toggle">
                      <p>
                        <a class="btn  w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fa-solid fa-ruler"></i>   Find your size
                        </a>
                      </p>
                    </div>
                    <div class="collapse" id="collapseExample1">
                      <div class="card-body text-center mb-3">
                              Check out our size guide to find your perfect match!
                        </div>
                    </div>
                    <div class="toggle">
                      <p>
                        <a class="btn  w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fa-solid fa-car-side"></i>  Free Shpping
                        </a>
                      </p>
                    </div>
                    <div class="collapse" id="collapseExample2">
                      <div class="card-body text-center mb-3 ">
                        Free shipping over <i class="fa-solid fa-peso-sign"></i>1,500 all over Philippines. Check out our Shipping Information page for more details.
                        </div>
                    </div>
                    <div class="toggle">
                      <p>
                        <a class="btn w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fa-solid fa-arrows-rotate"></i>   Easy Returns
                        </a>
                      </p>
                    </div>
                    <div class="collapse" id="collapseExample3">
                      <div class="card-body text-center mb-3">
                        You can return the item as many times as you need to find the correct size. Simply contact our team for assistance!
                        </div>
                    </div>
                    <div class="toggle">
                      <p>
                        <a class="btn w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fa-solid fa-tags"></i>  Pay in 6 
                        </a>
                      </p>
                    </div>
                    <div class="collapse" id="collapseExample4">
                      <div class="card-body text-center mb-3">
                             Buy now and pay later! Easy 6 easy installments.
                        </div>
                    </div>

                   </div>
                </div>
              </div>
          </div>

       <div class="container-lg cover-4 bg-light mb-5">
        <div class="row">
          <div class="col-md">
            <div class="text ">
              <p class="fs-1 text-success text-center" style="font-weight: 900;">*******</p>
            </div>
            <div class="text">
              <p class="fs-5 fw-light fst-italic">"The sneakers are true to size, super comfortable and don’t need any breaking in! I love how soft the material on the shoes are as well. Great for every day use and perfect for avid travelers like myself - since they are lightweight and pack up nicely!"</p>
              <h6 class="text-center fw-normal ">B r a d</h6>
            </div> 
           
        </div>
          <div class="col-md">
              <img src="images/cover5.jpg" class="img-fluid" alt="">
          </div>
         
        </div>
       </div>

       <div class="container-md text-center mb-5">
        <h1>Follow Us on Instagram <i class="fa-brands fa-instagram"></i></h1>
        <h1 style="text-decoration: underline;">@TROJAN</h1>
      </div>
      
       <div class="container-lg box-img d-flex justify-content-center">
        <div class="row justify-content-center mb-5">
          <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center" >
            <div class="image w-100 mb-3">
              <img src="images/prod19.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center">
            <div class="image w-100 mb-3" >
              <img src="images/prod34.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center">
            <div class="image w-100 mb-3" >
              <img src="images/prod14.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center">
            <div class="image w-100 mb-3" >
              <img src="images/prod69.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
       </div>
   
@endsection
