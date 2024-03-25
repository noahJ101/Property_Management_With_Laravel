@extends('layout.app')

@section('content')

<div
class="hero page-inner overlay"
style="background-image: url('images/hero_bg_3.jpg')"
>
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-9 text-center mt-5">
      <h1 class="heading" data-aos="fade-up">
        {{$property->name}}
      </h1>

      <nav
        aria-label="breadcrumb"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <ol class="breadcrumb text-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">
            <a href="properties.html">Properties</a>
          </li>
          <li
            class="breadcrumb-item active text-white-50"
            aria-current="page"
          >
            {{$property->description}}
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
</div>

<div class="section">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7">
      <div class="img-property-slide-wrap">
        <div class="img-property-slide">
          <img src="{{ asset('property/' . $property->image1) }}" alt="Image" class="img-fluid" />
          <img src="{{ asset('property/' . $property->image2) }}" alt="Image" class="img-fluid" />
          <img src="{{ asset('property/' . $property->image3) }}" alt="Image" class="img-fluid" />
          <img src="{{ asset('property/' . $property->image4) }}" alt="Image" class="img-fluid" />
          <img src="{{ asset('property/' . $property->image5) }}" alt="Image" class="img-fluid" />
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <p class="meta">{{$property->created_at}}</p>
      <h2 class="heading text-primary">{{$property->name}}</h2>
      <p class="meta">{{$property->location}}</p>
      <p class="text-black-50">
        {{$property->address}}
      </p>
      <p class="text-black-50">
        {{$property->description}}
      </p>

      <div class="d-block agent-box p-5">
        <div class="img mb-4">
          <img
            src="{{ asset('images/Emmy.jpg') }}"
            alt="Image"
            class="img-fluid"
          />
        </div>
        <div class="text">
          <h3 class="mb-0">Emmanuel Owoh</h3>
          <div class="meta mb-3">Real Estate Agent</div>
          <p>
            Emmanuel Owoh is a seasoned Real Estate Agent with a passion for helping clients find their dream properties. 
            With over a decade of experience in the industry, Emmanuel brings a wealth of knowledge and expertise to every transaction. 
            Known for his exceptional negotiation skills and unwavering commitment to client satisfaction, Emmanuel goes above and beyond to ensure that his clients' needs are met and exceeded.
             Whether you're buying, selling, or investing in real estate, Emmanuel Owoh is dedicated to providing personalized service and expert guidance every step of the way.
          </p>
          <ul class="list-unstyled social dark-hover d-flex">
            <li class="me-1">
              <a href="#"><span class="icon-instagram"></span></a>
            </li>
            <li class="me-1">
              <a href="#"><span class="icon-twitter"></span></a>
            </li>
            <li class="me-1">
              <a href="#"><span class="icon-facebook"></span></a>
            </li>
            <li class="me-1">
              <a href="#"><span class="icon-linkedin"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection