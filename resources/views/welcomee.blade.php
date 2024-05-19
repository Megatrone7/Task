<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $logo->title }}</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        :root {
            --main-color: {{ $logo->color }};
            /* تعریف متغیر CSS برای رنگ از دیتابیس */
        }

        body {
            background-color: var(--main-color);
            /* استفاده از متغیر CSS برای رنگ پس زمینه */
        }
    </style>
    @vite('resources/css/app.css')

</head>

<body>

    <div class="container">

        <div class="menu-placeholder     lg:flex  hidden " id="menu-placeholder">
            <div class="menu-content">
                <img src="{{ asset('images/' . $logo->logo) }}" alt="Logo" class="menu-logo">

                <div class="menu-text">MENU</div>
            </div>
        </div>
        <div class="bg-transparent p-5 h-screen fixed  left-0 top-0 ">

            <button id="openMenuBTN">
                <span class="svg-icon svg-icon-2 svg-icon-md-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="sidebar w-full  lg:w-[20%]" id="sidebar">
            <button id="closeMenuBtn" class="fixed top-0 left-0 p-3 lg:hidden">
                <span class="svg-icon svg-icon-2 svg-icon-md-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
            </button>
            <div class="logo">
                <img src="ads logo png .png" alt="Almasi Design Studio Logo" style="width: 200px; height: 200px;">

            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#arts">Arts</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="logo-center">
                <img src="ads logo.png" alt="Center Logo">
            </div>
        </div>


    </div>
    </div>
    <script src="script.js"></script>

</body>

</html>
