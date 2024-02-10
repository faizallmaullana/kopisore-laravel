@extends('layouts.main')

@section('container')
    @include('partials.home.hero')

    @include('partials.home.about-us')

    @include('partials.home.menu')

    @include('partials.home.order')

    @include('partials.home.location')

    {{-- @include('partials.decoration.quote', [
        'quote' => 'Jangankan kamu, aku aja bingung sama diriku sendiri',
    ]) --}}

    <script src="/js/transition-gallery.js"></script>
@endsection
