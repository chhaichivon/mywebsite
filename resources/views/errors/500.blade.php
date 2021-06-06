<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style id="" media="all">
        body {
            padding: 0;
            margin: 0
        }

        #notfound {
            position: relative;
            height: 100vh
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .notfound {
            max-width: 710px;
            width: 100%;
            text-align: center;
            padding: 0 15px;
            line-height: 1.4
        }

        .notfound .notfound-404 {
            height: 200px;
            line-height: 200px
        }

        .notfound .notfound-404 h1 {
            font-family: fredoka one, cursive;
            font-size: 168px;
            margin: 0;
            color: #ff508e;
        }

        .notfound h2 {
            font-family: raleway, sans-serif;
            font-size: 22px;
            font-weight: 400;
            color: #222;
            margin: 0
        }

        .notfound a {
            font-family: raleway, sans-serif;
            display: inline-block;
            font-weight: 700;
            border-radius: 15px;
            text-decoration: none;
            color: #39b1cb
        }

        .notfound a>.arrow {
            position: relative;
            top: -2px;
            border: solid #39b1cb;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg)
        }
    </style>

    <meta name="robots" content="noindex, follow">
</head>
<body>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>500</h1>
        </div>
        <h2>Oops, Internet server error</h2>
        <a href="#"><span class="arrow"></span>Return To Homepage</a>
    </div>
</div>
</body>
</html>