<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="img/fav.png">
      <title>Osahanin - Job Portal & Social Network HTML Template</title>
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
      <!-- Feather Icon-->
      <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="bg-white">
         <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
               <div class="col-md-4 mx-auto">
                  <div class="osahan-login py-4">
                     <div class="text-center mb-4">
                        <a href="{{route('home')}}"><img src="img/logo.svg" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Join Osahanin</h5>
                        <p class="text-muted">Make the most of your professional life</p>
                     </div>
                     <form action="{{route('home')}}">
                        <div class="form-row">
                           <div class="col">
                              <div class="form-group">
                                 <label class="mb-1">First name</label>
                                 <div class="position-relative icon-form-control">
                                    <i class="feather-user position-absolute"></i>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-group">
                                 <label class="mb-1">Last name</label>
                                 <div class="position-relative icon-form-control">
                                    <i class="feather-user position-absolute"></i>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Email</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-at-sign position-absolute"></i>
                              <input type="email" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Password (6 or more characters)</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-unlock position-absolute"></i>
                              <input type="password" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">You agree to the Osahanin <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a  href="#">Cookie Policy</a>.</label>
                        </div>
                        <button class="btn btn-primary btn-block text-uppercase" type="submit"> Agree & Join </button>
                        <div class="text-center mt-3 border-bottom pb-3">
                           <p class="small text-muted">Or login with</p>
                           <div class="row">
                              <div class="col-4">
                                 <button type="button" class="btn btn-sm btn-outline-instagram btn-block"><i class="feather-instagram"></i> Instagram</button>
                              </div>
                              <div class="col-4">
                                 <button type="button" class="btn btn-sm btn-outline-linkedin btn-block"><i class="feather-linkedin"></i> Linkedin</button>
                              </div>
                              <div class="col-4">
                                 <button type="button" class="btn btn-sm btn-outline-facebook btn-block"><i class="feather-facebook"></i> Facebook</button>
                              </div>
                           </div>
                        </div>
                        <div class="py-3 d-flex align-item-center">
                           <a href="{{route('forgot-password')}}">Forgot password?</a>
                           <span class="ml-auto"> Already on Osahanin? <a class="font-weight-bold" href="{{route('sign-in')}}">Sign in</a></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/osahan.js"></script>
   </body>
</html>
