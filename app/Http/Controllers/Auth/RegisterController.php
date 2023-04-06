<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Services\UserService;
use Crypt;
use Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation.
    |
    */

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['role_id'] = Role::whereName('Customer')->first()->id;

        $user = $this->userService->store($data);

        Alert::success('Sukses', 'Registrasi berhasil!');
        return redirect()->route('register.success', Crypt::encrypt($user->id));
    }

    public function success($id)
    {
        $user = $this->userService->show(Crypt::decrypt($id));

        return view('auth.registersuccess', compact('user'));
    }
}
