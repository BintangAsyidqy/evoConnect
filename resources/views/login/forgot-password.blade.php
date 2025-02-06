<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metadata dasar -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Favicon -->
      <link rel="icon" type="image/png" href="img/fav.png">

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
                  <!-- Kotak pencarian akun -->
                  <div class="osahan-login py-4">
                     <!-- Header pencarian akun -->
                     <div class="text-center mb-4">
                        <a href="{{route('home')}}"><img src="{{ asset('img/logo-evo.png') }}" alt=""></a>
                        <h5 class="font-weight-bold mt-3">First, let's find your account</h5>
                        <p class="text-muted">Please enter your email or phone</p>
                     </div>
                     <!-- Form pencarian akun ini digunakan ketika kita akan mencari akun yang lupa atau hilang, kita tinggal mencari dengan memasukan email dan nomor telepon yang sudah pernah daftar di aplikasi atau web ini-->
                     {{-- Route ini -({{route('home')}})- digunakan untuk mengarahkan pengguna ke halaman home --}}
                     <form action="{{route('home')}}">
                        <!-- Input email atau nomor telepon -->
                        <div class="form-group">
                           <label class="mb-1">Email or Phone</label>
                           <div class="position-relative icon-form-control">
                              <i class="feather-user position-absolute"></i>
                              <input type="email" class="form-control">
                           </div>
                        </div>
                       <!-- Tombol ketika kita ingin submit form pencarian -->
                        <button class="btn btn-primary btn-block text-uppercase" type="submit"> Find account </button>

                        <!-- Link Sign In dan Join Now -->
                        <div class="py-3 d-flex align-item-center">
                            {{-- Route ketika kita sudah mempunyai akun, route ini akan mengarahkan ke halaman sign-in --}}
                           <a href="{{route('sign-in')}}">Sign In</a>
                            {{-- Route ketika ingin daftar akun, route ini akan mengarahkan ke halaman sign-up --}}
                           <span class="ml-auto"> New to Osahanin? <a class="font-weight-bold" href="{{route('sign-up')}}">Join now</a></span>
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
