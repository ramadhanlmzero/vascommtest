@extends('dashboard.master.base')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main mt-0">
                <h4 class="text-capitalize breadcrumb-title">
                    Data User
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
                                User
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-12 mb-25">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th class="text-center">
                                        <span class="userDatatable-title">No.</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="userDatatable-title">Foto.</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Nama</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Username</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Email</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Role</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th class="actions text-center">
                                        <span class="userDatatable-title">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td class="text-center">
                                            {{ $index+1 }}
                                        </td>
                                        <td class="text-center">
                                            @if ($user->photo)
                                                <img class="radius-xs img-fluid order-bg-opacity-primary" src="{{ $user->photopath }}" width="50">
                                            @else
                                                <img class="radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('assets/dashboard/img/nopic.jpg') }}" width="50">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->role->name }}
                                        </td>
                                        <td>
                                            @if ($user->is_approved)
                                                <span class="bg-opacity-success color-success userDatatable-content-status active">Approved</span>
                                            @else
                                                <span class="bg-opacity-danger color-danger userDatatable-content-status active">Not Approved Yet</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="table-actions">
                                                @if (!$user->is_approved)
                                                    <a href="{{ route('dashboard.user.approve', Crypt::encrypt($user->id)) }}" title="Approve" onclick="return confirm('Apakah anda yakin ingin approve user ini?')">
                                                        <img class="svg" src="{{ asset('assets/dashboard/img/svg/check-square.svg') }}">
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection