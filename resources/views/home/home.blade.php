@extends('layouts.app')

@section('title') {{ config('app.name', 'Laravel') }} - Home @endsection

@section('content')
<!-- Bnr Header -->
<section class="main-banner">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slider-bg-1.jpg"  alt="slider"  data-bgposition=" center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfl tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-120" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.03" 
                data-endelementdelay="0.4" 
                data-endspeed="300"
                style="z-index: 5; font-size:50px; font-weight:500; color:#fff;  max-width: auto; max-height: auto; white-space: nowrap;">Hello, We are DialMed!!</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-60" 
                data-speed="800" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.03" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:40px; color:#fff; font-weight:500; white-space: nowrap;">We care about your health </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption sfb tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="0" 
                data-speed="800" 
                data-start="1200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7;  font-size:22px; color:#fff; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">Best Hospitality Services in your town</div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme scroll" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="120"
                data-speed="800" 
                data-start="1300"
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 8;"><a href="{{ route('services') }}" class="btn">VIEW SERVICES</a> </div>
          </li>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slider-bg-2.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfl tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="-100" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.03" 
                data-endelementdelay="0.4" 
                data-endspeed="300"
                style="z-index: 5; font-size:40px; font-weight:500; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">Best Services </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="-40" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.03" 
                data-endelementdelay="0.4" 
                data-endspeed="300"
                style="z-index: 5; font-size:55px; font-weight:500; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">Hello, We are DialMed!!</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption sfb tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="30" 
                data-speed="800" 
                data-start="1400" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; font-size:16px; color:#000; font-weight:500; line-height:26px; max-width: auto; max-height: auto; white-space: nowrap;">It has survived not only five centuries, but also the leap into
              electronic <br>
              typesetting, remaining essentially unchanged. </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme scroll" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="140"
                data-speed="800" 
                data-start="1600"
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 8;"><a href="{{ route('contact') }}" class="btn">CONTACT NOW</a> </div>
          </li>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slider-bg-3.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfb tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-80" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 6; font-size:40px; color:#000; font-weight:500; white-space: nowrap;"> Welcome To Our Research Center </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption sfb tp-resizeme text-center" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-10" 
                data-speed="800" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 7; font-size:20px; font-weight:500; line-height:26px; color:#000; max-width: auto; max-height: auto; white-space: nowrap;">We work in a friendly and efficient using the latest <br>
              technologies and sharing our expertise.</div>
          </li>
        </ul>
      </div>
    </div>
  </section>

