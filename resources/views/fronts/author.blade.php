@extends('fronts.fronts_layout.layout')
@section('content')
@include('fronts.fronts_layout.navbar')

<div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Author Details</h6>
          <h2>View Details For Author</h2>
          <span>Home > <a href="#">Author</a></span>
          <div class="buttons">
            <div class="main-button">
              <a href="explore">Explore Our Items</a>
            </div>
            <div class="border-button">
              <a href="create">Create Your NFT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="author-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="author">
            <img src="assets/images/single-author.jpg" alt="" style="border-radius: 50%; max-width: 170px;">
            <h4>Melanie Smith <br> <a href="#">@melanie32</a></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-info">
            <div class="row">
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-heart"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-hand"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-dollar"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <h5>559 Followers</h5>
              </div>
              <div class="col-7">
                <div class="main-button">
                  <a href="#">Follow @melanie32</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Melanie Smith’s <em>Items</em>.</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('fronts.fronts_layout.footer')
@endsection
