@extends('fronts.fronts_layout.layout')
@section('content')
@include('fronts.fronts_layout.navbar')
{{-- ===================================================Open //Liberty NFT Market --}}
  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>

                @foreach ($home->where('id', 11) as $h)
                {{ $h->label }}
            @endforeach

            </h6>
            <h2>  @foreach ($home->where('id', 11) as $h)
                {{ $h->title }}
            @endforeach</h2>
            <p>  @foreach ($home->where('id', 11) as $h)
                {{ $h->desriptions }}
            @endforeach</p>
            <div class="buttons">
              <div class="border-button">
                <a href="explore">Explore Top NFTs</a>
              </div>
              <div class="main-button">
                <a href="https://youtube.com/templatemo" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/banner-01.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner-02.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  {{-- ==================================End // Liberty NFT Market --}}


{{-- =============================== Open // Browse Through Our Categories Here. --}}
  <div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>
                    Browse Through Our <em>Categories </em>Here.
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-01.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 21) as $h)
                        {{ $h->title }}
                    @endforeach</h2></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-02.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 22) as $h)
                    {{ $h->title }}
                @endforeach</h2></h4></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-03.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 23) as $h)
                    {{ $h->title }}
                @endforeach</h2></h4></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-04.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 24) as $h)
                    {{ $h->title }}
                      @endforeach</h2></h4></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-05.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 25) as $h)
                    {{ $h->title }}
                @endforeach</h2></h4></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-06.png" alt="">
                  </div>
                  <h4>@foreach ($home->where('id', 26) as $h)
                    {{ $h->title }}
                @endforeach</h2></h4></h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

{{-- =============================== End // Browse Through Our Categories Here. --}}


{{--===============Open //Explore Some Hot Collections In Market. --}}
        <div class="col-lg-12">
          <div class="collections">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Explore Some Hot <em>Collections</em> In Market.</h2>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="owl-collection owl-carousel">
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>
                        @foreach ($h_ex->where('id', 99) as $h_ex)
                      {{ $h_ex->title }}
                          @endforeach
                      </h4>
                      <span class="collection">Items In Collection:<br><strong>310/340</strong></span>
                      <span class="category">Category:<br><strong>Digital Crypto</strong></span>
                      <div class="main-button">
                        <a href="explore">Explore Mutant</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Bored Ape Kennel Club</h4>
                      <span class="collection">Items In Collection:<br><strong>324/324</strong></span>
                      <span class="category">Category:<br><strong>Visual Art</strong></span>
                      <div class="main-button">
                        <a href="explore">Explore Bored Ape</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Genesis Collective Statue</h4>
                      <span class="collection">Items In Collection:<br><strong>380/394</strong></span>
                      <span class="category">Category:<br><strong>Music Art</strong></span>
                      <div class="main-button">
                        <a href="explore">Explore Genesis</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Worldwide Artwork Ground</h4>
                      <span class="collection">Items In Collection:<br><strong>426/468</strong></span>
                      <span class="category">Category:<br><strong>Blockchain</strong></span>
                      <div class="main-button">
                        <a href="explore">Explore Worldwide</a>
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
  </div>

{{--===============End //Explore Some Hot Collections In Market. --}}

{{-- ===================Open //Create Your NFT & Put It On The Market. --}}
<div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>
                @foreach ($home->where('id', 41) as $h)
                {{ $h->label }}
                 @endforeach

            </h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>
                @foreach ($home->where('id', 41) as $h)
                {{ $h->title }}
                 @endforeach
            </h4>
            <p>
                 @foreach ($home->where('id', 41) as $h)
                   {{ $h->desriptions }}
                 @endforeach

              </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>   @foreach ($home->where('id', 42) as $h)
                    {{ $h->title }}
                  @endforeach
            </h4>
            <p>   @foreach ($home->where('id', 42) as $h)
                    {{ $h->desriptions }}
                 @endforeach</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>   @foreach ($home->where('id', 43) as $h)
                  {{ $h->title }}
                   @endforeach
            </h4>
            <p>
                 @foreach ($home->where('id', 43) as $h)
                {{ $h->desriptions }}
                 @endforeach</p>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- ===================Close //Create Your NFT & Put It On The Market. --}}


{{-- ===================Open  //Items</em> Currently In The Market. --}}


  <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Items</li>
              <li data-filter=".msc">Music Art</li>
              <li data-filter=".dig">Digital Art</li>
              <li data-filter=".blc">Blockchain</li>
              <li data-filter=".vtr">Virtual</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Music Art Super Item</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($8,240.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Digital Crypto Artwork</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($7,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Blockchain Item One</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>($6,600.00)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vtr">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Virtual Currency Art</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,800.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vrt dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Digital Art Item</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>($8,400.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all msc blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Blockchain Music Design</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


{{-- ===================Close //Items</em> Currently In The Market. --}}


  @include('fronts.fronts_layout.footer')

@endsection

