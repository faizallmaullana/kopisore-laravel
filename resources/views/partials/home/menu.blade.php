<div id="menu" class="menu-bg">
    <div class="menu">
        <h1>Menu</h1>

        <div class="ini-menu bottom">
            <div class="content-menu">
                @include('partials.home.menus.menu', [
                    'json_file' => './json/speciality-es-kopi.json',
                    'title' => 'Speciality Es Kopi',
                ])
                @include('partials.home.menus.menu', [
                    'json_file' => './json/eatery.json',
                    'title' => 'Eatery',
                ])
            </div>

            <div class="content-menu tr2">
                @include('partials.home.menus.menu', [
                    'json_file' => './json/coffee-base.json',
                    'title' => 'Coffee Base',
                ])
                @include('partials.home.menus.menu', [
                    'json_file' => './json/non-coffee.json',
                    'title' => 'Non Coffee',
                ])
            </div>
        </div>
        
        <button id="goToMenu" class="button-5" role="button">go to menu</button>
    </div>
</div>

{{-- script --}}

<script src="/js/transition.js" type="module"></script>
<script type="module">
    import {
        createObserver
    } from './js/transition.js';

    const observer = createObserver('visible');
    const trans_top = document.querySelector('.menu h1');
    const menu = document.querySelector('.menu .content-menu');
    const menu2 = document.querySelector('.menu .tr2');

    observer.observe(trans_top);
    observer.observe(menu);
    observer.observe(menu2);
</script>

<script>
    document.getElementById('goToMenu').addEventListener('click', function() {
        // Redirect ke halaman Facebook saat tombol ditekan
        window.location.href = 'https://olshopin.com/t/460590';
    });
</script>

{{-- style --}}

<style>
    .menu-bg {
        background-image: url("/imgs/kopi-sore6.jpeg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .menu {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgb(251, 186, 6, 0.8);
        width: 100%;
        height: 100%;
        padding: 5em 0;
        overflow: scroll;
    }

    .menu .ini-menu {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }

    .menu .content-menu {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        align-content: center;
        justify-content: space-between;
        margin-top: 2em;
        width: 100%;
    }

    .menu h1 {
        margin-bottom: 40px;
        font-size: 35px;
    }

    .menu .div {
        padding: 1em;
    }

    .menu button {
        margin: 2em 0 0 0;
    }
</style>

{{-- transition --}}

<style>
    /* transition */

    .menu h1,
    .menu .tr2,
    .menu .content-menu {
        transform: translateY(100px);
        opacity: 0;
        transition: 1s;
    }

    .menu h1.visible,
    .menu .tr2.visible,
    .menu .content-menu.visible {
        opacity: 1;
        transform: translate(0)
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 1024px) {
        .menu .div {
            margin-top: 1em;

        }

        .menu .div h2 {
            text-align: center;
        }

        .menu .content-menu {
            align-items: center;
            justify-content: center;
            margin-top: 0;
        }

        .menu h1 {
            margin-bottom: 0;
        }
    }
</style>
