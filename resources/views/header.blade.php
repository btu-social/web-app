<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/img/favicon.jpg">
        

        <title>{{ $title }}</title>

        <link rel="stylesheet" type="text/css" href="/assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

        @isset($page)
            @if($page != 'auth')
                <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
                
                <link rel="stylesheet" type="text/css" href="/assets/css/line-awesome.css">
                <link rel="stylesheet" type="text/css" href="/assets/css/line-awesome-font-awesome.min.css">

                

                <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
                <link rel="stylesheet" type="text/css" href="/assets/css/jquery.mCustomScrollbar.min.css">
                
                <link rel="stylesheet" type="text/css" href="/assets/lib/slick/slick.css">
                <link rel="stylesheet" type="text/css" href="/assets/lib/slick/slick-theme.css">

                <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
                <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
            @endif
        @endisset
    </head>
    <body>