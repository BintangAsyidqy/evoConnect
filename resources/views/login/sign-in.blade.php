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
                        <h5 class="font-weight-bold mt-3">Welcome Back</h5>
                        <p class="text-muted">Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
                     </div>
                     <form action="{{route('connect.index')}}">
                        <div class="form-group">
                           <label class="mb-1">Email or Phone</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-user position-absolute"></i>
                              <input type="email" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Password</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-unlock position-absolute"></i>
                              <input type="password" class="form-control">
                           </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                           <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-primary btn-block text-uppercase" type="submit"> Sign in </button>
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
                           <span class="ml-auto"> New to Osahanin? <a class="font-weight-bold" href="{{route('sign-up')}}">Join now</a></span>
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
