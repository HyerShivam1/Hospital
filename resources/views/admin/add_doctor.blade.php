
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">

    label{
        display: inline-block;
        width: 200px;
    }

    </style>


@include('admin.css')

  </head>
  <body>
    <div class="container-scroller">



      @include('admin.sidebar')

      @include('admin.navbar')
    

      <div class="container-fluid page-body-wrapper">


       


      <div class="container" align="centre" style="padding-top: 100px;">

      @if(session()->has('message'))

<div class="alert alert-success">


<button type="button" class="close" data-dismiss="alert">
</button>

{{session()->get('message')}}


</div>


@endif

      <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px;">
        <label>Doctor Name</label>
        <input type="text" style="color:black;" name="name" placeholder="Write the name"  required="">
        </div>

        <div style="padding:15px;">
        <label>Phone</label>
        <input type="number" style="color:black;" name="phone" placeholder="Write the number" required="">
        </div>

        <div style="padding:15px;">
        <label>Speciality</label>
        
        
        <select name="Speciality" style="color: black; width: 200px;" required="">

        <option>--Select--</option>
        <option value="Skin">Skin</option>
        <option value="Heart">Cardiologist</option>
        <option value="ENT">ENT</option>
        <option value="Surgen">Surgen</option>

        </select>
</div>

        <div style="padding:15px;">
        <label>Room No</label>
        <input type="text" style="color:black;" name="room" placeholder="Write the Room number" required="">
        </div>

        <div style="padding:15px;" required="">
        <label>Doctor Image</label>
        <input type="file" name="file" required="">
        </div>

        <div style="padding:15px;">
        <label></label>
        <input type="submit" class="btn btn-success"name="file">
        </div>

      </form>


      </div>



      @include('admin.script')
  </body>
</html>