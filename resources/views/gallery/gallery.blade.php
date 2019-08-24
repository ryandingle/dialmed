@extends('layouts.app')

@section('title') {{ config('app.name', 'Laravel') }} - Gallery @endsection

@section('content')
<!-- Bnr Header -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>WE ARE DialMed</h3>
        <h1>GALLERY</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">GALLERY</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- PORTFOLIO -->
    <section class="portfolio port-wrap p-t-b-150"> 
      <!-- Work Filter -->
      <ul class="portfolio-filter text-center margin-bottom-50">
        <li><a class="active" href="#." data-filter="*">AlL </a></li>
        <li><a href="#." data-filter=".doc">Doctors </a></li>
        <li><a href="#." data-filter=".treat">Treatment </a></li>
        <li><a href="#." data-filter=".pait">OuR patient </a></li>
        <li><a href="#." data-filter=".sur">Surgery </a></li>
        <li><a href="#." data-filter=".lab">Laboratory </a></li>
        <li><a href="#." data-filter=".event">Events</a></li>
      </ul>
      
      <!-- PORTFOLIO ITEMS -->
      <div class="container">
        <div class="items item-space row col-3 popup-gallery"> 
          
          <!-- ITEM -->
          <article class="portfolio-item treat lab event">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-1.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-1.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item doc treat  lab event">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-2.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-2.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item doc treat pait sur lab ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-3.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-3.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item  pait pait lab event">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-4.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-4.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item treat pait pait sur ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-5.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-5.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item doc pait sur ">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-6.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-6.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item doc pait pait  event">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-7.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-7.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item pait pait sur lab">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-8.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-8.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
          
          <!-- ITEM -->
          <article class="portfolio-item doc treat sur lab">
            <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/img-9.jpg">
              <div class="portfolio-overlay">
                <div class="detail-info">
                  <div class="position-center-center">
                    <h3>RESEARCH CENTER</h3>
                    <hr class="balck">
                    <span>DialMed, Teacher</span> <a href="images/img-9.jpg" title="RESEARCH CENTER"><i class="fa fa-search"></i></a> </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>
@endsection