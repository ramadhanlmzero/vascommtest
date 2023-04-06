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
                                            <h6>Halaman Registrasi Customer</h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="edit-profile__body">
                                            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="account-profile d-flex align-items-center mb-4">
                                                    <div class="ap-img pro_img_wrapper">
                                                        <input id="photo" type="file" name="photo" class="d-none" onchange="loadPicture(this)" />
                                                        <label for="photo">
                                                            <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" id="preview" src="{{ asset('assets/dashboard/img/nopic.jpg') }}" style="object-fit: cover;" alt="profile" />
                                                            <span class="cross" id="remove_pro_pic">
                                                                <img src="{{ asset('assets/dashboard/img/svg/camera.svg') }}" alt="camera" class="svg" />
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="account-profile__title">
                                                        <h6 class="fs-15 ms-20 fw-500 text-capitalize">
                                                            Foto Profil
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="name">Nama</label>
                                                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Muhamad Ramadhan" />
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" value="{{ old('username') }}" id="username" name="username" placeholder="ramadhan" />
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" value="{{ old('email') }}" id="email" name="email" placeholder="nama@domain.com" />
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="password">Password</label>
                                                    <div class="position-relative">
                                                        <input id="password" type="password" class="form-control" value="{{ old('password') }}" name="password" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="password_confirmation">Konfirmasi Password</label>
                                                    <div class="position-relative">
                                                        <input id="password_confirmation" type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button type="submit" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                        Daftar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <hr class="mt-5 mb-3">
                                        <p class="mb-0 text-center">
                                            Sudah punya akun?
                                            <a href="{{ route('login') }}" class="color-primary">
                                                Login
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
        <script>
            function loadPicture(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        jQuery('#preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        @include('sweetalert::alert')
    </body>
</html>