<!-- Content -->
<div id="content"> 
    
    <!-- Intro -->
    <section class="p-t-b-150">
      <div class="container">
        <div class="intro-main">
          <div class="row"> 
            
            <!-- Intro Detail -->
            <div class="col-md-8">
              <div class="text-sec">
                <h5>Best DialMed Responsive HTML5 Multipurpose Template</h5>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages..</p>
                <ul class="row">
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> EMERGENCY CASE</h6>
                    <p>Excepteur sint occaecat cupidatat non roident, 
                      sunt in culpa qui officia deserunt mollit </p>
                  </li>
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> QUALIFIED DOCTORS</h6>
                    <p>Excepteur sint occaecat cupidatat non roident, 
                      sunt in culpa qui officia deserunt mollit </p>
                  </li>
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> ONLINE APPOINTMENT</h6>
                    <p>Excepteur sint occaecat cupidatat non roident, 
                      sunt in culpa qui officia deserunt mollit </p>
                  </li>
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> FREE DialMed COUNSELING</h6>
                    <p>Excepteur sint occaecat cupidatat non roident, 
                      sunt in culpa qui officia deserunt mollit </p>
                  </li>
                </ul>
              </div>
            </div>
            
            <!-- Intro Timing -->
            <div class="col-md-4">
              <div class="timing"> <i class="lnr lnr-clock"></i>
                <ul>
                  <li> Monday <span>8.00 - 16.00</span></li>
                  <li> Tuesday <span>8.00 - 16.00</span></li>
                  <li> Wednesday <span>8.00 - 16.00</span></li>
                  <li> Thursday <span>8.00 - 16.00</span></li>
                  <li> Friday <span>8.00 - 16.00</span></li>
                  <li> Saturday <span>8.00 - 16.00</span></li>
                  <li> Sunday <span>8.00 - 16.00</span></li>
                </ul>
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
    
    <!-- DOCTOR LIST -->
    <section class="p-t-b-150">
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
    
    <!-- Fun Fact -->
    <section class="fun-fact" data-stellar-background-ratio="0.5">
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
    
    <!-- Departments -->
    <section class="p-t-b-150 padding-bottom-0">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h2>Our Best Departments</h2>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
      </div>
      
      <!-- Department -->
      <div class="department">
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
    
    <!-- Testimonial -->
    <section class="testimonial p-t-b-150">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block margin-bottom-60">
          <h2>What Our Patients Say About Us</h2>
          <hr>
        </div>
        
        <!-- Slider -->
        <div id="testi-slide"> 
          
          <!-- Slide -->
          <div class="slider-sec">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget 
              augue vitae aliquet sollicitudin. </p>
            <div class="avatar-info">
              <div class="icon-avatar"> <img src="images/testi-avatar-1.jpg" alt=""> </div>
              <h6>James T. Morrison</h6>
              <span>Heart Problem</span> </div>
          </div>
          
          <!-- Slider -->
          <div class="slider-sec">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget 
              augue vitae aliquet sollicitudin. </p>
            <div class="avatar-info">
              <div class="icon-avatar"> <img src="images/testi-avatar-1.jpg" alt=""> </div>
              <h6>James T. Morrison</h6>
              <span>Heart Problem</span> </div>
          </div>
          
          <!-- Slider -->
          <div class="slider-sec">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget 
              augue vitae aliquet sollicitudin. </p>
            <div class="avatar-info">
              <div class="icon-avatar"> <img src="images/testi-avatar-1.jpg" alt=""> </div>
              <h6>James T. Morrison</h6>
              <span>Heart Problem</span> </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- News -->
    <section class="p-t-b-150">
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading-block">
          <h2>RECENT BLOG POSTS</h2>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
        
        <!-- Latest News -->
        <div class="news">
          <div class="row"> 
            
            <!-- News Post -->
            <div class="col-md-4"> 
              <!-- Article -->
              <article class="news-post">
                <div class="post-img"> <img class="img-responsive" src="images/new-post-img.jpg" alt="">
                  <div class="date"> 08 MAR </div>
                </div>
                <a href="#." class="tittle">The Hospital Department Patient</a> <span class="by">By RLDWEBSHOP</span>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text occaecat cupidatat non proident.</p>
                
                <!-- Post Info -->
                <div class="post-info"> <span><i class="fa fa-comments-o margin-right-10"></i>97</span> <span><i class="fa fa-eye margin-right-10"></i>563</span> <span><i class="fa fa-tag margin-right-10"></i>DialMed</span> <a href="{{ route('blog.show', ['blog' => 'test-post']) }}">More <i class="fa fa-angle-right margin-left-10"></i></a> </div>
              </article>
            </div>
            
            <!-- News Post -->
            <div class="col-md-4"> 
              <!-- Article -->
              <article class="news-post">
                <div class="post-img"> <img class="img-responsive" src="images/new-post-img-1.jpg" alt="">
                  <div class="date"> 08 MAR </div>
                </div>
                <a href="#." class="tittle">The Department Of Patient</a> <span class="by">By RLDWEBSHOP</span>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text occaecat cupidatat non proident.</p>
                
                <!-- Post Info -->
                <div class="post-info"> <span><i class="fa fa-comments-o margin-right-10"></i>97</span> <span><i class="fa fa-eye margin-right-10"></i>563</span> <span><i class="fa fa-tag margin-right-10"></i>DialMed</span> <a href="{{ route('blog.show', ['blog' => 'test-post']) }}">More <i class="fa fa-angle-right margin-left-10"></i></a> </div>
              </article>
            </div>
            
            <!-- News Post -->
            <div class="col-md-4"> 
              <!-- Article -->
              <article class="news-post">
                <div class="post-img"> <img class="img-responsive" src="images/new-post-img-2.jpg" alt="">
                  <div class="date"> 08 MAR </div>
                </div>
                <a href="#." class="tittle">The Department Of Patient</a> <span class="by">By RLDWEBSHOP</span>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit random text occaecat cupidatat non proident.</p>
                
                <!-- Post Info -->
                <div class="post-info"> <span><i class="fa fa-comments-o margin-right-10"></i>97</span> <span><i class="fa fa-eye margin-right-10"></i>563</span> <span><i class="fa fa-tag margin-right-10"></i>DialMed</span> <a href="{{ route('blog.show', ['blog' => 'test-post']) }}">More <i class="fa fa-angle-right margin-left-10"></i></a> </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection