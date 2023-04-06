@extends('dashboard.master.base')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main mt-0">
                <h4 class="text-capitalize breadcrumb-title">
                    Dashboard
                </h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-12 mb-25">
            <div class="card banner-feature--18 new d-flex bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-body px-25">
                                <h4 class="banner-feature__heading color-dark mb-4">
                                    Hai {{ Auth::user()->name }}, selamat datang di dashboard administrator!
                                </h4>
                                <p class="mb-1">
                                    Menggunakan Javsccript (Adonis/Next/Express) / PHP Laravel, buatlah website sederhana dengan fitur sebagai berikut:
                                </p>
                                <ol class="pl-2" type="1">
                                    <li>
                                        Halaman home yang menampilkan banner dan produk yang dijual.
                                    </li>
                                    <li>
                                        Registrasi customer dilengkapi upload foto selfie.
                                    </li>
                                    <li>
                                        Login Admin
                                        <ol class="pl-2" type="a">
                                            <li>
                                                Setelah login, admin bisa mengakses halaman list pengguna.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Login Customer
                                        <ol class="pl-2" type="a">
                                            <li>
                                                Setelah login, customer Kembali ke halaman home dengan account yang sudah teregister.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Halaman list pengguna yang sudah registrasi.
                                        <ol class="pl-2" type="a">
                                            <li>
                                                Detail masing-masing pengguna
                                            </li>
                                            <li>
                                                Approve registrasi pengguna.
                                            </li>
                                            <li>
                                                Hanya bisa diakses oleh admin.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Gunakan database migration.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection