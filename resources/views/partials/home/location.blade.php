<div id="location" class="location">
    <div class="text">
        <h1>Location</h1>
        <p>Jl. Astana Gede No.4, Kawali, Kec. Kawali, Kabupaten Ciamis, Jawa Barat 46253</p>
    </div>

    <div class="wrapper">
        <div class="image">
            <img src="/imgs/kopi-sore5.jpg" alt="">
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4420945422667!2d108.36165827560518!3d-7.1902905928148915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f431056980985%3A0x6353ef525fe7c2b1!2sKOPI%20SORE%20KAWALI!5e0!3m2!1sen!2sid!4v1707229604990!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    const gambar = document.querySelector('.location .wrapper');
    const text = document.querySelector('.location .text');

    observer.observe(gambar);
    observer.observe(text);
</script>

{{-- style --}}

<style>
    .location {
        margin-top: 3rem;
    }

    .location .wrapper {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        color: var(--color-black);
        padding: 3em 0;

    }

    .location h1 {
        text-align: center;
        padding: 1em;
    }

    .location p {
        text-align: center;
        max-width: 90vw;
    }

    .location .text {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .location .map {
        width: 40%;
        height: 620px;
        padding: 1em;
        background-color: white;
        box-shadow: 0 0 7px 0 #444444;
        margin: 0 1em;
    }

    .location .image {
        width: 40%;
        height: 620px;
        padding: 1em;
        background-color: white;
        box-shadow: 0 0 7px 0 #444444;
        margin: 0 1em;
    }

    .location img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<style>
    /* transition */

    .location .wrapper {
        opacity: 0;
        transition: 1s;
    }

    .location .text {
        opacity: 0;
        transform: translateY(100px);
        transition: 1s;
    }

    .location .wrapper.visible,
    .location .text.visible {
        opacity: 1;
        transform: translate(0)
    }
</style>

{{-- responsive --}}

<style>
    @media screen and (max-width: 768px) {
        .location .wrapper {
            flex-direction: column-reverse;
        }

        .location .image,
        .location .map {
            width: 80%;
            margin-bottom: 2em;
            height: 520px;
        }
    }
</style>
