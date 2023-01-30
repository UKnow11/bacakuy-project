@extends ('layouts.master')

@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Membership</h2>
            <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Membership</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <h3>1 Month</h3>
              <h4><sup>Rp</sup>15.000<span> / month</span></h4>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>6 Month</h3>
              <h4><sup>Rp</sup>80.000<span> / 6 month</span></h4>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li id="na"></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="300">
              <span class="advanced">Popular</span>
              <h3>1 Year</h3>
              <h4><sup>Rp</sup>150.000<span> / year</span></h4>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    

  </main><!-- End #main -->
  @endsection
