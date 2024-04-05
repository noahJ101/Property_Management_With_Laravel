@extends('layout.app')

@section('content')

<div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">About</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row text-left mb-5">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
          </div>
          <div class="col-lg-6">
            <p class="text-black-50">
              Welcome to INTER-LLECT FACILITY MANAGEMENT & HOMES LTD, your premier destination for exceptional facility management services and premium real estate solutions. At INTER-LLECT, we pride ourselves on delivering top-notch services to meet all your property management and real estate needs.
            </p>
            <p class="text-black-50">
              <h3 class="heading">Our Mission</h3>
              <br>
              Our mission at INTER-LLECT FACILITY MANAGEMENT & HOMES LTD is to redefine the standards of excellence in the facility management and real estate industry. We are committed to providing our clients with innovative solutions, personalized services, and unmatched expertise to help them achieve their property management goals.
            </p>
            <p class="text-black-50">
              <h3 class="heading">Who We Are</h3>
              <br>
              INTER-LLECT FACILITY MANAGEMENT & HOMES LTD is a leading provider of comprehensive facility management services and premium real estate solutions. With years of experience in the industry, our team consists of highly skilled professionals who are dedicated to delivering superior results and exceeding client expectations.
            </p>
          </div>
          <div class="col-lg-6">
            <p class="text-black-50">
              <h3 class="heading">What We Offer</h3>
              <br>
              At INTER-LLECT FACILITY MANAGEMENT & HOMES LTD, we offer a wide range of services tailored to meet the diverse needs of our clients. From property management and maintenance to real estate brokerage and consulting, we have the expertise and resources to handle all aspects of your property portfolio.
            </p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="{{asset('images/hero_bg_3.jpg')}}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Exceptional Service</h3>
                <p class="text-black-50">
                  We are committed to providing our clients with exceptional service and personalized attention to ensure their complete satisfaction.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Expertise</h3>
                <p class="text-black-50">
                  Our team consists of highly skilled professionals with years of experience in the facility management and real estate industry.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Integrity</h3>
                <p class="text-black-50">
                  We operate with the highest level of integrity and professionalism, earning the trust and confidence of our clients and partners.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
            <img src="{{ asset('images/img_1.jpg') }}" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/img_2.jpg') }}" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('images/img_3.jpg') }}" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="row section-counter mt-5">
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            
          </div>
        </div>
      </div>
    </div>

    <div class="section sec-testimonials bg-light">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
              The Team
            </h2>
          </div>
          <div class="col-md-6 text-md-end">
            <div id="testimonial-nav">
              <span class="prev" data-controls="prev">Prev</span>

              <span class="next" data-controls="next">Next</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
            <div class="item">
              <div class="testimonial">
                <img
                  src="{{ asset('images/Emmy.jpg') }}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">Emmanuel Owoh</h3>
                <p class="text-black-50">Founder</p>

                <p>
                  Emmanuel Owoh is a seasoned Real Estate Agent with a passion for helping clients find their dream properties. With over a decade of experience in the industry, Emmanuel brings a wealth of knowledge and expertise to every transaction. Known for his exceptional negotiation skills and unwavering commitment to client satisfaction, Emmanuel goes above and beyond to ensure that his clients' needs are met and exceeded. Whether you're buying, selling, or investing in real estate, Emmanuel Owoh is dedicated to providing personalized service and expert guidance every step of the way.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="{{ asset('images/stan.jpg') }}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">Aifuwa Stanley</h3>
                <p class="text-black-50">Non-Executive Director</p>

                <p>
                  Aifuwa Stanley brings a wealth of knowledge and experience to his role as a Non-Executive Director at INTER-LLECT FACILITY MANAGEMENT & HOMES LTD. With a diverse background in business management and real estate, Aifuwa is instrumental in providing strategic guidance and valuable insights to the company.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <img
                  src="{{ asset('images/james.jpg') }}"
                  alt="Image"
                  class="img-fluid rounded-circle w-25 mb-4"
                />
                <h3 class="h5 text-primary">Noah James</h3>
                <p class="text-black-50">Chief Technology Officer (CTO)</p>

                <p>
                  Noah James serves as the Chief Technology Officer (CTO) at INTER-LLECT FACILITY MANAGEMENT & HOMES LTD, leading the company's technological innovation and digital transformation initiatives. Noah James brings a wealth of experience in the technology sector, with a strong background in software development, IT infrastructure management, and digital strategy. With a proven track record in technology leadership and a passion for leveraging cutting-edge solutions, Noah plays a pivotal role in driving the company's digital strategy forward.
                </p>

                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                </ul>
              </div>
            </div>

           
          </div>
        </div>
      </div>
    </div>

   

@endsection