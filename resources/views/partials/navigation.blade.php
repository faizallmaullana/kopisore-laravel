<nav>
    <div class="wrapper">
        <div class="icon">
            <h3>kopis</h3>
            <img src="/icons/logo/kopi-sore-brown.svg" alt="0">
            <h3>re</h3>
        </div>
        <div class="nav">
            <a href="#about-us">about-us</a>
            <a href="#gallery">gallery</a>
            <a href="#menu">menu</a>
            <a href="#order">order</a>
            <a href="#location">location</a>
        </div>
        <div class="burger">
            <img src="/icons/burger.png" alt="more" onclick="eventBurger()">
        </div>
    </div>
</nav>

<div class="nav-menu">
    <a href="#about-us">about-us</a>
    <a href="#gallery">gallery</a>
    <a href="#menu">menu</a>
    <a href="#order">order</a>
    <a href="#location">location</a>
</div>

<script>
    let lastScrollTop = 0;
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll > lastScrollTop) {
            // Scroll down
            nav.classList.add('hidden'); // Hide the navigation smoothly
        } else {
            // Scroll up
            nav.classList.remove('hidden'); // Show the navigation smoothly
        }
        lastScrollTop = currentScroll;
    });

    document.addEventListener('DOMContentLoaded', function() {
        const navMenuLinks = document.querySelectorAll('.nav-menu a');

        // Tambahkan event listener untuk setiap item menu di dalam nav-menu
        navMenuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Sembunyikan nav-menu ketika salah satu item menu diklik
                document.querySelector('.nav-menu').style.display = 'none';
                document.querySelector('nav .burger').style.display =
                'flex'; // Tampilkan kembali tombol burger
            });
        });
    });

    document.addEventListener('click', function(event) {
        // Periksa apakah yang diklik bukan bagian dari nav-menu
        if (!event.target.closest('.nav-menu') && !event.target.closest('.burger')) {
            // Jika tidak, sembunyikan nav-menu
            document.querySelector('.nav-menu').style.display = 'none';
            document.querySelector('nav .burger').style.display = 'flex'; // Tampilkan kembali tombol burger
        }
    });

    function eventBurger() {
        document.querySelector('.nav-menu').style.display = 'flex';
        document.querySelector('nav .burger').style.display = 'none';
    }
</script>

<style>
    nav {
        display: flex;
        flex: row;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 70px;
        box-shadow: 0 0 7px 0 #666666;
        position: fixed;
        background-color: var(--color-brown2);
        z-index: 99999;
        transition: transform 0.3s ease;
        transform: translateY(0);
    }

    nav.hidden {
        transform: translateY(-100%);
    }

    nav .wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 1024px;
    }

    nav .icon {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-left: 1em;
    }

    nav h3 {
        font-family: var(--font-opensans);
        font-weight: 700;
        color: var(--color-brown);
    }

    nav img {
        height: 1.5em;
        transform: translateY(-4px)
    }

    nav .nav {
        max-width: 80%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
        padding-right: 1em;
    }

    nav a {
        margin: 0 0.5em;
        color: var(--color-black);
    }

    /* hovering */
    nav a:hover {
        color: var(--color-yellow);
    }

    nav .burger {
        display: none;
        margin-right: 1em;
    }

    nav .burger img {
        transform: translateY(1px);
    }

    .nav-menu {
        display: none;
        flex-direction: center;
        flex-direction: column;
        align-items: center;
        background-color: var(--color-yellow);
        right: 0%;
        position: fixed;
        padding: 2em;
        z-index: 999999;
        margin: 1em;
        box-shadow: 0 0 7px 0 #666666;
        font-weight: 500;
    }

    .nav-menu a {
        color: var(--color-black);
        margin: 0.5em;
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 550px) {
        nav .nav {
            display: none;
        }

        nav .burger {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }
</style>
