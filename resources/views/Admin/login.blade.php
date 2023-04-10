<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>

  <!-- Custom fonts for this template-->
  
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/nunito.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
 

</head>

<body style="background:#F7F7F7">

<div class="container-fluid bl" style="padding-bottom:90px;">

  <div class="row ">
  <div class="col-md-4"></div>
  <div class="col-md-4"><div class="bl1" style="background:#fff;">
 <div class="bl3"> Admin Login</div>
  <div class="bl4">Login to your Account</div>

  @if(Session::get('error'))
  <div class="alert alert-danger">{{ Session::get('error')}}</div>
  @endif
  <form action="{{route('admin.login')}}" method="POST">
    @csrf 
  <div class="form-group">
    
    <input type="email" class="form-control bxyz" id="email" name="email" placeholder="Enter email" required>
    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control bxyz" id="password" name="password" placeholder="Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-secondary bl2" style=" padding:5px 110px; font-size:26px;  margin-top:25px;">{{ __('Login') }}</button>
</form></div></div>
  
  <div class="col-md-4"></div>
  </div>
</div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
