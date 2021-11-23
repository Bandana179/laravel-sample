<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Details</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Student Management</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/register') }}">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/student') }}">Student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
    <div class="container">
        <a href="{{route('student.create')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
    </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Date of Birth</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>
                        {{-- {{ $student->gender }} --}}
                     @if ($student->gender=='M')
                        Male 
                     @elseif($student->gender=='F')
                        Female
                     @else
                        Others
                     @endif 
                    </td>
                    <td>{{$student->student_address}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->dob}}</td>
                    {{-- <td>
                        <a href="{{ url('/student/delete/') }}/{{ $student->student_id }}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    </td> --}}
                    <td>
                        <a href="{{ route('student.delete',['id'=>$student->student_id] ) }}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    </td>
                    <td>
                    <a href="{{route('student.edit',['id'=>$student->student_id] ) }}">
                    <button class="btn btn-primary">Edit</button>
                </td>
                </a>
                </tr> 
                @endforeach
               
               
            </tbody>
        </table>
    </div>
  </body>
</html>