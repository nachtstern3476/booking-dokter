<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https:kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo2-removebg-preview.png') }}">
            </a>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('book.list') }}">BOOKING LIST</a></li>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    @yield('content')

    <section class="footer">
        <div class="waves"></div>
        <p>Copyright @TeamP32 | All Right Reserved</p>
    </section>

    <script>
        feather.replace();
    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
