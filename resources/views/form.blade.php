<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration Form</title>
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
       <h1 class="text-center">Registration Form</h1>
       <form  action="{{url('/')}}/register" method="post">
        @csrf
        @php
            $demo=1;
        @endphp
        <x-input type="text" name="name" label="Name" :demo="$demo"/>
        <x-input type="email" name="email" label="Email"/>
        <x-input type="password" name="password" label="Password"/>
        <x-input type="password" name="password_confirmation" label="Confirm Password"/>
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
       {{-- <div class="form-group">
         <label for="">Name</label>
         <input type="text" name="name" id="" class="form-control" value="{{old('name') }}" placeholder="" aria-describedby="helpId">
         <span class="text-danger">
             @error('name')
                 {{$message }}
             @enderror
         </span> --}}
         {{-- <small id="helpId" class="text-muted">Help text</small> --}}
       {{-- </div>
       <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" id="" class="form-control" value="{{old('email') }}" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
            @error('email')
            {{$message }}
        @enderror
        </span> --}}
        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
      {{-- </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
            @error('password')
            {{$message }}
        @enderror
        </span>
        <div class="form-group">
            <label for=""> ConfirmvPassword</label>
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('password_confirmation')
                {{$message }}
            @enderror
            </span> --}}
        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
      {{-- </div> --}}
      <button type="submit"  id="" class="btn btn-primary" btn-lg btn-block" style="margin-top: 10px">Submit</button>
       </form>
   </div>
  </body>
</html>