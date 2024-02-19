@extends('layouts.landing.app')

@section('title', 'Beranda')
@section('seoTitle', 'Beranda')
{{-- @section('seoMetaDescription', $post->seo_meta_description) --}}

@section('main')
    @include('pages.home._slider')
    {{-- {{ views($page)->collection('homepage')->record() }} --}}

    <hr class="my-8" />

    @include('pages.home._pengumuman')

    <hr class="my-8" />

    @include('pages.home._berita')

    <hr class="my-8" />

    @include('pages.home._profil_singkat')

    <hr class="my-8" />

    @include('pages.home._artikel')

    <hr class="my-8" />

    @include('pages.home._dinas_terkait')

@endsection
