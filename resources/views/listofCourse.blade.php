<html>
    <head> 
        <title> Course Details </title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
    </head>
    <body>
<div class="container">
<h3> Student Details </h3>

    <table  class="table table-striped table-bordered"  id="example">
        <thead>
          <tr>
            <td>Serial No</td>
            <td>Course Name</td>
            <td>Course Fee</td>
          </tr>
        </thead>
        <tbody>
       @foreach($course as $row)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
           <td>{{$row->name }}</td>
             {{--  {{dd($row->fee())}}  --}}
             <td> {{$row->fee->fee}}</td>
              {{--  @if($row->course)
                  {{$row->course->fee}}
               @endif --}}
            </tr>
        @endforeach
       </tbody>
      </table>
    </div>
    </body>
</html>