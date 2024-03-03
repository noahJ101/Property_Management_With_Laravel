<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style>

    .center
    {
        margin: auto;
        max-width: 100%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
        overflow-x: auto;
    }

    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size
    {
        width: 150px;
        height: auto;
    }

    .th_color
    {
       background-color: skyblue; 
    }

    .th_deg
    {
        padding: 15px;
    }

   </style>
  </head>
  <body>
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
           
                <h2 class="font_size">All Properties</h2>
                <div class="table-responsive center">
            
                <table class="center">
                    <thead>
                    <tr class="th_color">
                        <th class="th_deg">Property Name</th>
                        <th class="th_deg">Address</th>
                        <th class="th_deg">Location</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Image1</th>
                        <th class="th_deg">Image2</th>
                        <th class="th_deg">Image3</th>
                        <th class="th_deg">Image4</th>
                        <th class="th_deg">Image5</th>
                        <th class="th_deg">Amount</th>
                        <th class="th_deg">Bedroom</th>
                        <th class="th_deg">Bathroom</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($property as $property)
                        
                    
                    <tr>
                        <td>{{$property->name}}</td>
                        <td>{{$property->address}}</td>
                        <td>{{$property->location}}</td>
                        <td>{{$property->description}}</td>
                        <td><img class="img_size" src="/property/{{$property->image1}}"></td>
                        <td><img class="img_size" src="/property/{{$property->image2}}"></td>
                        <td><img class="img_size" src="/property/{{$property->image3}}"></td>
                        <td><img class="img_size" src="/property/{{$property->image4}}"></td>
                        <td><img class="img_size" src="/property/{{$property->image5}}"></td>
                        <td>{{$property->amount}}</td>
                        <td>{{$property->bedrooms}}</td>
                        <td>{{$property->bathrooms}}</td>
                        <td>{{$property->status}}</td>
                        <td><a class="btn btn-danger" onclick="confirmation(event, '{{url('delete_property',$property->id)}}')">Delete</td>
                        <td><a class="btn btn-success"  href="{{url('update_property',$property->id)}}">Edit</td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <script>
        function confirmation(ev, urlToRedirect) {
            ev.preventDefault();
            swal({
                title: "Are you sure to delete this Property??",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
    <!-- End custom js for this page -->

  </body>
</html>