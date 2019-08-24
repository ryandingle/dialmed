@extends('layouts.app')

@section('title') {{ config('app.name', 'Laravel') }} - Blog @endsection

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

<!-- News -->
    <section class="p-t-b-150">
        <div class="container"> 
        
        <!-- Latest News -->
        <div class="news">
            <div class="row"> 
            
            <!-- News Post -->
            <div class="col-md-4"> 
                <!-- Article -->
                <article class="news-post">
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img.jpg" alt="">
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
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img-1.jpg" alt="">
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
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img-2.jpg" alt="">
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
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img-3.jpg" alt="">
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
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img-4.jpg" alt="">
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
                <div class="post-img"> <img class="img-responsive" src="/images/new-post-img-5.jpg" alt="">
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