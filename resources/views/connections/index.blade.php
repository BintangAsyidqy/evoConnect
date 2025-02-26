@extends('layouts.templates')

@section('content')
      <div class="py-4">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                  <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
                     <h5 class="pl-3 pt-3 pr-3 border-bottom mb-0 pb-3">More suggestions for you</h5>
                     <ul class="nav border-bottom osahan-line-tab" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">People</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Groups</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Pages</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="type-tab" data-toggle="tab" href="#type" role="tab" aria-controls="type" aria-selected="false">Hashtags</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="p-3">
                              <div class="row">
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p1.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Sophia Lee</h6>
                                                <div class="small text-black-50">Photographer at Photography</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p1.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p2.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p3.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p4.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p5.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p2.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">John Doe</h6>
                                                <div class="small text-black-50">Traveler</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p6.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p7.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p8.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p9.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p3.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Julia Cox</h6>
                                                <div class="small text-black-50">Art Designer</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p10.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p11.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p12.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p13.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p4.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Robert Cook</h6>
                                                <div class="small text-black-50">Graphic Designer</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p1.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p3.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p4.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p5.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Stella Bergmann</h6>
                                                <div class="small text-black-50">Photography</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p5.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p6.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p7.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p8.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p6.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Dan Walker</h6>
                                                <div class="small text-black-50">UI/UX Designer</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p9.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p13.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p8.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p7.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Julia Cox</h6>
                                                <div class="small text-black-50">Art Designer</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p10.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p11.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p12.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p13.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p8.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Robert Cook</h6>
                                                <div class="small text-black-50">Graphic Designer</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p1.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p3.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p4.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{route('profile')}}">
                                       <div class="border network-item rounded mb-3">
                                          <div class="p-3 d-flex align-items-center network-item-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/p9.png" alt="">
                                             </div>
                                             <div class="font-weight-bold">
                                                <h6 class="font-weight-bold text-dark mb-0">Stella Bergmann</h6>
                                                <div class="small text-black-50">Photography</div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center p-3 border-top border-bottom network-item-body">
                                             <div class="overlap-rounded-circle">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Sophia Lee" src="img/p5.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="John Doe" src="img/p6.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Julia Cox" src="img/p7.png" alt="">
                                                <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="Robert Cook" src="img/p8.png" alt="">
                                             </div>
                                             <span class="font-weight-bold small text-primary">4 mutual connections</span>
                                          </div>
                                          <div class="network-item-footer py-3 d-flex text-center">
                                             <div class="col-6 pl-3 pr-1">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"> Connect </button>
                                             </div>
                                             <div class="col-6 pr-3 pl-1">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> <i class="feather-user-plus"></i> Follow </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="p-3 w-100">
                              <h6>Soon in next free update</h6>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <div class="p-3 w-100">
                              <h6>Soon in next free update</h6>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="type" role="tabpanel" aria-labelledby="type-tab">
                           <div class="p-3 w-100">
                              <h6>Soon in next free update</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </main>
               <aside class="col col-xl-3 order-xl-2 col-lg-12 order-lg-2 col-12">
                  <div class="box mb-3 shadow-sm border rounded bg-white list-sidebar">
                     <div class="box-title p-3">
                        <h6 class="m-0">Manage my network</h6>
                     </div>
                     <ul class="list-group list-group-flush">
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-users mr-2 text-dark"></i> Connections <span class="ml-auto font-weight-bold">68</span></li>
                        </a>
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-book mr-2 text-dark"></i> Contacts <span class="ml-auto font-weight-bold">869</span></li>
                        </a>
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-user-check mr-2 text-dark"></i> People I Follow <span class="ml-auto font-weight-bold">156</span></li>
                        </a>
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-message-circle mr-2 text-dark"></i> Groups <span class="ml-auto font-weight-bold">15</span></li>
                        </a>
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-clipboard mr-2 text-dark"></i> Page <span class="ml-auto font-weight-bold">3</span></li>
                        </a>
                        <a href="#">
                           <li class="list-group-item pl-3 pr-3 d-flex align-items-center text-dark"><i class="feather-tag mr-2 text-dark"></i> Hashtag <span class="ml-auto font-weight-bold">8</span></li>
                        </a>
                     </ul>
                  </div>
                  <div class="box shadow-sm mb-3 border rounded bg-white ads-box text-center">
                     <div class="image-overlap-2 pt-4">
                        <img src="img/l4.png" class="img-fluid rounded-circle shadow-sm" alt="Responsive image">
                        <img src="img/user.png" class="img-fluid rounded-circle shadow-sm" alt="Responsive image">
                     </div>
                     <div class="p-3 border-bottom">
                        <h6 class="text-dark">Gurdeep, grow your career by following <span class="font-weight-bold"> Askbootsrap</span></h6>
                        <p class="mb-0 text-muted">Stay up-to industry trends!</p>
                     </div>
                     <div class="p-3">
                        <button type="button" class="btn btn-outline-primary btn-sm pl-4 pr-4"> FOLLOW </button>
                     </div>
                  </div>
               </aside>
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

   @endsection
