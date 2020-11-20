<html>
<head>
    <title>BIENVENUE CHEZ DOWJIL CAPITAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-loading.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/styleBackground.css')}}">-->

    <!--<link href="css/jquery-loading.css" rel="stylesheet">-->
    <!--<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/js/jquery-loading.js')}}"></script>
</head>
<body class="" id="menu" style="background-image: url({{asset('frontend/images/logo.PNG')}});background-repeat: no-repeat;background-position: 50% 40%;background-size: ;">
<div class="row col-lg-12" style="height: 100%">
<!--            <img conta="img-fluid" src="{{asset('frontend/images/bg_2.jpg')}}">-->
    <div class="container-fluid">
        <div class="justify-center">
            <h3 class=" center">Site en construction...</h3>
        </div>

        <div class="text-center">
            <a class="btn btn-primary btn-lg" href="{{route('contacts')}}" role="button">Contactez nous</a>
        </div>

    </div>



</div>


<script>
    $('body').loading({

        overlay: false,
        base: 0.1,
        indicatorHtml: "<div class='js-loading-indicator' style='display: none;'></div>",
        overlayHtml: "<div class='js-loading-overlay' style='display: none;'></div>",
    });
</script>
</body>
</html>

