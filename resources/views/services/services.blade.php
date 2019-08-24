@extends('layouts.app')

@section('title') {{ config('app.name', 'Laravel') }} - Services @endsection

@section('content')
  <!-- Bnr Header -->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>WE ARE DialMed</h3>
        <h1>OUR BEST SERVICES</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Services</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- DOCTOR LIST -->
    <section class="p-t-b-150 padding-bottom-100">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h2>Our Services</h2>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
        
        <!-- Services -->
        <div class="services">
          <div class="row"> 
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-eye-2 icon"></i> </div>
                <div class="media-body">
                  <h6>Eye Specialist</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-operating-room icon"></i> </div>
                <div class="media-body">
                  <h6>Operation Theater</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-icu-monitor icon"></i> </div>
                <div class="media-body">
                  <h6>ICU Department</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-doctor icon"></i> </div>
                <div class="media-body">
                  <h6>Qualified Doctors</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-heartbeat icon"></i> </div>
                <div class="media-body">
                  <h6>Heart Problems</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
              <article>
                <div class="media-left"> <i class="flaticon-stomach-2 icon"></i> </div>
                <div class="media-body">
                  <h6>Stomach Problems</h6>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Departments -->
    <section>
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h2>Our Best Departments</h2>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
      </div>
      
      <!-- Department -->
      <div class="department style-2 padding-bottom-0">
        <div class="container"> 
          <!-- Tab Panel -->
          <div role="tabpanel">
            <div class="dep-sec-nav"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#dental" role="tab" data-toggle="tab">Dental</a></li>
                <li role="presentation" class="active"><a href="#cardiology" role="tab" data-toggle="tab">Cardiology </a></li>
                <li role="presentation"><a href="#for-disabled" role="tab" data-toggle="tab">For disabled </a></li>
                <li role="presentation"><a href="#ophthalmology" role="tab" data-toggle="tab">Ophthalmology </a></li>
                <li role="presentation"><a href="#emergency" role="tab" data-toggle="tab"> Emergency </a></li>
              </ul>
            </div>
            
            <!-- Tab Content -->
            <div class="tab-content"> 
              
              <!-- Dental Depatment -->
              <div role="tabpanel" class="tab-pane fade" id="dental"> 
                <!-- Depatment Text Section -->
                <div class="dep-sec-txt">
                  <div class="row">
                    <div class="col-md-7">
                      <h5>Our Best <span>Dental</span> Services</h5>
                      <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s PageMaker </p>
                      
                      <!-- List Style Check -->
                      <ul class="list-style-check">
                        <li> Qualified Staff of Doctors </li>
                        <li> Feel like you are at Home Services </li>
                        <li> 24x7 Emergency Services </li>
                        <li> Save your Money and Time with us </li>
                        <li> Medicine Research </li>
                        <li> Blood Bank </li>
                      </ul>
                    </div>
                    
                    <!-- Doctor Img -->
                    <div class="col-md-offset-1 col-md-4">
                      <div class="doctor-img"> <img class="img-responsive" src="images/depart-doctor-img.jpg" alt="" >
                        <div class="name-doc">
                          <h6>RYAN DINGLE <span>Cardiology Specialists</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Cardiology Depatment -->
              <div role="tabpanel" class="tab-pane fade in active" id="cardiology"> 
                <!-- Depatment Text Section -->
                <div class="dep-sec-txt">
                  <div class="row">
                    <div class="col-md-7">
                      <h5>Our Best <span>CARDIOLOGY</span> Services</h5>
                      <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s PageMaker including versions of Lorem Ipsum. </p>
                      
                      <!-- List Style Check -->
                      <ul class="list-style-check">
                        <li> Qualified Staff of Doctors </li>
                        <li> Feel like you are at Home Services </li>
                        <li> 24x7 Emergency Services </li>
                        <li> Save your Money and Time with us </li>
                        <li> Medicine Research </li>
                        <li> Blood Bank </li>
                      </ul>
                    </div>
                    
                    <!-- Doctor Img -->
                    <div class="col-md-offset-1 col-md-4">
                      <div class="doctor-img"> <img class="img-responsive" src="images/depart-doctor-img.jpg" alt="" >
                        <div class="name-doc">
                          <h6>RYAN DINGLE <span>Cardiology Specialists</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- For disabled -->
              <div role="tabpanel" class="tab-pane fade" id="for-disabled"> 
                <!-- Depatment Text Section -->
                <div class="dep-sec-txt">
                  <div class="row">
                    <div class="col-md-7">
                      <h5>Our Best Services <span>For Disabled</span> Persons </h5>
                      <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s PageMaker including versions of Lorem Ipsum. </p>
                      
                      <!-- List Style Check -->
                      <ul class="list-style-check">
                        <li> Qualified Staff of Doctors </li>
                        <li> Feel like you are at Home Services </li>
                        <li> 24x7 Emergency Services </li>
                        <li> Save your Money and Time with us </li>
                        <li> Medicine Research </li>
                        <li> Blood Bank </li>
                      </ul>
                    </div>
                    
                    <!-- Doctor Img -->
                    <div class="col-md-offset-1 col-md-4">
                      <div class="doctor-img"> <img class="img-responsive" src="images/depart-doctor-img.jpg" alt="" >
                        <div class="name-doc">
                          <h6>RYAN DINGLE <span>Cardiology Specialists</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Ophthalmology -->
              <div role="tabpanel" class="tab-pane fade" id="ophthalmology"> 
                <!-- Depatment Text Section -->
                <div class="dep-sec-txt">
                  <div class="row">
                    <div class="col-md-7">
                      <h5>Our Best <span>Ophthalmology</span> Services</h5>
                      <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s PageMaker including versions of Lorem Ipsum. </p>
                      
                      <!-- List Style Check -->
                      <ul class="list-style-check">
                        <li> Qualified Staff of Doctors </li>
                        <li> Feel like you are at Home Services </li>
                        <li> 24x7 Emergency Services </li>
                        <li> Save your Money and Time with us </li>
                        <li> Medicine Research </li>
                        <li> Blood Bank </li>
                      </ul>
                    </div>
                    
                    <!-- Doctor Img -->
                    <div class="col-md-offset-1 col-md-4">
                      <div class="doctor-img"> <img class="img-responsive" src="images/depart-doctor-img.jpg" alt="" >
                        <div class="name-doc">
                          <h6>RYAN DINGLE <span>Ophthalmology Specialists</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- emergency -->
              <div role="tabpanel" class="tab-pane fade" id="emergency"> 
                <!-- Depatment Text Section -->
                <div class="dep-sec-txt">
                  <div class="row">
                    <div class="col-md-7">
                      <h5>Our Best <span>Emergency</span> Services</h5>
                      <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s PageMaker including versions of Lorem Ipsum. </p>
                      
                      <!-- List Style Check -->
                      <ul class="list-style-check">
                        <li> Qualified Staff of Doctors </li>
                        <li> Feel like you are at Home Services </li>
                        <li> 24x7 Emergency Services </li>
                        <li> Save your Money and Time with us </li>
                        <li> Medicine Research </li>
                        <li> Blood Bank </li>
                      </ul>
                    </div>
                    
                    <!-- Doctor Img -->
                    <div class="col-md-offset-1 col-md-4">
                      <div class="doctor-img"> <img class="img-responsive" src="images/depart-doctor-img.jpg" alt="" >
                        <div class="name-doc">
                          <h6>RYAN DINGLE <span>Emergency Specialists</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- DOCTOR LIST -->
    <section class="young-doc-team p-t-b-150 padding-bottom-0">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h2>We are Team of Young Professionals Passionate in our Work</h2>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
        
        <!-- Soctor List Slider -->
        <div class="doct-list">
          <div class="item"> <a href="#pop-open" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-1.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open-1" class="link popup-vedio video-btn"> <img class="img-responsive" src="images/doc-img-2.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-3.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open-1" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-4.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-5.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open-1" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-6.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-2.jpg" alt="" ></a> </div>
          <div class="item"> <a href="#pop-open-1" class="link popup-vedio video-btn"><img class="img-responsive" src="images/doc-img-3.jpg" alt="" ></a> </div>
        </div>
      </div>
      
      <!-- POPUP DOCTOR -->
      <div id="pop-open" class="zoom-anim-dialog mfp-hide pop-open-style">
        <div class="pop_up row"> 
          <!-- Doctor Image -->
          <div class="col-sm-6 no-padding-left"> <img class="img-responsive" src="images/doctor-1-1.jpg" alt="" > </div>
          <div class="col-sm-6">
            <div class="doctor-in">
              <h5>Lynn Lambert</h5>
              <span>Cardiology</span> 
              <!-- Personal Info -->
              <div class="personal-info">
                <ul class="row">
                  <li class="col-sm-4"><strong>Education </strong></li>
                  <li class="col-sm-8"> MD, OB/GYN </li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Experience </strong></li>
                  <li class="col-sm-8">2 years</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Office </strong></li>
                  <li class="col-sm-8">Office 12b, Hall A</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Work days </strong></li>
                  <li class="col-sm-8">Monday, Friday, Sunday</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Email </strong></li>
                  <li class="col-sm-8">rldwebshop@dialmed.com</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Trainning </strong></li>
                  <li class="col-sm-8">Nam liber tempor cum soluta nobis eleif end option congue nihil impedo mingid quod mazim placerat facer <br>
                  </li>
                </ul>
                
                <!-- Social Icon -->
                <ul class="row margin-top-20" >
                  <li class="col-sm-4 margin-top-10"><strong>Social info </strong></li>
                  <li class="col-sm-8"> 
                    <!-- Social Icons -->
                    <ul class="social_icons">
                      <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                      <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                      <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                      <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
                      <li class="skype"><a href="#."><i class="fa fa-skype"></i> </a></li>
                    </ul>
                  </li>
                </ul>
                
                <!-- View Table --> 
                <a href="#." class="btn">Make an Appointment</a> </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- POPUP DOCTOR -->
      <div id="pop-open-1" class="zoom-anim-dialog mfp-hide pop-open-style">
        <div class="pop_up row"> 
          <!-- Doctor Image -->
          <div class="col-sm-6 no-padding-left"> <img class="img-responsive" src="images/doctor-2-2.jpg" alt="" > </div>
          <div class="col-sm-6">
            <div class="doctor-in">
              <h5>Lynn Lambert</h5>
              <span>Cardiology</span> 
              <!-- Personal Info -->
              <div class="personal-info">
                <ul class="row">
                  <li class="col-sm-4"><strong>Education </strong></li>
                  <li class="col-sm-8"> MD, OB/GYN </li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Experience </strong></li>
                  <li class="col-sm-8">2 years</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Office </strong></li>
                  <li class="col-sm-8">Office 12b, Hall A</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Work days </strong></li>
                  <li class="col-sm-8">Monday, Friday, Sunday</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Email </strong></li>
                  <li class="col-sm-8">rldwebshop@dialmed.com</li>
                </ul>
                <ul class="row">
                  <li class="col-sm-4"><strong>Trainning </strong></li>
                  <li class="col-sm-8">Nam liber tempor cum soluta nobis eleif end option congue nihil impedo mingid quod mazim placerat facer <br>
                  </li>
                </ul>
                
                <!-- Social Icon -->
                <ul class="row margin-top-20" >
                  <li class="col-sm-4 margin-top-10"><strong>Social info </strong></li>
                  <li class="col-sm-8"> 
                    <!-- Social Icons -->
                    <ul class="social_icons">
                      <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                      <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                      <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                      <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
                      <li class="skype"><a href="#."><i class="fa fa-skype"></i> </a></li>
                    </ul>
                  </li>
                </ul>
                
                <!-- View Table --> 
                <a href="#." class="btn">Make an Appointment</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Fun Fact -->
    <section class="fun-fact margin-top-100" data-stellar-background-ratio="0.5">
      <div class="container"> 
        
        <!-- Counter -->
        <div class="counters nolist-style">
          <ul class="row">
            
            <!-- Satisfied Clients -->
            <li class="col-sm-3"> 
              
              <!-- icon -->
              <div class="media-left"> <i class="fa fa-smile-o"> </i> </div>
              <div class="media-body"> <span class="counter" >9501</span>
                <p>DISCHARGED</p>
              </div>
            </li>
            
            <!-- PROPOSALS SENT -->
            <li class="col-sm-3">
              <div class="media-left"> <i class="fa fa-bed"> </i> </div>
              <div class="media-body"> <span class="counter">1876</span>
                <p>BEDS</p>
              </div>
            </li>
            
            <!-- AWARDS WON -->
            <li class="col-sm-3">
              <div class="media-left"> <i class="fa fa-user-md"> </i> </div>
              <div class="media-body"> <span class="counter">67</span>
                <p>DOCTORS</p>
              </div>
            </li>
            <li class="col-sm-3">
              <div class="media-left"> <i class="fa fa-ambulance"> </i> </div>
              <div class="media-body"> <span>24/7</span>
                <p>services available</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
@endsection