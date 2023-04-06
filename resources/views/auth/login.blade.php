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
                                    <div class="card-header">
                                        <div class="edit-profile__title">
                                            <h6>Halaman Login</h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <div class="alert-content">
                                                    <p>
                                                        {{ Session::get('error') }}
                                                    </p>
                                                    <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">
                                                        <img src="{{ asset('assets/dashboard/img/svg/x.svg') }}" alt="x" class="svg" aria-hidden="true" />
                                                    </button>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="edit-profile__body">
                                            <form action="{{ route('login') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-25">
                                                    <label for="username">Username/Email</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="nama@domain.com" />
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="password">Password</label>
                                                    <div class="position-relative">
                                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
                                                        <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></div>
                                                    </div>
                                                </div>
                                                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button type="submit" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                        Masuk
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <hr class="mt-5 mb-3">
                                        <p class="mb-0 text-center">
                                            Belum punya akun?
                                            <a href="{{ route('register.index') }}" class="color-primary">
                                                Daftar
                                            </a>
                                        </p>
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
