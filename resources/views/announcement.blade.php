@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/announcement.css') }}">
@endsection
@section('title', 'Sorry For The Inconvenience')

@section('content')
<div class="px-5 py-5 mb-4 w-100 d-flex justify-content-center flex-column align-items-center">
    <img src="{{ asset('images/assets/PetZoneLogo.png') }}" alt="Pet Zone Logo" class="logo">
    <p class="fs-3 mt-4 fw-semibold text-center">Yah! Halaman ini masih dalam tahap pengembangan 😅</p>
    <p class="fs-5 text-center">Kami sangat berterima kasih bahwa Anda telah menyempatkan waktu untuk melihat website kami 😊 Sayangnya untuk sementara, beberapa fitur masih belum tersedia 🥲</p>
    <p class="fs-5 text-center mt-2">Namun jika Anda tertarik untuk mengetahui informasi lebih lanjut tentang Pet Hotel, silahkan hubungi kami melalui tombol di bawah ini.</p>
    <div class="mt-4 mb-1">
        <a href="https://wa.link/c5u4g5" class="text-decoration-none">
            <button class="btn btn-primary fw-semibold py-2 w-100 d-flex align-items-center justify-content-center px-5" type="submit">
                <i class="fa-brands fa-whatsapp me-2" style="font-size: 30px;"></i>
                Contact Us On Whatsapp
            </button>
        </a>
    </div>
    <!--<p class="fs-5 mt-4 text-center">Atau jika Anda mengalami kendala saat menggunakan website ini ataupun memiliki saran, Anda dapat mengisi form di bawah ini agar kami dapat meningkatkan kualitas kami 😄</p>-->
</div>
@endsection