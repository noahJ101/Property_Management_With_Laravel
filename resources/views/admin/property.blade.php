<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style>
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }

    .font_size
    {
      font-size: 40px;
        padding-bottom: 40px;
    }
    label
    {
       display: inline-block;
       width: 200px; 
    }

    .div_design
    {
        padding-bottom: 15px;
    }

   </style>
  </head>
  <body>

    @include('sweetalert::alert')

    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
            <div class="d-flex align-items-center justify-content-between">
              
               
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="div_center">
                    <h1 class="font_size">Add Property</h1>
                    <form action="{{url('add_property')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="div_design">
                    <label for="">Property Name :</label>
                    <input class="text_color" type="text" name="name" placeholder="Write Property Name" required="">
                    </div>

                    <div  class="div_design">
                        <label for="">Property Address :</label>
                        <input class="text_color" type="text" name="address" placeholder="Write Property Address" required="">
                        </div>

                        <div class="div_design">
                            <label for="">Property Location :</label>
                            <select class="text_color" name="location" id="" required="">
                                <option value="" selected="">Add a Location Here</option>
                                @foreach($location as $location)
                                <option value="{{$location->location_name}}">{{$location->location_name}}</option>

                                @endforeach
                            </select>
                            </div>

                            <div class="div_design">
                                <label for="">Property Description :</label>
                                <input class="text_color" type="text" name="description" placeholder="Write Property Description" required="">
                                </div>

                                
                                                    <div class="div_design">
                                                        <label for="">Property Amount :</label>
                                                        <input type="number" name="amount" placeholder="Write Property Amount" required="">
                                                        </div>

                                                        <div class="div_design">
                                                            <label for="">Property Bedrooms :</label>
                                                            <input type="text" name="bedrooms" placeholder="Write Number of Bedroom" required="">
                                                            </div>

                                                            <div class="div_design">
                                                                <label for="">Property Bathrooms :</label>
                                                                <input type="text" name="bathrooms" placeholder="Write Number of Bathrooms" required="">
                                                                </div>

                                                                <div class="div_design">
                                                                    <label for="">Property Status</label>
                                                                    <input type="text" name="status" placeholder="Write Property Availbility" required="">
                                                                    </div>

                                                                    <div class="div_design">
                                                                        <label for="">Property Image 1 :</label>
                                                                        <input type="file" name="image1" required="">
                                                                        </div>
                                    
                                    
                                                                        <div class="div_design">
                                                                            <label for="">Property Image 2 :</label>
                                                                            <input type="file" name="image2" required="">
                                                                            </div>
                                    
                                                                            <div class="div_design">
                                                                                <label for="">Property Image 3 :</label>
                                                                                <input type="file" name="image3" required="">
                                                                                </div>
                                    
                                                                                <div class="div_design">
                                                                                    <label for="">Property Image 4 :</label>
                                                                                    <input type="file" name="image4" required="" >
                                                                                    </div>
                                    
                                                                                    <div class="div_design">
                                                                                        <label for="">Property Image 5 :</label>
                                                                                        <input type="file" name="image5" required="">
                                                                                        </div>
                                    

                                                                    <div class="div_design">

                                                                        <input type="submit" value="Add Property"  class="btn btn-primary">

                                                                    </div>

                    </form>

                </div>

            
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

  </body>

  <script>
    // Format amount input with commas as thousands separators
    document.getElementById('amount').addEventListener('input', function(event) {
        let value = event.target.value.replace(/,/g, ''); // Remove existing commas
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ','); // Add commas for thousands separators
        event.target.value = value;
    });

    // No need to format bedrooms and bathrooms since they can have mixed number and string format
</script>
</html>