@extends('layouts.app')

@section('title') {{ config('app.name', 'Laravel') }} - Blog Post @endsection

@section('content')
  <!-- Bnr Header -->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>WE ARE DialMed</h3>
        <h1>BLOG</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">BLOG</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Blog Posts -->
    <section class="blog blog-single padding-top-80 padding-bottom-80">
      <div class="container">
        <div class="row"> 
          
          <!-- Posts -->
          <div class="col-md-9 padding-right-50">
            <article class="blog-posts"> <img class="img-responsive" src="/images/new-single-1.jpg" alt="" > 
              <!-- Tittle -->
              <h4>Claritas est etiam processus dynamicus</h4>
              <div class="post-info"><span><i class="fa fa-user margin-right-10"></i>Admin</span> <span><i class="fa fa-comments-o margin-right-10"></i>97</span> <span><i class="fa fa-eye margin-right-10"></i>563</span> <span><i class="fa fa-tag margin-right-10"></i>DialMed</span> </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat<br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat</p>
              
              <!-- Images -->
              <ul class="row margin-top-30 margin-bottom-30">
                <li class="col-sm-6"> <img class="img-responsive" src="/images/new-single-2.jpg"> </li>
                <li class="col-sm-6"> <img class="img-responsive" src="/images/new-single-3.jpg"> </li>
              </ul>
              <h4>We Craft Beautiful Website</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat<br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat</p>
              <img class="img-responsive margin-top-30 margin-bottom-30" src="/images/new-single-4.jpg" alt="">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat<br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat</p>
              
              <!-- Bnt Info -->
              <h6>Share</h6>
              <div class="social-icons share"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-google-plus"></i></a> <a href="#."><i class="fa fa-pinterest-p"></i></a> </div>
            </article>
            <div class="comments"> 
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-40 margin-top-80">
                <h4>Comment (37)</h4>
              </div>
              <ul>
                
                <!-- Comments -->
                <li class="margin-bottom-30">
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar"><img class="img-responsive" src="/images/doc-img-1.jpg" alt=""></div>
                    </div>
                    <div class="media-body">
                      <div class="a-com"> <span class="a-name">JAMMIE LANDING </span><span class="date">24.03.2015 at 10:21</span>
                        <p class="margin-top-20">“Quando feugait duo ei, te erant corpora interpretaris eos. Illud accommodare vituperatoribus an mea. Erat mazim animal 
                          at nam, eam te doctus evertitur, sed decore ornatus”</p>
                        <a href="#." class="text-right"> REPLAY </a> </div>
                    </div>
                  </div>
                </li>
                
                <!-- Comments Replay -->
                <li class="com-reply">
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar"><img class="img-responsive" src="/images/doc-img-2.jpg" alt=""></div>
                    </div>
                    <div class="media-body">
                      <div class="a-com"> <span class="a-name">JAMMIE LANDING </span><span class="date">24.03.2015 at 10:21</span>
                        <p class="margin-top-20">“Quando feugait duo ei, te erant corpora interpretaris eos. Illud accommodare vituperatoribus an mea. Erat mazim animal 
                          at nam, eam te doctus evertitur, sed decore ornatus”</p>
                        <a href="#." class="text-right"> REPLAY </a> </div>
                    </div>
                  </div>
                </li>
              </ul>
              
              <!-- Comments Form -->
              <div class="comment-form"> 
                <!-- Main Heading -->
                <div class="heading-side-bar margin-bottom-40 margin-top-50">
                  <h4>REPLY COMMENT</h4>
                </div>
                <form>
                  <ul class="row">
                    <li class="col-sm-4">
                      <label>*NAME
                        <input class="form-control" type="text" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-4">
                      <label>*EMAIL ADDRESS
                        <input class="form-control" type="text" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-4">
                      <label> WEBSITE
                        <input class="form-control" type="text" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label> SUBJECT
                        <input class="form-control" type="text" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <textarea placeholder="YOUR MESSAGE"></textarea>
                    </li>
                    <li class="col-sm-12">
                      <button type="submit" class="btn btn-dark">POST COMMENT </button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
          
          <!-- Side Bars -->
          <div class="col-md-3">
            <div class="side-bar"> 
              
              <!-- Search -->
              <div class="search">
                <div class="form-group">
                  <input id="serch" type="search" class="input font-crimson" placeholder="Search..">
                  <button class="sea-icon"><i class="fa fa-search"></i></button>
                </div>
              </div>
              
              <!-- About Me -->
              <div class="about-me-small text-center margin-top-40"> <img src="/images/depart-doctor-img.jpg" alt="">
                <h6 class="margin-top-20 margin-bottom-1">WHITE SHADOW WALKER</h6>
                <span class="font-12px">Writer/Personal blog</span> </div>
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-20">
                <h4>Latest Articles</h4>
              </div>
              <ul class="latest-post">
                <li>
                  <div class="media">
                    <div class="media-left"> <a href="#."><img src="/images/img-2.jpg" alt=""></a></div>
                    <div class="media-body"> <a href="#.">Glamora Wallcoverings</a>
                      <p class="font-12px font-italic">Webdesign</p>
                    </div>
                  </div>
                </li>
                <!-- Post Small -->
                <li>
                  <div class="media">
                    <div class="media-left"> <a href="#."><img src="/images/img-1.jpg" alt=""></a></div>
                    <div class="media-body"> <a href="#.">Anno 2205 Trailer</a>
                      <p class="font-12px font-italic">Webdesign</p>
                    </div>
                  </div>
                </li>
                <!-- Post Small -->
                <li>
                  <div class="media">
                    <div class="media-left"> <a href="#."><img src="/images/img-3.jpg" alt=""></a></div>
                    <div class="media-body"> <a href="#.">The Lisbon Connection</a>
                      <p class="font-12px font-italic">Webdesign</p>
                    </div>
                  </div>
                </li>
              </ul>
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-20">
                <h4>Categories</h4>
              </div>
              <ul class="cate">
                <li><a href="#.">Business</a></li>
                <li><a href="#."> Health</a></li>
                <li><a href="#."> Motion Graphic</a></li>
                <li><a href="#."> Conecpt Design</a></li>
                <li><a href="#."> Lifestyle</a></li>
              </ul>
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-10">
                <h4>Archies</h4>
              </div>
              <ul class="cate">
                <li><a href="#.">March 2015</a></li>
                <li><a href="#.">Jan 2015</a></li>
                <li><a href="#.">December 2015</a></li>
                <li><a href="#.">November 2015</a></li>
                <li><a href="#.">July 2015</a></li>
              </ul>
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-40">
                <h4>Flickr Photo</h4>
              </div>
              <div class="block block-instagram-widget row">
                <ul>
                  <li> <a href="images/img-9.jpg" data-lighter> <img src="/images/img-9.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="images/img-8.jpg" data-lighter> <img src="/images/img-8.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="images/img-7.jpg" data-lighter> <img src="/images/img-7.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="images/img-6.jpg" data-lighter> <img src="/images/img-6.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="images/img-5.jpg" data-lighter> <img src="/images/img-5.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="images/img-4.jpg" data-lighter> <img src="/images/img-4.jpg" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                </ul>
              </div>
              <div class="clearfix"></div>
              
              <!-- WIDGET BLOCK -->
              <div class="heading-side-bar margin-bottom-30">
                <h4>WIDGET BLOCK</h4>
              </div>
              <div class="widget">
                <h5>Bleecker Street Guilds</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
              <hr>
              <div class="widget">
                <h5>Bleecker Street Guilds</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ut labore et dolore magna aliqua. </p>
              </div>
              
              <!-- Main Heading -->
              <div class="heading-side-bar margin-bottom-40">
                <h4>TAGS CLOUD</h4>
              </div>
              <ul class="tags">
                <li><a href="#.">FASHION</a></li>
                <li><a href="#.">BAGS</a></li>
                <li><a href="#.">TABLET</a></li>
                <li><a href="#.">ELECTRONIC</a></li>
                <li><a href="#.">BEAUTY</a></li>
                <li><a href="#.">TRtENDING</a></li>
                <li><a href="#.">SHOES</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection