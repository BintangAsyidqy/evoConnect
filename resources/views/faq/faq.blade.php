@extends('layouts.app')

@section('content')
      <div class="bg-primary pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-7 text-center mx-auto my-4">
                  <!-- Title -->
                  <div class="mb-4">
                     <h1 class="display-4 text-white mb-0">How can we <span class="font-weight-bold">help?</span></h1>
                  </div>
                  <!-- End Title -->
                  <!-- Input -->
                  <form class="input-group input-group-lg input-group-borderless mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text bg-white border-0" id="askQuestions">
                        <span class="feather-search"></span>
                        </span>
                     </div>
                     <input type="search" class="form-control border-0 shadow-none" placeholder="Ask a question" aria-label="Ask a question" aria-describedby="askQuestions">
                  </form>
                  <!-- End Input -->
                  <!-- Text/Links -->
                  <p class="text-white">
                     Popular help topics:
                     <a class="text-info ml-1" href="#">pricing,</a>
                     <a class="text-info ml-1" href="#">upgrade,</a>
                     <a class="text-info ml-1" href="#">hosting,</a>
                     <a class="text-info ml-1" href="#">membership</a>
                  </p>
                  <!-- End Text/Links -->
               </div>
            </div>
         </div>
      </div>
      <div class="py-4">
         <div class="container mx-auto col-md-8">
            <div class="row">
               <!-- Main Content -->
               <div class="col-md-6">
                  <div class="box shadow-sm border rounded bg-white mb-4">
                     <div class="p-4 d-flex align-items-center">
                        <i class="feather-message-circle display-4"></i>
                        <div class="ml-4">
                           <h5 class="font-weight-normal text-dark mb-3 mt-0">Help Forum</h5>
                           <p class="mb-0 text-muted">Find the answer to any question, from the basics all the way to advanced tips and tricks!
                              ...
                           </p>
                        </div>
                     </div>
                     <div class="overflow-hidden border-top d-flex align-items-center p-4">
                        <a class="font-weight-bold d-block" href="#"> Osahanin Help Forum. </a>
                        <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="box shadow-sm border rounded bg-white mb-4">
                     <div class="p-4 d-flex align-items-center">
                        <i class="feather-lock display-4"></i>
                        <div class="ml-4">
                           <h5 class="font-weight-normal text-dark mb-3 mt-0">Safety Center
                           </h5>
                           <p class="mb-0 text-muted">Want to learn more about setting up and managing your team? Look no further!
                              ...
                           </p>
                        </div>
                     </div>
                     <div class="overflow-hidden border-top d-flex align-items-center p-4">
                        <a class="font-weight-bold d-block" href="#"> Osahanin Safety Center. </a>
                        <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Main Content -->
               <div class="col-md-12">
                  <div id="basics">
                     <!-- Title -->
                     <div class="mb-3 mt-0">
                        <h4 class="font-weight-semi-bold">Basics</h4>
                     </div>
                     <!-- End Title -->
                     <!-- Basics Accordion -->
                     <div id="basicsAccordion">
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="basicsHeadingOne">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                 Do you have any built-in caching?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion" style="">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="basicsHeadingTwo">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                 Can I add/upgrade my plan at any time?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="basicsHeadingThree">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                 What access comes with my hosting plan?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="basicsHeadingFour">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                 How do I change my password?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                     </div>
                     <!-- End Basics Accordion -->
                  </div>
                  <div id="syncing">
                     <!-- Title -->
                     <div class="mb-3 mt-4">
                        <h4 class="font-weight-semi-bold">Syncing</h4>
                     </div>
                     <!-- End Title -->
                     <!-- Syncing Accordion -->
                     <div id="syncingAccordion">
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="syncingHeadingOne">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3" data-toggle="collapse" data-target="#syncingCollapseOne" aria-expanded="false" aria-controls="syncingCollapseOne">
                                 How does syncing work?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="syncingCollapseOne" class="collapse show" aria-labelledby="syncingHeadingOne" data-parent="#syncingAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="syncingHeadingTwo">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#syncingCollapseTwo" aria-expanded="false" aria-controls="syncingCollapseTwo">
                                 How do I upload files from my phone or tablet?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="syncingCollapseTwo" class="collapse" aria-labelledby="syncingHeadingTwo" data-parent="#syncingAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="syncingHeadingThree">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#syncingCollapseThree" aria-expanded="false" aria-controls="syncingCollapseThree">
                                 How do I link to a file or folder?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="syncingCollapseThree" class="collapse" aria-labelledby="syncingHeadingThree" data-parent="#syncingAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                     </div>
                     <!-- End Syncing Accordion -->
                  </div>
                  <div id="account">
                     <!-- Title -->
                     <div class="mb-3 mt-4">
                        <h4 class="font-weight-semi-bold">Account</h4>
                     </div>
                     <!-- End Title -->
                     <!-- Account Accordion -->
                     <div id="accountAccordion">
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="accountHeadingOne">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3" data-toggle="collapse" data-target="#accountCollapseOne" aria-expanded="false" aria-controls="accountCollapseOne">
                                 How do I change my password?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="accountCollapseOne" class="collapse show" aria-labelledby="accountHeadingOne" data-parent="#accountAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="accountHeadingTwo">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#accountCollapseTwo" aria-expanded="false" aria-controls="accountCollapseTwo">
                                 How do I delete my account?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo" data-parent="#accountAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="accountHeadingThree">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#accountCollapseThree" aria-expanded="false" aria-controls="accountCollapseThree">
                                 How do I change my account settings?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree" data-parent="#accountAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="accountHeadingFour">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#accountCollapseFour" aria-expanded="false" aria-controls="accountCollapseFour">
                                 I forgot my password. How do I reset it?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour" data-parent="#accountAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                     </div>
                     <!-- End Account Accordion -->
                  </div>
                  <div id="privacy">
                     <!-- Title -->
                     <div class="mb-3 mt-4">
                        <h4 class="font-weight-semi-bold">Privacy</h4>
                     </div>
                     <!-- End Title -->
                     <!-- Privacy Accordion -->
                     <div id="privacyAccordion">
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="privacyHeadingOne">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3" data-toggle="collapse" data-target="#privacyCollapseOne" aria-expanded="false" aria-controls="privacyCollapseOne">
                                 Can I specify my own private key?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="privacyCollapseOne" class="collapse show" aria-labelledby="privacyHeadingOne" data-parent="#privacyAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="privacyHeadingTwo">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#privacyCollapseTwo" aria-expanded="false" aria-controls="privacyCollapseTwo">
                                 My files are missing! How do I get them back?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="privacyCollapseTwo" class="collapse" aria-labelledby="privacyHeadingTwo" data-parent="#privacyAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="privacyHeadingThree">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#privacyCollapseThree" aria-expanded="false" aria-controls="privacyCollapseThree">
                                 How can I access my privacy data?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="privacyCollapseThree" class="collapse" aria-labelledby="privacyHeadingThree" data-parent="#privacyAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="box shadow-sm border rounded bg-white mb-2">
                           <div  id="privacyHeadingFour">
                              <h5 class="mb-0">
                                 <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-toggle="collapse" data-target="#privacyCollapseFour" aria-expanded="false" aria-controls="privacyCollapseFour">
                                 How can I control if other search engines can link to my profile?
                                 <span class="card-btn-arrow">
                                 <span class="feather-chevron-down"></span>
                                 </span>
                                 </button>
                              </h5>
                           </div>
                           <div id="privacyCollapseFour" class="collapse" aria-labelledby="privacyHeadingFour" data-parent="#privacyAccordion">
                              <div class="card-body border-top p-3 text-muted">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- End Card -->
                     </div>
                     <!-- End Privacy Accordion -->
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

   @endsection
