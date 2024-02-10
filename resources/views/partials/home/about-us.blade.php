<div id="about-us" class="about-us">
    <h1>About Kopi Sore</h1>
    <div class="content">
        <div class="gallery">
            @include('partials.home.gallery', ['imageUrl' => '/imgs/kopi-sore2.webp'])
            @include('partials.home.gallery', ['imageUrl' => '/imgs/kopi-sore3.jpg'])
            @include('partials.home.gallery', ['imageUrl' => '/imgs/kopi-sore4.jpg'])
        </div>

        <div class="info">
            <p>Kopi Sore adalah <em>kode di atas</em>, setiap kali pengguna mengklik salah satu item menu di dalam
                nav-menu,
                nav-menu akan disembunyikan (display: none). Selain itu, kode yang telah Anda buat sebelumnya untuk
                menyembunyikan nav-menu ketika pengguna mengklik di luar area nav-menu tetap berfungsi.</p>
        </div>
    </div>

    <div class="kawali-gallery">
        <div class="images">
            <div class="img1">
                <img src="/imgs/kopi-sore3.jpg" alt="">
            </div>

            <div class="img2">
                <img src="/imgs/kopi-sore4.jpg" alt="">
            </div>

            <div class="img3">
                <img src="/imgs/kopi-sore5.jpg" alt="">
            </div>
        </div>

        <div class="desc">
            <p>Kopi Sore adalah <em>kode di atas</em>, setiap kali pengguna mengklik salah satu item menu di dalam
                nav-menu,
                nav-menu akan disembunyikan (display: none). Selain itu, kode yang telah Anda buat sebelumnya untuk
                menyembunyikan nav-menu ketika pengguna mengklik di luar area nav-menu tetap berfungsi.</p>

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
    const judul = document.querySelector('.about-us h1');
    const galeri = document.querySelector('.about-us .gallery');
    const info = document.querySelector('.about-us .info');
    const images = document.querySelector('.about-us .images');
    const desc = document.querySelector('.about-us .desc');

    observer.observe(judul);
    observer.observe(galeri);
    observer.observe(info);
    observer.observe(images);
    observer.observe(desc);
</script>

{{-- transition --}}

<style>
    .about-us h1 {
        opacity: 0;
        transform: translateY(100px);
        transition: 1s;
    }

    .about-us .gallery {
        opacity: 0;
        transform: translateX(-100px);
        transition: 1s;
    }

    .about-us .desc,
    .about-us .images {
        opacity: 0;
        transform: translateY(100px);
        transition: 1s;
    }

    .about-us .info {
        opacity: 0;
        transform: translateX(100px);
        transition: 1s;
    }

    .about-us h1.visible,
    .about-us .gallery.visible,
    .about-us .desc.visible,
    .about-us .images.visible,
    .about-us .info.visible {
        opacity: 1;
        transform: translate(0)
    }
</style>

{{-- style --}}

<style>
    .about-us {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--color-black);
        padding: 5em 0;
        overflow: hidden;
    }

    .about-us .content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-evenly;
        margin: 5em 0 0 0;
    }

    .about-us p {
        padding: 1em;
    }

    .about-us .info {
        max-width: 45%;
    }

    /* bagian 2 */

    .about-us .kawali-gallery img {
        width: 300px;
        height: 400px;
        object-fit: cover;
        padding: 1em;
        background-color: white;
        margin: 1em;
        box-shadow: 0 0 7px 0 #666666;
    }

    .about-us .kawali-gallery .images {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 150px;
    }

    .about-us .kawali-gallery .img1 {
        transform: rotate(-14deg) translateX(40px);
    }

    .about-us .kawali-gallery .img2 {
        transform: rotate(2deg);
    }

    .about-us .kawali-gallery .img3 {
        transform: rotate(10deg) translateX(-40px);
    }

    .about-us .kawali-gallery .desc {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
    }

    .about-us .kawali-gallery p {
        padding: 1em;
        max-width: 726px;
        text-align: center;
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 1150px) {
        .about-us .kawali-gallery img {
            width: 220px;
            height: 300px;
            padding: 10px;
        }
    }

    @media screen and (max-width: 825px) {
        .about-us .kawali-gallery img {
            width: 200px;
            height: 250px;
            padding: 10px;
        }

        .about-us .content {
            margin-bottom: 0;
        }
    }

    @media screen and (max-width: 710px) {
        .about-us .kawali-gallery .img1 {
            transform: rotate(-14deg) translateX(120px);
            z-index: 22;
        }

        .about-us .kawali-gallery .img2 {
            transform: rotate(2deg);
        }

        .about-us .kawali-gallery .img3 {
            transform: rotate(10deg) translateX(-120px);
        }

        .about-us .kawali-gallery p {
            max-width: 90vw;
        }

    }


    @media screen and (max-width: 575px) {
        .about-us .kawali-gallery .images {
            flex-direction: column;
            margin-top: 0;
        }

        .about-us .kawali-gallery img {
            width: 220px;
            height: 300px;
            padding: 10px;
        }

        .about-us .kawali-gallery .img1 {
            transform: rotate(-8deg) translateY(70px);
        }

        .about-us .kawali-gallery .img2 {
            transform: rotate(2deg);
        }

        .about-us .kawali-gallery .img3 {
            transform: rotate(10deg) translateY(-70px);
        }

        .about-us .content {
            margin: 2em 0 0 0;
        }

        .about-us .kawali-gallery .desc {
            margin-top: 0;
        }
    }



    @media screen and (max-width: 680px) {
        .about-us {
            padding: 2em 0;
        }

        .about-us .content {
            flex-direction: column;
            margin: 3em 0 0 0;
        }

        .about-us .info {
            max-width: 80vw;
            margin-top: 1em;
        }

        .about-us p {
            text-align: center;
        }

        .about-us em {
            color: var(--color-brown);
            font-weight: 500;
            font-style: normal;
        }

        .about-us .gallery-item {
            width: 80vw;
        }

        .about-us .gallery-item img {
            width: 80vw;
        }
    }

    @media screen and (max-width: 550px) {
        .about-us {
            padding: 2em 0;
        }
    }
</style>

