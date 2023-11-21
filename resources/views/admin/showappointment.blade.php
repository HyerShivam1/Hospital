
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
        <div>

        <table>

            <tr style="background-color:black">
            <th style="padding:10px">Patient name</th>
            <th style="padding:10px">Email</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">Doctor Name</th>
            <th style="padding:10px">Date</th>
            <th style="padding:10px">Message</th>
            <th style="padding:10px">Status</th>
            <th style="padding:10px">Approved</th>
            <th style="padding:10px">Cancel</th>


            </tr>

            @foreach($data as $appoint)
            <tr align="center" style="background-color:skyblue;">
                <td style="padding:10px">{{$appoint->name}}</td>
                <td style="padding:10px">{{$appoint->email}}</td>
                <td style="padding:10px">{{$appoint->phone}}</td>
                <td style="padding:10px">{{$appoint->doctor}}</td>
                <td style="padding:10px">{{$appoint->date}}</td>
                <td style="padding:10px">{{$appoint->message}}</td>
                <td style="padding:10px">{{$appoint->status}}</td>
            

                <td>

                <td>
                <a class="btn btn-success" href="{{url('approved',$appoint->id)}}"> Approved</a>
            </td>

            <td>
                <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}"> Canceled</a>
           </td>
</tr>
            @endforeach

        </table>
        </div>
        </div>
</div>
      @include('admin.script')
  </body>
</html>