<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>

    <title>Trang chủ</title>
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap.min.css">

    <!-- link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!-- link slider -->
    <link rel="stylesheet" href="/frontend/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/owlcarousel/assets/owl.theme.default.min.css">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">

</head>
<body>
<!-- thanh menu -->
@include('frontend.layout.header')

@yield('content')

<!-- footer -->
@include('frontend.layout.footer')

<!-- js jquery bootstrap -->
<script type="text/javascript" src="/frontend/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- link siick slider -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/frontend/owlcarousel/owl.carousel.min.js"></script>
<!-- link javascrip -->
<script type="text/javascript" src="/frontend/css/javascrip.js"></script>




</body>
</html>
