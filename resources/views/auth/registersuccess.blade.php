<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>PT. Vascomm Solusi Teknologi</title>
	    <meta name="description" content="PT. Vascomm Solusi Teknologi">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="shortcut icon" href="https://vascomm.co.id/package/img/favicon.png">
        
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/plugin.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css" />
    </head>
    <body>
        <main class="main-content">
            <div class="admin">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                            <div class="edit-profile">
                                <div class="edit-profile__logos">
                                    <a href="index.html">
                                        <img class="dark" src="https://vascomm.co.id/package/assets/logo_vascomm_panjang.png" alt="" />
                                        <img class="light" src="https://vascomm.co.id/package/assets/logo_vascomm_panjang.png" alt="" />
                                    </a>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="edit-profile__body mb-4">
                                            <h6 class="text-center mb-3">
                                                Registrasi Sukses!
                                            </h6>
                                            <p>
                                                Anda berhasil melakukan registrasi. Jika akun anda telah diapprove oleh admin, silakan menuju halaman login untuk masuk menggunakan akun yang telah anda daftarkan!
                                            </p>
                                        </div>
                                        <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                            <a href="{{ route('login') }}" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                Login
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div id="overlayer">
            <div class="loader-overlay">
                <div class="dm-spin-dots spin-lg">
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                    <span class="spin-dot badge-dot dot-primary"></span>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/dashboard/js/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/script.min.js') }}"></script>
        @include('sweetalert::alert')
    </body>
</html>
