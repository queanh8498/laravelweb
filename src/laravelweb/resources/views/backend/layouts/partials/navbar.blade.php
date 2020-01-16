<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            @import 'https://fonts.googleapis.com/css?family=Raleway';

       
        header h1
        {
            color: #F2F2F2;
            font-size: 30px;
            font-weight: lighter;
            margin-bottom: 5px;
        }

        header span
        {
            color: #D8D8D8;
        }

        footer span
        {
        color: #D8D8D8;
        }

        /* div.container-fluid
        {
            font-family: Raleway;
            margin: 0 auto;
            padding: 20px 3px;
            text-align: center;
        } */

        div.container-fluid a
        {
            color: #D8D8D8;
            text-decoration: none;
            font: 15px Raleway;
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }

        .purple
        {
            background: #2E2E2E;
        }



    /* Top and Bottom borders come in */
        div.topBotomBordersIn a:before, div.topBotomBordersIn a:after
        {
            position: absolute;
            left: 0px;
            width: 100%;
            height: 2px;
            background: #FFF;
            content: "";
            opacity: 0;
            transition: all 0.3s;
        }

        div.topBotomBordersIn a:before
        {
            top: 0px;
            transform: translateY(-10px);
        }

        div.topBotomBordersIn a:after
        {
            bottom: 0px;
            transform: translateY(10px);
        }

        div.topBotomBordersIn a:hover:before, div.topBotomBordersIn a:hover:after
        {
            opacity: 1;
            transform: translateY(0px);
        }


    </style>
</head>
<body>
    <div class="container-fluid purple topBotomBordersIn" style="color: white; font-family: Raleway;  margin: 0 auto;
            padding: 20px 3px;
            text-align: center;">
    <a>HOME</a>
    <a>ARTICLES</a>
    <a>PORTFOLIO</a>
    <a>ABOUT</a>
    <a><span style="text-transform: uppercase;">WELCOME @if (Auth::check()) {{ auth()->user()->nv_hoTen }} @endif ^^</span> </a>
    </div>

</body>
</html>