
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      lable{
        display:inline-block;
        width:200px;
      }
    </style>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
          
        <div class="container"align="center"style="padding-top:100px;">
        @if (session()->has('massage'))

          <div class="alert alert-success">
          <button type="button"class="close"data-dismiss="alert">
          x
          </button>
          {{session()->get('massage')}}

          </div>
          @endif
          <form method="POST"action="{{url('upload_doctor')}}"enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <lable>Doctor's Name</lable>
              <input type="text"name="name"placeholder="Enter name"style="color:black;"required=""></input>
            </div>
            <div style="padding:15px">
              <lable>phone</lable>
              <input type="number"name="number"placeholder="Enter phone number"style="color:black;"required=""></input>
            </div>
            <div style="padding:15px">
              <lable> speciality</lable>
              <select name="speciality" style="color:black;"width="200px" required="">
              <option value="">--select--</option>
                <option value="skin">skin</option>
                <option value="heart">heart</option>
                <option value="eye">eye</option>
                <option value="nose">nose</option>
                <option value="general">general</option>
                <option value="pregnant Mother's">pregnant Mother's</option>
              </select>
            </div>
            <div style="padding:15px">
              <lable>Doctor's RoomNo</lable>
              <input type="text"name="room"placeholder="Enter roomNo"style="color:black;"></input>
            </div>
            <div style="padding:15px">
              <lable>Doctor's Image</lable>
              <input type="file"name="file" required=""></input>
            </div>
            <div style="padding:15px">
              <input type="submit"class="btn btn-success"></input>
            </div>
          </form>
        </div>

       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>