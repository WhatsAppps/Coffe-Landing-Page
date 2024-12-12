@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-fixed bg-cover bg-center" style="background-image: url('/images/hero-banner.jpg'); height: 100vh;">
    <div class="flex items-center justify-center h-full bg-black/50">
        <h1 class="text-5xl font-bold text-white">Welcome to Coffee Shop</h1>
    </div>
</div>

<!-- About Section -->
<section class="bg-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-gray-800">Our Story</h2>
        <p class="text-lg text-gray-600">
            Experience the finest coffee brewed with passion and care. Every sip tells a story.
        </p>
    </div>
</section>

<!-- Parallax Section: Coffee Beans -->
<div class="bg-fixed bg-cover bg-center" style="background-image: url('/images/coffee-beans.jpg'); height: 75vh;">
    <div class="flex items-center justify-center h-full bg-black/40">
        <h2 class="text-4xl font-bold text-white">Discover the Aroma</h2>
    </div>
</div>

<!-- Specialty Section -->
<section class="bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h3 class="text-3xl font-bold mb-6 text-gray-800">Our Specialty</h3>
        <p class="text-lg text-gray-600">
            From farm to cup, enjoy freshly brewed coffee prepared by expert baristas.
        </p>
    </div>
</section>

<!-- Parallax Section: Coffee Cup -->
<div class="bg-fixed bg-cover bg-center" style="background-image: url('/images/coffee-cup.jpg'); height: 75vh;">
    <div class="flex items-center justify-center h-full bg-black/30">
        <h2 class="text-3xl font-bold text-white">Feel the Warmth</h2>
    </div>
</div>
@endsection
