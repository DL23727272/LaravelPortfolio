<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="shortcut icon" type="x-icon" href="favicon.jpg">
    <link rel="shortcut icon" href="{{ asset('assets/images/LOGO.png') }}" type="image/x-icon" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
    @extends('components.navigation.navbar')
    @extends('components.about.about')


</body>
</html>
