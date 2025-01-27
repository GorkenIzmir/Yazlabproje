<!DOCTYPE html>
<html lang="en">

<head>
    <title>PTS</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- Favicon icon -->
     <link rel="icon" href="{{url('images/logoo.png')}}" type="image/x-icon">
     <!-- fontawesome icon -->
     <link rel="stylesheet" href="{{url('fonts/fontawesome/css/fontawesome-all.min.css')}}">
     <!-- animation css -->
     <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
     <!-- vendor css -->
     <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>
<form id="addCustomer"  class="form-group" method="POST" >
@csrf
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Parola Değiştir</h3>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="mail" placeholder="Email">
                    </div>
                    <button class="btn btn-primary mb-4 shadow-2">Parola Değiştir</button>

                </div>
            </div>
        
        </div>
    </div>
    </form>

      <!-- Required Js -->
      <script src="{{url('js/pcoded.min.js')}}"></script>
      <script src="{{url('js/vendor-all.min.js')}}"></script>
      <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
