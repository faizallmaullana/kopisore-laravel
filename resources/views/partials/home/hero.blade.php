<div id="hero" class="hero" onmouseover="showImage()">
    <div class="text">
        <div class="wraping">
            <div class="logo">
                <img id="gambar" src="/icons/logo/kopi-sore.svg" alt="Kopi Sore">
            </div>

            <div class="main-text">
                <h1>kopi sore</h1>
                <p>ngopi sore-sore</p>
            </div>
        </div>
    </div>
</div>

{{-- script --}}

<script src="/js/transition.js" type="module"></script>
<script type="module">
    import {
        createObserver
    } from './js/transition.js';

    const observer = createObserver('visible');
    const gambar = document.querySelector('.hero img');
    const judulkopi = document.querySelector('.hero h1');
    const jargon = document.querySelector('.hero p');

    observer.observe(gambar);
    observer.observe(judulkopi);
    observer.observe(jargon);
</script>

{{-- style --}}

<style>
    .hero {
        display: flex;
        width: 100%;
        --height-hero: 600px;
        height: var(--height-hero);
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-image: url("/imgs/kopi-sore1.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: var(--color-black);
        overflow: hidden;
        margin: 0 0 1em 0;
    }

    .hero p {
        text-align: left;
        font-size: 1.2em;
        transition: 0.3s ease-in-out;
        transition-delay: 0.2s;
        transform: translateX(-100px);
        opacity: 0;
    }


    .hero .text {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: var(--height-hero);
        background-color: #fbba06e6;
        transition: 0.3s;
    }

    .hero .wraping {
        width: 90vw;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: flex-start;
    }

    .hero .main-text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin: 0 1em;
    }

    .hero .main-text h1 {
        transition: 0.3s ease-in-out;
        transition-delay: 0.3s;
        text-align: center;
        font-size: 4em;
        font-family: var(--font-opensans);
        font-weight: 500;
        transform: translateX(-100px);
        opacity: 0;
    }

    .hero img {
        height: 210px;
        margin: 0 1em;
        transform: translateX(-100px);
        opacity: 0;
        transition: 0.5s;
    }

    .hero .logo {
        transition: 0.5s;
        transition-delay: 0.4s;
    }

    /* transition */

    .hero h1.visible,
    .hero p.visible,
    .hero img.visible {
        transform: translateY(0);
        opacity: 1;
    }

    /* hovering */

    .hero:hover .text {
        background-color: rgb(251, 186, 6, 0.2);
    }

    .hero:hover p,
    .hero:hover h1,
    .hero:hover .logo {
        background-color: rgb(251, 185, 4, 0.8);
        padding: 1rem;
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 660px) {

        .hero,
        .hero .text {
            height: 100vh;
        }

        .hero .wraping {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero .wraping p {
            text-align: center;
            font-size: 1em;
        }

        .hero .main-text {
            align-items: center;
        }

        .hero .main-text h1 {
            font-size: 3em;
        }

        .hero img {
            height: 130px;
        }
    }
</style>

<style>
    @media screen and (max-width: 820px) {

        .hero,
        .hero .text {
            height: 100vh;
        }

        .hero .wraping {
            justify-content: center;
        }
    }
</style>
