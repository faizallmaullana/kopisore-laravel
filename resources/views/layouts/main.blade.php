<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/position.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>
    @include('partials.navigation')
    <div class="container">
        @yield('container')

        <p style="text-align: center;">enjoy your coffee</p>
    </div>
    @include('partials.footer')
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

    :root {
        --color-black: #262a2b;
        --color-gray: #dfe1e1;
        --color-brown: #7e501e;
        --color-yellow: #fbba06;
        --color-brown2: #fff8e9;

        scrollbar-width: thin;
        scrollbar-color: var(--color-gray) var(--color-brown2);
        scroll-behavior: smooth;

        --font-nunito: 'Nunito', sans-serif;
        --font-inter: 'Inter', sans-serif;
        --font-opensans: 'Open Sans', sans-serif;
    }

    body {
        padding: 0;
        margin: 0;
        font-family: 'Inter', sans-serif;
        background-color: var(--color-brown2);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: var(--font-opensans);
        margin-block: 0;
    }

    h1 {
        font-size: 32px;
    }

    p {
        font-family: var(--font-inter);
        margin-block: 0;
    }

    .container {
        width: 100%;
        min-height: 100vh;
        margin-bottom: 5em;
    }

    section {
        width: 100%;
        min-height: 100vh;
    }

    a {
        text-decoration: none;
    }

    .none {
        display: none;
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 768px) {
        h1 {
            font-size: 28px;
        }
    }
</style>
