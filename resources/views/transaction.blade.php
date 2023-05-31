<html>

<head>
    <!-- CSS only -->
    <link rel="icon" href="{{ asset('images/assets/logoptik.png') }}" type="image/ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('styles/contact&transactionStyle.css') }}">
    <script src="https://kit.fontawesome.com/240280eba1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <title>
        @yield('title')
    </title>
    <!-- JQuery and JQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>

{{-- BUKA HOUSE CONTROLLER BUAT REFERENSI UNTUK BIKIN TRANSACTION CONTROLLER --}}

<body style="background-color: #FAFAFA;">
    {{-- @include('layouts.navigation') --}}
    <div class="container mt-5">

        <div class="px-3 px-lg-0">
            {{-- <a href="/rumah"><button class="btn btn-primary font-montserrat fw-semibold py-2 px-4 mb-4"><i
                    class="fa-solid fa-arrow-left me-2"></i>tes</button></a> --}}
            <h1 class="fw-bold mt-4">Pet's Home</h1>
            <div>
                <div class="d-flex align-items-center mt-2">
                    <i class="fa-solid fa fa-location fs-3"></i>
                    <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                        Jalan Mawar Blok b5 Nomer 4 Sumba Timur, NTT, Indonesia</p>
                </div>
            </div>

            {{-- <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('images/house/' . $property->id . '/' . $images[0]->house_image) }}" alt=""
                    class="property-big-image my-4" id="property-big-imageid">
            </div> --}}

            <div class="discussions-card row d-flex justify-content-center px-lg-3 px-1 mb-5 py-3" rows="1">
                <div class=" col-md-3 col-5 d-flex flex-column justify-content-center mx-2">
                    <p class="fw-medium mb-0 text-center" style="color: #676767; font-size: 20px;">No
                        Telp</p>
                    <div class="d-flex align-items-center mt-2 justify-content-center">
                        <i class="fa-solid fa fa-phone fs-3"></i>
                        <p class="fw-medium mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            +62 812 345 678</p>
                    </div>
                </div>
                <div class="col-md-3 col-5 d-flex flex-column justify-content-center mx-2">
                    <p class="fw-medium mb-0 text-center" style="color: #676767; font-size: 20px;">Jam
                        Operasional
                    </p>
                    <div class="d-flex align-items-center mt-2 justify-content-center">
                        <i class="fa-solid fa fa-clock-o fs-3"></i>
                        <p class="fw-medium mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            09.00-18.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-5 d-flex flex-column justify-content-center mx-2">
                    <p class="fw-medium mb-0 text-center" style="color: #676767; font-size: 20px;">Biaya
                    </p>
                    <div class="d-flex align-items-center mt-2 justify-content-center">
                        <i class="fa-solid fa fa-money fs-3"></i>
                        <p class="fw-medium mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Rp60.000 / hari</p>
                    </div>
                </div>
            </div>
            <form action="/tambah-pembayaran" method="post">
                @csrf
                <div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa fa-user fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Nama Pemilik Hewan Peliharaan</p>
                    </div>
                    <input rows="1" id="inputPetOwnerName" name="petOwner_name"
                        class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 w-100 comment_content" placeholder="Masukkan Nama Anda">
                </div>
                <div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa fa-paw fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Nama Hewan Peliharaan</p>
                    </div>
                    <input rows="1" id="inputPetName" name="pet_name"
                        class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 w-100 comment_content"
                        placeholder="Masukkan Nama Hewan Peliharaan Anda">
                </div>
                <div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa fa-phone fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Jenis Hewan Peliharaan</p>
                    </div>
                    <input rows="1" id="inputPetType" name="pet_type"
                        class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 w-100 comment_content"
                        placeholder="Masukkan Jenis Hewan Peliharaan Anda">
                </div>

                <div class="form-group">
                    <div>
                        <div class="d-flex align-items-center mt-2">
                            <i class="fa-solid fa-calendar fs-3"></i>
                            <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                                Tanggal Penitipan</p>
                        </div>
                        <input id="date1" type="text"
                            class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 font- rrat w-100 comment_content"
                            name="start_date" value="mm/dd/yyyy">
                    </div>
                    <div>
                        <div class="d-flex align-items-center mt-2">
                            <i class="fa-solid fa-calendar fs-3"></i>
                            <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                                Tanggal Pengambilan</p>
                        </div>
                        <input id="date2" type="text"
                            class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 w-100 comment_content"
                            name="end_date" value="mm/dd/yyyy">
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa fa-credit-card-alt fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Metode Pembayaran</p>
                    </div>
                    <input rows="1" id="inputMetodePembayaran" name="payment_method"
                        class="form-control discussions-card px-4 py-3 d-flex flexrow mb-4 mt-3 w-100 comment_content"
                        placeholder="Masukkan Metode Pembayaran yang Diinginkan">
                </div>
                <div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa fa-money fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Total Harga</p>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa-minus fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Biaya Penitipan = </p>
                        <p id="biayaPenitipan" class="fw-semibold mb-0 ms-3"
                            style="color: #454545; font-size: 20px;">
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa-minus fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Pajak = </p>
                        <p id="biayaPajak" class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <i class="fa-solid fa-minus fs-3"></i>
                        <p class="fw-semibold mb-0 ms-3" style="color: #454545; font-size: 20px;">
                            Biaya Total = </p>
                        <p id="total_price" name="total_price" class="form-control fw-semibold mb-0 ms-3"
                            style="color: #454545; font-size: 20px;">
                        </p>
                    </div>
                </div>
                <div class="d-none">
                    <span> Diff:</span>
                    <span id='diff'> - </span>
                    <span> Days</span>
                </div>
                <div class="d-flex justify-content-center w-100 pt-3">
                    <button type="submit" style="background-color: #2B2D42; color: white;"
                        class="btn fw-semibold py-2 px-4 mt-2 mb-4 w-100" id="add-pembayaran">Bayar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<footer>
    {{-- @include('layouts.footer') --}}
</footer>
<script>
    $('#date1').datepicker();
    $('#date2').datepicker();

    $('#date1').change(function() {
        var diff = $('#date1').datepicker("getDate") - $('#date2').datepicker("getDate");
        $('#diff').text(diff / (1000 * 60 * 60 * 24) * -1);
        var biayaPenitipan = (diff / (1000 * 60 * 60 * 24) * -1) * 60000;
        $('#biayaPenitipan').text(biayaPenitipan);
        var biayaPajak = biayaPenitipan * 10 / 100;
        $('#biayaPajak').text(biayaPajak);
        var total_price = biayaPenitipan + biayaPajak;
        $('#total_price').text(total_price);
    });

    $('#date2').change(function() {
        var diff = $('#date1').datepicker("getDate") - $('#date2').datepicker("getDate");
        $('#diff').text(diff / (1000 * 60 * 60 * 24) * -1);
        var biayaPenitipan = (diff / (1000 * 60 * 60 * 24) * -1) * 60000;
        $('#biayaPenitipan').text(biayaPenitipan);
        var biayaPajak = biayaPenitipan * 10 / 100;
        $('#biayaPajak').text(biayaPajak);
        var total_price = biayaPenitipan + biayaPajak;
        $('#total_price').text(total_price);
    });

    $(document).ready(function() {
        $("#add-pembayaran").click(function(e) {
            if ($("#inputMetodePembayaran").val() == "") {
                e.preventDefault();

                alert("Wajib memasukkan metode pembayaran!");
            }
            if ($("#inputPetName").val() == "") {
                e.preventDefault();

                alert("Wajib memasukkan pet name!");
            }
        });
    });
</script>

</html>
