<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Designer - Creative HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 572 Designer

https://templatemo.com/tm-572-designer

-->
  </head>

<body>

  <div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>

  <?php include_once "assets/parts/header.php"?>

  <div class="main-banner change-name">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="header-text">
                      <h6>We Provide Everything</h6>
                      <h2><em>Interior</em> Designer</h2>
                      <div class="white-button">
                          <a href="#">Discover More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="search-form">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <form id="search-form" name="gs" method="submit" role="search" action="#">
                      <div class="row">
                          <div class="col-lg-3">
                              <fieldset>
                                  <label for="searchTitle" class="form-label">Search Work by Title</label>
                                  <input type="text" name="searchTitle" class="searchText" placeholder="Type any work title..." autocomplete="on" required>
                              </fieldset>
                          </div>
                          <div class="col-lg-3">
                              <fieldset>
                                  <label for="chooseCategory" class="form-label">Choose Category</label>
                                  <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                      <option selected>Choose category</option>
                                      <option type="checkbox" name="option1" value="Interior Design">Interior Design</option>
                                      <option value="Exterior Design">Exterior Design</option>
                                      <option value="New Ideas">New Ideas</option>
                                      <option value="Trendy Design">Trendy Design</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-lg-3">
                              <fieldset>
                                  <label for="chooseprice" class="form-label">Price Range</label>
                                  <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                      <option selected>Choose price</option>
                                      <option value="$100 - $250">$100 - $250</option>
                                      <option value="$250 - $500">$250 - $500</option>
                                      <option value="$500 - $1000">$500 - $1000</option>
                                      <option value="$1000+">$1000+</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-lg-3">
                              <fieldset>
                                  <label for="chooseplan" class="form-label">Pick a Plan</label>
                                  <select name="Plan" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                      <option selected>Choose plan</option>
                                      <option value="Standard">Standard</option>
                                      <option value="Professional">Professional</option>
                                      <option value="Golden">Golden</option>
                                      <option value="Premium">Premium</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-lg-12">                        
                              <fieldset>
                                  <button class="main-button">Search Now</button>
                              </fieldset>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>


  <section class="explore-work" id="explore">
      <div class="container expanded">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-heading">
                      <h2>Explore Some Of Our Latest<br><em>Interior Design Work</em>.</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="left-image">
                      <img src="assets/images/explore-work-left-image.jpg" alt="Interior Design Work">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="right-content">
                      <ul>
                          <li>
                              <h4>Interior Design</h4>
                              <ul class="info">
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                                              <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                                          </svg>
                                          January 22, 2022
                                      </span>
                                      <h6>
                                          <a href="explore.html">
                                              The Waterfront Cafe and Restaurant
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                              </svg>
                                          </a>
                                      </h6>
                                  </li>
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
                                            </svg>
                                          Florida, USA
                                      </span>
                                      <em>Designer HTML5 Template is 100% free to download provided by TemplateMo website. </em>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <h4>Building &amp; Developing</h4>
                              <ul class="info">
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                                              <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                                          </svg>
                                          January 20, 2022
                                      </span>
                                      <h6>
                                          <a href="explore.html">
                                              Home Land Port Canaveral Suites
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                              </svg>
                                          </a>
                                      </h6>
                                  </li>
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
                                            </svg>
                                          Miami Beach, Florida, USA
                                      </span>
                                      <em>This is based on latest Bootstrap v5.1.3 CSS layout where you can easily edit and use Bootstrap components.</em>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <h4>Giving Your Brand Power</h4>
                              <ul class="info">
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                                              <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                                          </svg>
                                          January 18, 2022
                                      </span>
                                      <h6>
                                          <a href="explore.html">
                                              Hallandale Beach Motel Design
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                              </svg>
                                          </a>
                                      </h6>
                                  </li>
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
                                            </svg>
                                          North City Beach Park
                                      </span>
                                      <em>Feel free to download &amp; use this template for your websites. Please tell your friends about TemplateMo.</em>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <h4>Boost Up Your Style</h4>
                              <ul class="info">
                                  <li>
                                      <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                                              <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                                          </svg>
                                          January 16, 2022
                                      </span>
                                      <h6>
                                          <a href="explore.html">
                                              Interior for Marina Beach Resort
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                              </svg>
                                          </a>
                                      </h6>
                                  </li>
                                  <li>
                                      <span class="float-start">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
                                            </svg>
                                          Sunny Isles Beach, FL 33160
                                      </span>
                                      <em>You are <strong>NOT allowed</strong> to redistribute the downloadable ZIP file of this template on any other website. Please contact us for more info.</em>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <section class="whats-trending">
      <div class="container expanded">
          <div class="row">
              <div class="col-lg-6 align-self-center">
                  <div class="section-heading">
                      <h2>Check Out Whats Trending In<br><em>Our Interior Work</em>.</h2>
                  </div>
                  <div class="left-content">
                      <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit, sed do eismuod larehai med at vero eos et suscipit neque rerum molestias accusamus et iusto odio dignissimos ducimus qui blanditis.</p>
                      <div class="primary-button">
                          <a href="#">Discover More</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="right-image">
                      <div class="thumb">
                          <div class="hover-effect">
                              <div class="inner-content">
                                  <h4><a href="#">Modernized Interior</a></h4>
                                  <span>Guest Room Decoration</span>
                              </div>
                          </div>
                          <img src="assets/images/whats-trending-item-image.jpg" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?php include_once "login.php";
        use data\userManager;
        $UM = new userManager();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $UM->register($_POST['login'], $_POST['email'], $_POST['password']);
        }
  ?>


  <section class="contact-us" id="contact">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 left-form">
                  <form id="contact" action="" method="post">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="section-heading">
                                  <h2>Don't be Hesitated<br><em>Register</em> right now!</h2>
                              </div>
                          </div>
                          <div class="col-lg-12">                 
                              <input name="login" type="text" id="login" placeholder="Login" required="">               
                          </div>
                          <div class="col-lg-12">                       
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">                        
                          </div>
                          <div class="col-lg-12">                         
                              <input name="password" type="text" id="password" placeholder="Password" required="">                        
                          </div>
                          <div class="col-lg-12">
                              <button type="submit" id="form-submit" class="main-button ">Register</button>                            
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6 right-map">
                  <div id="map">
                  
                    <!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->
                      
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="542px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <?php include_once "assets/parts/footer.php"?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    setTimeout(function(){
        $('.loader').fadeToggle();
    }, 1500);
	
	$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
  </script>

</body>
</html>