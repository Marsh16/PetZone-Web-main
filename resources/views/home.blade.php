@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
@endsection
@section('title', 'Home')

@section('content')
    <div class="row py-4" id="about">
        <div class="col-12 col-md-10 justify-content-center m-auto py-5">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-7 ">
                    <div class="">
                        <div
                            class="row d-flex w-100 justify-content-lg-start justify-content-md-start justify-content-center">
                            <div class="col-2 col-md-4 col-lg-2">
                                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                                    <img src="{{ asset('images/assets/pawblue.png') }}" height="50">
                                </a>

                            </div>
                            <div class="col-6 col-md-8 col-lg-6">
                                <h3 class="font-weight-bold"><strong>Yuk Download Sekarang!</strong> </h3>
                            </div>
                        </div>
                        <div class="d-md-none my-4 d-flex w-100 justify-content-center">
                            <img src="{{ asset('images/assets/PetZoneLogo.png') }}" height="220">
                        </div>
                        <div class="mb-4 text-white pt-4">

                            <div
                                class="row d-flex w-100 justify-content-md-center justify-content-center align-items-center">
                                <div class="col-sm p-3 rounded-3 m-2 unduh">
                                    <a href="/announcement" class="mb-3 me-2 mb-md-0 text-white text-decoration-none">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-4">
                                                <img src="{{ asset('images/assets/googleplay.png') }}" height="60">
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <p class="mb-0">Unduh Di<br><span class="fs-4 fw-semibold">Google
                                                        Play</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm p-3 rounded-3 m-2 unduh">
                                    <a href="/announcement" class="mb-3 me-2 mb-md-0 text-white text-decoration-none">
                                        <div class="row">
                                            <div class=" col-12 col-lg-4">
                                                <img src="{{ asset('images/assets/apple.png') }}" height="60">
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <p class="mb-0">Unduh Di<br><span class="fs-4 fw-semibold">App
                                                        Store</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-5 d-flex justify-content-lg-end justify-content-center ">
                    <img src="{{ asset('images/assets/PetZoneLogo.png') }}" height="220" class="d-none d-md-block">
                </div>


            </div>
        </div>
    </div>

    <div class="row spacings py-3" id="about">
        <div class="d-flex col-12 col-lg-10 col-md-12 justify-content-center m-auto">
            <div class="row d-flex justify-content-center mx-auto">
                <div class=" col-sm-12 col-lg-4 col-md-4  mx-auto justify-content-center">
                    <img src="{{ asset('images/assets/doge.png') }}" height="220">
                </div>
                <div class=" col-sm-12 col-lg-8 col-md-8">
                    <div class="mt-4">

                        <h3 class="font-weight-bold red"><strong>Apa Itu Petzone?</strong> </h3>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-sm">
                                <p>Pet Zone adalah aplikasi penitipan hewan yang menghubungkan Pet Owner yang ingin
                                    menitipkan hewannya dengan penyedia jasa penitipan hewan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex row text-center spacings" id="makesusspecial">
        <h2 class="font-weight-bold mb-4"><strong>What Makes Us Special</strong></h2>
        <div class="col-12 col-md-10 justify-center m-auto">
            <div class="row d-flex w-100 justify-content-md-center justify-content-center">
                <div class="d-flex card justify-content-center col-12 col-md-3 shadow-sm p-3 cardstyles">

                    <h1><strong>#1</strong></h1>
                    <p><strong>Aplikasi penitipan hewan pertama di Indonesia</strong> </p>

                </div>
                <div class="d-flex card justify-content-center col-12 col-md-3 shadow-sm p-3 cardstyles">

                    <h1><strong>#2</strong></h1>
                    <p><strong>Transportasi tersedia</strong> </p>

                </div>
                <div class="d-flex card justify-content-center col-12 col-md-3 shadow-sm p-3 cardstyles">

                    <h1><strong>#3</strong></h1>
                    <p><strong>Menjamin keamanan peliharaan anda</strong> </p>

                </div>
            </div>
        </div>
    </div>

    <div class=" text-center justify-center spacings">
        <h2 class="font-weight-bold mb-5 pb-3"><strong>Testimoni Klien Kami</strong></h2>
        <a href="#download">
            <img src="{{ asset('images/assets/testimoni.png') }}" class="w-75 ">
        </a>
    </div>
    <div class="container mt-5 pt-5">
        <h2 class="font-weight-bold mb-4 w-100 text-center"><strong>Cara Kerja Sistem Kami</strong></h2>
        <div class="d-flex justify-content-center pb-5">
            <div class="line1"></div>
        </div>
        <div class="main-timeline">
            <!-- start experience section-->
            <div class="timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">Langkah</span>
                            <span class="year">1</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Reservasi </h5>
                    <p class="description">
                        Pet Owner melakukan reservasi terhadap Pet Hotel dan melakukan proses pembayaran.
                    </p>
                </div>
            </div>
            <!-- end experience section-->

            <!-- start experience section-->
            <div class="timeline align-items-center">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">Langkah</span>
                            <span class="year">2</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Pemrosesan Pesanan</h5>
                    <p class="description">
                        Pet Hotel menerima permintaan reservasi dari Pet Owner.
                    </p>
                </div>
            </div>
            <!-- end experience section-->

            <!-- start experience section-->
            <div class="timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">Langkah</span>
                            <span class="year">3</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Pick-Up</h5>
                    <p class="description">
                        Hewan peliharaan akan dijemput dan diantarkan ke lokasi Pet Hotel menggunakan jasa yang kami sediakan.
                    </p>
                </div>
            </div>
            <!-- end experience section-->

            <!-- start experience section-->
            <div class="timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">Langkah</span>
                            <span class="year">4</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Perawatan</h5>
                    <p class="description">
                        Pet Hotel menerima dan merawat hewan peliharaan selama jangka waktu yang telah direservasi oleh Pet Owner.
                    </p>
                </div>
            </div>
            <!-- end experience section-->

            <!-- start experience section-->
            <div class="timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">Langkah</span>
                            <span class="year">5</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Selesai!</h5>
                    <p class="description">
                        Setelah jangka waktu habis, hewan peliharaan akan dijemput dari Pet Hotel dan diantarkan ke Pet Owner menggunakan jasa yang kami sediakan.
                    </p>
                </div>
            </div>
            <!-- end experience section-->

        </div>
    </div>

    <div class="row text-center justify-center spacings" id="testimoni">
        <h2 class="font-weight-bold"><strong>Kirim Saran</strong> </h2>
        <form action="/" method="POST">
            @csrf
            <div class="d-flex flex-column justify-content-between align-items-center pb-md-3">
                <div
                    class="mb-3 card feedback-box justify-content-md-center p-4 my-4 text-center justify-center m-auto shadow">
                    <textarea class="d-flex form-control justify-content-center font-montserrat fw-medium mx-auto textarea-feedback"
                        id="inputFeedbackContent" name="feedback_content" placeholder="Berikan Masukan Anda" required></textarea>
                    <small class="text-danger font-montserrat">
                        @foreach ($errors->get('feedback_content') as $err)
                            @if ($loop->iteration > 1)
                                <br />
                            @endif
                            {{ ucfirst($err) }}
                        @endforeach
                    </small>

                    <div class="d-flex w-100 justify-content-md-center justify-content-center">
                        <input type="hidden" name="user_id" value="">
                        <button type="submit"
                            class="btn btn-primary font-montserrat fw-semibold mt-4 mb-4 py-2 px-4">Kirim
                            Saran
                            Anda</button>
                    </div>

                </div>

            </div>
        </form>
        <div class="pb-4"></div>
    </div>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <p class="fs-5 text-center mt-2">Namun jika Anda tertarik untuk mengetahui informasi lebih lanjut tentang Pet
            Hotel, silahkan hubungi kami melalui tombol di bawah ini.</p>
        <div class="mt-4 mb-1">
            <a href="https://wa.link/c5u4g5" class="text-decoration-none">
                <button
                    class="btn btn-primary fw-semibold py-2 w-100 d-flex align-items-center justify-content-center px-5"
                    type="submit">
                    <i class="fa-brands fa-whatsapp me-2" style="font-size: 30px;"></i>
                    Contact Us On Whatsapp
                </button>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    {{-- <div>
        contoh hasil kirim Saran
        @foreach ($feedback as $reviews)
            <p>
            <ul>
                <li>
                    {{ $reviews->feedback_content }}
                </li>
            </ul>

            </p>
            <br>
        @endforeach
    </div> --}}
@endsection
