@extends('layout.app')

@section('content')

<div
class="hero page-inner overlay"
style="background-image: url('images/hero_bg_1.jpg')"
>
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-9 text-center mt-5">
      <h1 class="heading" data-aos="fade-up">Properties</h1>

      <nav
        aria-label="breadcrumb"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <ol class="breadcrumb text-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li
            class="breadcrumb-item active text-white-50"
            aria-current="page"
          >
            Properties
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
</div>

<div class="section">
<div class="container">
  <div class="row mb-5 align-items-center">
    <div class="col-lg-6 text-center mx-auto">
      <h2 class="font-weight-bold text-primary heading">
        Featured Properties
      </h2>
    </div>
  </div>
  <div class="row">
    @foreach($property as $properties)
    <div class="col-md-4">
      
       
          <div class="property-item">
            <a href="property-single.html" class="img">
              <img src="property/{{$properties->image1}}" alt="Image" class="img-fluid" />
            </a>

            <div class="property-content">
              <span class="d-block mb-2 text-black-50"
                  >{{$properties->created_at}}</span
                >
              <div class="price mb-2"><span>N{{$properties->amount}}</span></div>
              <div>
                <span class="d-block mb-2 text-black-50"
                  >{{$properties->address}}</span
                >
                <span class="city d-block mb-3">{{$properties->location}}</span>

                <div class="specs d-flex mb-4">
                  <span class="d-block d-flex align-items-center me-3">
                    <span class="icon-bed me-2"></span>
                    <span class="caption">{{$properties->bedrooms}}</span>
                  </span>
                  <span class="d-block d-flex align-items-center">
                    <span class="icon-bath me-2"></span>
                    <span class="caption">{{$properties->bathrooms}}</span>
                  </span>
                </div>

                <a
                  href="{{url('single_property',$properties->id)}}"
                  class="btn btn-primary py-2 px-3"
                  >See details</a
                >
                
              </div>
              
            </div>
            
          </div>

    </div>
    @endforeach
          
          <!-- .item -->

         
    
      <!-- .item -->
    </div>
  </div>
  <div class="row align-items-center py-5">
   
    <div class="col-lg-6 text-center">
      <div class="custom-pagination">
       
        {{ $property->links() }}
        
      </div>
    </div>
  </div>
</div>


@endsection