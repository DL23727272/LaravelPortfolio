<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/LOGO.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="x-icon" href="favicon.jpg">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css file  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Alertify sakit sa ulo -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
</head>
<body>
    @extends('components.navigation.navbar')
    @extends('components.home.home')


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        alertify.set('notifier', 'position', 'top-right');
        var msg = alertify.notify('Welcome to my Home Page!', 'custom', 2, function(){console.log('dismissed');});
        msg.delay(5);
    </script>
</body>
</html>
