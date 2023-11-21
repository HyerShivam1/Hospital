
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
          <!-- content-wrapper ends -->
      @include('admin.body')    <!-- partial:partials/_footer.html -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>