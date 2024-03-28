<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/dist/css/landing.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Start Landing Page -->
    <div class="landing-page">
        <header>
            <div class="container">
                <div class="title-nav">
                    <img src="logo.png" width="50px" alt="logo" class="logo">
                    <p>KashCode</p>
                </div>
                <ul class="links">
                    <li>Home</li>
                    <a href="{{ route('login') }}">
                        <li>Sign In</li>
                    </a>
                </ul>
            </div>
        </header>
        <div class="content">
            <div class="container">
                <div class="info">
                    <h1>Looking For Inspiration</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit nihil ullam nesciunt
                        quidem iste, Repellendus odit nihil</p>
                    <a href="{{ route('login') }}">
                        <button>See More!</button>
                    </a>

                </div>
                <div class="image">
                    <img src="https://i.postimg.cc/65QxYYzh/001234.png">
                </div>
            </div>
        </div>
    </div>
    <!-- End Landing Page -->
</body>

</html>
