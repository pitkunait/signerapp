<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=url("");?>uploads/app/{{ env('APP_ICON'); }}">
    <title>Update Center | Sign documents online</title>
    <!-- Ion icons -->
    <link href="<?=url("");?>assets/fonts/ionicons/css/ionicons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?=url("");?>assets/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=url("");?>assets/css/simcify.min.css" rel="stylesheet">
    <!-- Signer CSS -->
    <link href="<?=url("");?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="login-card">
        <img src="<?=url("");?>uploads/app/{{ env('APP_ICON'); }}" class="img-responsive">
        <div class="text-center">
            @if(!is_null($latest))
            <h5 class="mb-30">Current Version</h5>
            @else
            <h5 class="mb-30">You are running on the latest version.</h5>
            @endif
            <h1 class="text-center text-primary"><strong>Ver {{ env("APP_VERSION") }}</strong></h1>
            <div class="m-t-50">
                <a class="btn btn-default" href="{{ url('') }}">Go Home</a>
                @if(!is_null($latest))
                <button class="btn btn-primary send-to-server-click"  data="csrf-token:{{ csrf_token() }}" url="<?=url("Update@scan");?>" loader="true" href="">Update Now</button>
                @endif
            </div>

        </div>
        <div class="copyright">
            <p class="text-center"><?=date("Y")?> &copy; <?=env("APP_NAME")?> | All Rights Reserved.</p>
        </div>
    </div>

    <!-- scripts -->
    <script src="<?=url("");?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?=url("");?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=url("");?>assets/js//jquery.slimscroll.min.js"></script>
    <script src="<?=url("");?>assets/js/simcify.min.js"></script>

    <!-- custom scripts -->
    <script src="<?=url("");?>assets/js/app.js"></script>
</body>

</html>
