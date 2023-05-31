@extends('layouts.mainheader')
@section('css')
    <link rel="stylesheet" href="{{ asset('styles/pethotellist.css') }}">
@endsection
@section('title', 'Daftar Pet Hotel')

@section('content')
    <div class="px-3 px-lg-0">
        <form action="/pet-hotels" method="GET">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-md-3">
                <h2 class="fw-bold mb-0">Daftar Pet Hotel</h2>
                <div class="d-flex pet-hotel-search-div justify-content-end mt-3 mt-md-0">
                    @if (request()->get('search'))
                        <input type="text" name="search"
                            class="form-control me-4 fw-medium pet-hotel-search-box" placeholder="Cari Pet Hotel"
                            value="{{ request()->get('search') }}">
                    @else
                        <input type="text" name="search"
                            class="form-control me-4 fw-medium pet-hotel-search-box"
                            placeholder="Cari Pet Hotel">
                    @endif
                    <button class="btn btn-secondary fw-semibold" type="submit">Cari</button>
                </div>
            </div>
            <div class="row d-flex justify-content-evenly my-4 pet-hotels-page-filter-card px-lg-5 px-4 py-4 mb-5">
                <div class="col-md-5 col-12 pe-md-4 pet-hotel-filter-right-border">
                    <label for="filterHouseStatus" class="mb-2" style="color: #676767;">Kisaran Harga</label>
                    <select name="price_range" class="form-select fw-medium" id="filterPetHotelPriceRange">
                        <option value="Semua" class="fw-medium">Semua</option>

                        @if (request()->get('price_range') == '<=60')
                            <option value="<=60" class="fw-medium" selected>≤ Rp60.000</option>
                        @else
                            <option value="<=60" class="fw-medium">≤ Rp60.000</option>
                        @endif

                        @if (request()->get('price_range') == '>60<=100')
                            <option value=">60<=100" class="fw-medium" selected>> Rp60.000 & ≤ Rp100.000</option>
                        @else
                            <option value=">60<=100" class="fw-medium">> Rp60.000 & ≤ Rp100.000</option>
                        @endif

                        @if (request()->get('price_range') == '>100')
                            <option value=">100" class="fw-medium" selected>> Rp100.000</option>
                        @else
                            <option value=">100" class="fw-medium">> Rp100.000</option>
                        @endif
                    </select>
                </div>
                <div class="col-md-5 col-12 px-md-4 mt-3 mt-md-0 pet-hotel-filter-right-border">
                    <label for="filterHouseType" class="mb-2" style="color: #676767;">Kota</label>
                    <select name="city" class="form-select fw-medium" id="filterPetHotelCity">
                        <option value="0" class="fw-medium">Semua</option>
                        @foreach ($cities as $city)
                            @if (request()->get('city') && request()->get('city') == $city->id)
                                <option value="{{ $city->id }}" class="fw-medium" selected>
                                    {{ $city->name }}
                                </option>
                            @else
                                <option value="{{ $city->id }}" class="fw-medium">{{ $city->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 col-6 d-flex align-items-end justify-content-center ps-md-4 ps-lg-5 mt-4 mt-md-0">
                    <button class="btn btn-primary fw-semibold py-2 w-100" type="submit">Cari</button>
                </div>
            </div>
        </form>

        @if (empty($pethotels))
            <div class="py-5 my-5">
                <p class="py-5 text-center fw-medium fs-3 my-5">Pet Hotel tidak ditemukan</p>
            </div>
        @else
        <div class="row justify-content-center">
            @foreach ($pethotels as $pethotel)
            <div class="col-6 px-md-3 px-3">
                <div class="pet-hotel-card d-flex justify-content-start flex-lg-row flex-column align-items-center mb-5">
                    <img src="{{ asset('/images/business/' . $pethotel->id . '/' . $pethotel->business_images->first()->image_name) }}"
                        alt="" class="pet-hotel-card-image">
                    <div class="pet-hotel-card-text px-4 py-4 py-lg-5">
                        <h3 class="fw-bold w-100 fs-3 text-start">{{ $pethotel->name }}</h3>
                        <p class="fw-regular mt-2 mb-3 w-100 fs-5 text-start">{{ $pethotel->city->name }}</p>
                        <div class="d-flex flex-row mb-2 align-items-center">
                            <i data-feather="map-pin" class="me-2 pet-hotel-preview-icons my-2 my-md-0"></i>
                            <p class="mb-0 fw-medium text-md-start w-75">
                                {{ $pethotel->address }}</p>
                        </div>
                        <div class="d-flex flex-row mb-2 align-items-center">
                            <i data-feather="phone" class="me-2 pet-hotel-preview-icons my-2 my-md-0"></i>
                            <p class="mb-0 fw-medium text-md-start">
                                {{ $pethotel->phone_number }}</p>
                        </div>
                        <div class="d-flex flex-row mb-2 align-items-center">
                            <i data-feather="clock" class="me-2 pet-hotel-preview-icons my-2 my-md-0"></i>
                            <p class="mb-0 fw-medium text-md-start">
                                {{ $pethotel->opening_hour . ' - ' . $pethotel->closing_hour }}</p>
                        </div>
                        <div class="d-flex flex-row mb-3 align-items-center">
                            <i data-feather="dollar-sign" class="me-2 pet-hotel-preview-icons my-2 my-md-0"></i>
                            <p class="mb-0 fw-medium text-md-start">
                                {{ $pethotel->price_per_day }}</p>
                        </div>
                        <div class="d-flex justify-content-lg-end justify-content-center">
                            {{-- <form action="announcement" method="GET"
                                class=" mt-2 mt-md-0 mb-2 mb-md-0">
                                <button class="btn btn-secondary fw-semibold py-2 px-4"
                                    type="submit">Lihat</button>
                            </form> --}}
                            <a href="https://wa.me/+6282271486565?text=Halo%20Kak,%20saya%20ingin%20melakukan%20reservasi%20Pet%20Hotel">
                                <button class="btn btn-secondary fw-semibold py-2 px-4"
                                    type="button">Pesan</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <div class="pb-4"></div>

    </div>
@endsection
