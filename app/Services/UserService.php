<?php

namespace App\Services;

use App\Models\User;
use Storage;
use File;
use DB;

class UserService 
{
    public function index()
    {
        $users = User::get();

        return $users;
    }

    public function show($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function store($data)
    {
        DB::beginTransaction();

        $data['photo'] = $this->storePhoto($data['photo']);

        $user = User::create($data);

        DB::commit();
        
        return $user;
    }

    public function update($id, $data)
    {
        DB::beginTransaction();

        $user = $this->show($id);

        $data['photo'] = $this->updatePhoto($id, $data['photo']);

        $user->update($data);

        DB::commit();

        return $user;
    }

    public function delete($id)
    {
        DB::beginTransaction();

        $this->deleteFile($id);

        $user = $this->show($id);
        $result = $user->delete();

        DB::commit();

        return $result;
    }

    public function storePhoto($file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        Storage::disk('user_photo')->put($filename,  File::get($file));

        return $filename;
    }

    public function updatePhoto($id, $file)
    {
        $this->deleteFile($id);

        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        Storage::disk('user_photo')->put($filename,  File::get($file));

        return $filename;
    }

    public function deletePhoto($id)
    {
        $result = $this->show($id);
        if ($result) {
            Storage::disk('user_photo')->delete($result->photo1);
            return true;
        }

        return false;
    }

    public function approve($id)
    {
        $user = $this->show($id);

        $user->update(['is_approved' => true]);

        return $user;
    }
}