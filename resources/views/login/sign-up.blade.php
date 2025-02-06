<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metadata dasar -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Favicon -->
      <link rel="icon" type="image/png" href="{{ asset('img/logo-evo.png') }}">

      <!-- Judul halaman -->
      <title>Osahanin - Job Portal & Social Network HTML Template</title>

      <!-- Slick Slider CSS -->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>

      <!-- Feather Icon CSS -->
      <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">

      <!-- Bootstrap CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- Bagian utama halaman -->
      <div class="bg-white">
         <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
               <div class="col-md-4 mx-auto">
                  <!-- Kotak pendaftaran -->
                  <div class="osahan-login py-4">
                     <!-- Header pendaftaran -->
                     <div class="text-center mb-4">
                        <a href="{{route('home')}}"><img src="img/logo.svg" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Join Osahanin</h5>
                        <p class="text-muted">Make the most of your professional life</p>
                     </div>
                     <!-- Form pendaftaran ini untuk daftar ketika kita tidak mempunyai akun -->
                     {{-- Route ini ({{route('home')}}) akan mengarahkan ke halaman home --}}
                     <form action="{{route('home')}}">
                        <!-- Input untuk nama depan dan nama belakang -->
                        <div class="form-row">
                           <div class="col">
                              <div class="form-group">
                                   <!-- Input untuk nama depan -->
                                 <label class="mb-1">First name</label>
                                 <div class="position-relative icon-form-control">
                                    <i class="feather-user position-absolute"></i>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-group">
                                   <!-- Input untuk nama belakang -->
                                 <label class="mb-1">Last name</label>
                                 <div class="position-relative icon-form-control">
                                    <i class="feather-user position-absolute"></i>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Input untuk email -->
                        <div class="form-group">
                           <label class="mb-1">Email</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-at-sign position-absolute"></i>
                              <input type="email" class="form-control">
                           </div>
                        </div>
                        <!-- Input untuk password -->
                        <div class="form-group">
                           <label class="mb-1">Password (6 or more characters)</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-unlock position-absolute"></i>
                              <input type="password" class="form-control">
                           </div>
                        </div>
                        <!-- Persetujuan kebijakan -->
                        <div class="form-group">
                           <label class="mb-1">You agree to the Osahanin <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
                        </div>
                        <!-- Tombol ketika kita ingin submit form pendaftaran -->
                        <button class="btn btn-primary btn-block text-uppercase" type="submit"> Agree & Join </button>

                        <!-- Opsi login menggunakan media sosial -->
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

                       <!--terdapat link untuk lupa password dan login ketika anda sudah punya akun -->
                        <div class="py-3 d-flex align-item-center">
                           {{-- Route ketika kita lupa password dan akan mengarahkan ke halaman forgot-password --}}
                           <a href="{{route('forgot-password')}}">Forgot password?</a>
                           {{-- Route ketika kita sudah mempunyai akun dan akan mengarahkan ke halaman sign-in --}}
                           <span class="ml-auto"> Already on Osahanin? <a class="font-weight-bold" href="{{route('sign-in')}}">Sign in</a></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- JavaScript inti Bootstrap -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- slick Slider JavaScript -->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>

      <!-- JavaScript custom untuk halaman ini -->
      <script src="js/osahan.js"></script>
   </body>
</html>
