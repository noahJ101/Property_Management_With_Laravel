<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   @include('admin.css')
   <style>
    .div_center
    {
       text-align: center;
       padding-top: 40px; 
    }

    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .center
    {
      margin: auto;
      width: 50%;
      text-align: center;  
      margin-top: 30px;
      border: 3px solid blue;
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

                    @if(session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}

                    </div>
                    @endif
                    <h2 class="h2_font">Add Location</h2>

                    <form action="{{url('add_location')}}" method="POST">

                        @csrf
                        <input type="text" name="location" placeholder="Write Location Name">
                        
                        <input type="submit" class="btn btn-primary" name="submit"
                        value="Add Location">
                    </form>

                    <table class="center">
                        <tr>
                            <td> Location Name </td>
                            <td>Action</td>
                            
                        </tr>
                        @foreach ($data as $data)
                            
                        
                        <tr>
                            <td>{{$data->location_name}}</td>
                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event, '{{url('delete_location',$data->id)}}')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

    // Write function for the script confirmation Event
    <script>
        function confirmation(ev, urlToRedirect) {
            ev.preventDefault();
            swal({
                title: "Are you sure to delete this Location?",
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
    
  </body>
</html>