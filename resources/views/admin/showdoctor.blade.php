
<!DOCTYPE html>
<html lang="en">
  <head>


  </head>
  <body>
    <div class="container-scroller">
      @include('admin.css')

      @include('admin.sidebar')

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

      <div align="center" style="padding-top:100px;">

      <table>

            <tr style="background-color:black">
            <th style="padding:10px">Doctor name</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">Speciality</th>
            <th style="padding:10px">Room no</th>
            <th style="padding:10px">image</th>
            

            @foreach($data as $doctor)
            <tr align="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->Speciality}}</td>
                <td>{{$doctor->room}}</td>
                
            </tr>

            @endforeach
            </tr>
</div>
</div>
      @include('admin.script')
  </body>
</html>