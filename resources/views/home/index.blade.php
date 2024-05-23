@extends('layout.app')

@section('content')



<div class="hero">
    <div class="hero-slide">
      <div
        class="img overlay"
        style="background-image: url('images/hero_bg_3.jpg')"
      ></div>
      <div
        class="img overlay"
        style="background-image: url('images/hero_bg_2.jpg')"
      ></div>
      <div
        class="img overlay"
        style="background-image: url('images/hero_bg_1.jpg')"
      ></div>
    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center">
          <h1 class="heading" data-aos="fade-up">
            Easiest way to find your dream home
          </h1>
          <form
            action="{{url('search')}}"
            method="GET"
            class="narrow-w form-search d-flex align-items-stretch mb-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
          @csrf
            <input
              type="text"
              name="search"
              class="form-control px-4"
              placeholder="Your State or City. e.g. Lagos, Lekki"
            />
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Popular Properties
          </h2>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p>
            <a
              href="{{url('properties')}}"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >View all properties</a
            >
          </p>
        </div>
      </div>
      <div class="row">

       
            
                
            
        <div class="col-12">
          <div class="property-slider-wrap">
              <div class="property-slider">
                  @foreach ($property as $property)
                  <div class="property-item">
                      <a href="{{url('single_property',$property->id)}}" class="img">
                          <img src="property/{{$property->image1}}" alt="Image" class="img-fluid" />
                      </a>
      
                      <div class="property-content">
                          <span class="d-block mb-2 text-black-50">{{$property->created_at}}</span>
                          <div class="price mb-2">N{{$property->amount}}</div>
                          <span class="d-block mb-2 text-black-50">{{$property->description}}</span>
                          <span class="city d-block mb-3">{{$property->location}}</span>
      
                          <div class="specs d-flex mb-4">
                              <span class="d-block d-flex align-items-center me-3">
                                  <span class="icon-bed me-2"></span>
                                  <span class="caption">{{$property->bedrooms}}</span>
                              </span>
                              <span class="d-block d-flex align-items-center">
                                  <span class="icon-bath me-2"></span>
                                  <span class="caption">{{$property->bathrooms}}</span>
                              </span>
                          </div>
      
                          <a href="{{url('single_property',$property->id)}}" class="btn btn-primary py-2 px-3">See details</a>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>

            <div
              id="property-nav"
              class="controls"
              tabindex="0"
              aria-label="Carousel Navigation"
            >
              <span
                class="prev"
                data-controls="prev"
                aria-controls="property"
                tabindex="-1"
                >Prev</span
              >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Next</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <span class="flaticon-house"></span>
            <h3 class="mb-3">Property Management</h3>
            <p>
              Our property management services are designed to streamline the management of residential and commercial properties, allowing property owners to maximize their investments while minimizing their stress. From tenant management to maintenance and repairs, we handle every aspect of property management with professionalism and efficiency.
            </p>
            <p><a href="{{url('/services')}}" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <span class="flaticon-building"></span>
            <h3 class="mb-3">Facility Maintenance</h3>
            <p>
              Keeping your facilities in top condition is essential for both safety and comfort. Our facility maintenance services cover everything from routine inspections and repairs to emergency response and preventive maintenance. With our team of skilled technicians and contractors, you can trust us to keep your facilities running smoothly.
            </p>
            <p><a href="{{url('/services')}}" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <span class="flaticon-house-3"></span>
            <h3 class="mb-3">Cleaning Services</h3>
            <p>
              Maintaining a clean and sanitary environment is crucial for any home or business. Our cleaning services range from regular janitorial services to specialized cleaning solutions for carpets, upholstery, and more. We use environmentally friendly products and modern techniques to ensure the highest standards of cleanliness.
            </p>
            <p><a href="{{url('/services')}}" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="box-feature">
            <span class="flaticon-house-1"></span>
            <h3 class="mb-3">Landscaping and Gardening</h3>
            <p>
              Enhance the beauty and functionality of your outdoor spaces with our landscaping and gardening services. Whether you need regular lawn maintenance, landscaping design, or garden installation, our team has the expertise and creativity to transform your outdoor areas into stunning landscapes.
            </p>
            <p><a href="{{url('/services')}}" class="learn-more">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section sec-testimonials">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
            Customer Reviews
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
                src="images/face14.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">James Ade</h3>
              <blockquote>
                <p>
                  &ldquo;I've been using INTER-LLECT Facility Management & Homes Ltd for over a year now, and their service has been impeccable. Their team is always prompt, professional, and attentive to all our needs. From maintenance requests to managing our properties, they handle everything with utmost efficiency. I highly recommend their services to anyone looking for reliable property management!&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Realtor</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="images/face25.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Segun Mike </h3>
              <blockquote>
                <p>
                  &ldquo;INTER-LLECT Facility Management & Homes Ltd has been a game-changer for our property management needs. Their attention to detail and proactive approach ensure that our properties are well-maintained and our tenants are happy. The only reason I didn't give them five stars is that there was a slight delay in one of our maintenance requests, but they resolved it quickly once we brought it to their attention. Overall, highly satisfied with their service.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Estate Agent</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="images/face17.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Uche Obi</h3>
              <blockquote>
                <p>
                  &ldquo;Excellent service and highly professional staff! INTER-LLECT Facility Management & Homes Ltd has taken the stress out of managing multiple properties. Their comprehensive approach covers everything from tenant management to regular maintenance, allowing us to focus on other aspects of our business. The team is always responsive and goes above and beyond to meet our expectations. Couldn't ask for a better property management company!&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Software Engineer</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="images/person_4-min.jpg"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Emily</h3>
              <blockquote>
                <p>
                  &ldquo;We have been extremely pleased with the services provided by INTER-LLECT Facility Management & Homes Ltd. Their team is knowledgeable, friendly, and always ready to assist with any issues that arise. They offer a range of services that have made managing our properties much more efficient. While there have been a few minor hiccups along the way, their commitment to resolving issues quickly and effectively has been commendable. Definitely recommend!&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Chef</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Let's find home that's perfect for you
          </h2>
          <p class="text-black-50">
            Finding the perfect home is a journey that combines your unique preferences, lifestyle, and dreams into one special place. Whether you're searching for a cozy apartment, a spacious family house, or a modern condo, the right home should meet your needs and make you feel at ease.

            At INTER-LLECT Facility Management & Homes Ltd, we understand that a home is more than just a property; it's a sanctuary where memories are made. Our dedicated team is committed to helping you navigate the housing market with ease, providing personalized support and expert advice at every step.
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Affordable Homes</h3>
              <p class="text-black-50">
                Affordable homes are essential for creating inclusive and thriving communities. These homes provide quality living spaces at prices accessible to individuals and families with varying income levels. 
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Top Rated Agents</h3>
              <p class="text-black-50">
                Top-rated agents are the cornerstone of a successful real estate experience, bringing unparalleled expertise, dedication, and personalized service to every client interaction.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Legit Properties</h3>
              <p class="text-black-50">
                Legit properties are the foundation of trust and security in the real estate market, ensuring that buyers and investors can proceed with confidence.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row section-counter mt-5">
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">156</span></span
            >
            <span class="caption text-black-50">Numbers of Bought Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">214</span></span
            >
            <span class="caption text-black-50">Numbers of Listed Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">214</span></span
            >
            <span class="caption text-black-50">Number of All Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">31</span></span
            >
            <span class="caption text-black-50">Numbers of Agents</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-4">Comments</h2>

        <form action="{{url('add_comment')}}" method="POST">
            @csrf

            <textarea style="height: 150px; width: 600px;" name="comment" placeholder="Leave a Comment Here" id="" cols="30" rows="10"></textarea>

        <br>

        <input type="submit" class="btn btn-primary" value="Comment">
    </form>
      </div>
      <!-- /.col-lg-7 -->
    </div>

    <div style="padding-left: 20%">

        <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>

    </div>

    @foreach ($comment as $comment)
        
    

    <div>
        <b>{{$comment->name}}</b>
        <p>{{$comment->comment}}</p>

        <a style="color: skyblue" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

        @foreach ($reply as $rep)
            
        @if($rep->comment_id==$comment->id)
        
        <div style="padding-left: 3%; padding-bottom: 10px; padding-bottom: 10px;">

            <b>{{$rep->name}}</b>
            <p>{{$rep->reply}}</p>

            <a style="color: skyblue" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>


        </div>
        @endif
        @endforeach
    </div>
    @endforeach

    <div style="display: none;" class="replyDiv">

        <form action="{{url('add_reply')}}" method="POST">
            @csrf
        <input type="text" id="commentId" name="commentId" hidden="">
        <textarea style="height: 100px; width: 500px; " placeholder="Write a reply here" name="reply" id="" cols="30" rows="10"></textarea>

        <br>

        <button type="submit" class="btn btn-warning">Reply</button>

        <a href="javascript::void(0);" class="btn " onclick="reply_close(this)">Close</a>
   
   
        </form>
    </div>


    <!-- /.row -->
  </div>

  <div class="section section-5 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Agents
          </h2>
          <p class="text-black-50">
            At INTER-LLECT Facility Management & Homes Ltd, our top-rated agents stand out for their proven track record of success, consistently exceeding expectations by securing the best deals and ensuring smooth transactions. Their professional yet approachable manner, combined with a passion for helping clients find their dream homes, makes them invaluable partners in the real estate journey. Whether buying, selling, or managing properties, our top-rated agents are dedicated to providing a seamless, satisfying experience that builds lasting relationships and trust.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="images/user.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Oche John</a></h2>
              <span class="meta d-block mb-3">Real Estate Agent</span>
              <p>
                With over a decade of experience in the real estate industry, Oche John is a top-rated estate agent known for his exceptional customer service and deep knowledge of the local market. His passion for helping clients find their dream homes is evident in his attentive approach and ability to understand each client's unique needs.
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
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="images/person_2-min.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">David Victor</a></h2>
              <span class="meta d-block mb-3">Real Estate Agent</span>
              <p>
                David Victor brings a wealth of experience and a strategic approach to real estate,
                 making him a sought-after estate agent for both buyers and sellers. His background in finance and his keen analytical skills allow him to provide clients with valuable insights into the market, helping them make informed decisions. David's commitment to transparency and honesty has helped him build long-lasting relationships with his clients, who appreciate his straightforward and supportive manner. In his free time, David is an avid runner and enjoys participating in marathons.
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
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="images/person_4-min.jpg"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Oluchi Daniel</a></h2>
              <span class="meta d-block mb-3">Real Estate Agent</span>
              <p>
                Oluchi Daniel's vibrant personality and relentless work ethic have made her a standout estate agent in the industry. With a keen eye for detail and a knack for understanding her clients' preferences, Oluchi excels at matching people with their perfect properties. Her expertise in digital marketing and innovative sales techniques sets her apart, ensuring that her clients' listings receive maximum exposure. 
                Oluchi's dedication to continuous learning and professional development keeps her at the forefront of the market. When she's not working, she loves exploring new cuisines and traveling to new destinations.
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
