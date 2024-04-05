@extends('layout.app')

@section('content')
<div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Services</h1>

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
                  Services
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature mb-4">
              <span class="flaticon-house mb-4 d-block"></span>
              <h3 class="text-black mb-3 font-weight-bold">
                Property Management
              </h3>
              <p class="text-black-50">
                Our property management services are designed to streamline the management of residential and commercial properties, allowing property owners to maximize their investments while minimizing their stress. From tenant management to maintenance and repairs, we handle every aspect of property management with professionalism and efficiency.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature mb-4">
              <span class="flaticon-house-2 mb-4 d-block-3"></span>
              <h3 class="text-black mb-3 font-weight-bold">Facility Maintenance</h3>
              <p class="text-black-50">
               Keeping your facilities in top condition is essential for both safety and comfort. Our facility maintenance services cover everything from routine inspections and repairs to emergency response and preventive maintenance. With our team of skilled technicians and contractors, you can trust us to keep your facilities running smoothly.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature mb-4">
              <span class="flaticon-building mb-4 d-block"></span>
              <h3 class="text-black mb-3 font-weight-bold">
                Cleaning Services
              </h3>
              <p class="text-black-50">
                Maintaining a clean and sanitary environment is crucial for any home or business. Our cleaning services range from regular janitorial services to specialized cleaning solutions for carpets, upholstery, and more. We use environmentally friendly products and modern techniques to ensure the highest standards of cleanliness.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature mb-4">
              <span class="flaticon-house-3 mb-4 d-block-1"></span>
              <h3 class="text-black mb-3 font-weight-bold">Landscaping and Gardening</h3>
              <p class="text-black-50">
                Enhance the beauty and functionality of your outdoor spaces with our landscaping and gardening services. Whether you need regular lawn maintenance, landscaping design, or garden installation, our team has the expertise and creativity to transform your outdoor areas into stunning landscapes.
              </p>
              
            </div>
          </div>

          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature mb-4">
              <span class="flaticon-house-4 mb-4 d-block"></span>
              <h3 class="text-black mb-3 font-weight-bold">
                Security Solutions
              </h3>
              <p class="text-black-50">
                Safety and security are paramount, whether it's your home or your workplace. Our security solutions include surveillance systems, access control, alarm systems, and security patrols to protect your property and give you peace of mind.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature mb-4">
              <span class="flaticon-building mb-4 d-block-3"></span>
              <h3 class="text-black mb-3 font-weight-bold">Renovation and Remodeling</h3>
              <p class="text-black-50">
                Looking to upgrade or renovate your property? Our renovation and remodeling services cover everything from minor repairs to major renovations. We work closely with you to understand your vision and bring it to life with quality craftsmanship and attention to detail.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature mb-4">
              <span class="flaticon-house mb-4 d-block"></span>
              <h3 class="text-black mb-3 font-weight-bold">
                Real Estate Services
              </h3>
              <p class="text-black-50">
                In addition to our property management and maintenance services, we also offer real estate services to help you buy, sell, or rent properties. Our experienced agents provide personalized assistance and guidance to navigate the real estate market with confidence.
              </p>
              
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature mb-4">
              <span class="flaticon-house-1 mb-4 d-block-1"></span>
              <h3 class="text-black mb-3 font-weight-bold">Get in Touch</h3>
              <p class="text-black-50">
                Ready to experience the difference with INTER-LLECT FACILITY MANAGEMENT & HOMES LTD? Contact us today to learn more about our services and how we can help you achieve your goals. We look forward to serving you!
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    

    @endsection
