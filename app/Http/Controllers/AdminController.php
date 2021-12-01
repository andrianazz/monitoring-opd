<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Government;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File as FacadesFile;


class AdminController extends Controller
{
    //
    public function index()
    {
        $data = User::find(1);
        $title = 'Akun';
        return view('admin.index', compact(['title', 'data']));
    }

    public function edit()
    {
        $data = User::find(1);
        $government = Government::all();
        $title = 'Edit Akun';
        return view('admin.edit', compact(['title', 'data', 'government']));
    }

    public function update(Request $request)
    {

        if ($request->password == null && $request->password2 == null) {

            $data = User::find(1);

            $data->update($request->all());
            return redirect()->route('admin');
        }
    }

    public function editPassword()
    {
        $data = User::find(1);
        $title = 'Edit Password Akun';
        return view('admin.editpassword', compact(['data', 'title']));
    }

    public function updatePassword(Request $request)
    {
        $data = User::find(1);

        $passwordLama = Hash::check($request->password, $data->password);
        if ($passwordLama) {
            # code...
            $passwordBaru = $request->newPassword;
            $passwordBaru2 = $request->newPassword2;


            if ($passwordBaru == $passwordBaru2) {
                # code...
                $password = Hash::make($passwordBaru);
                $data->update([
                    'password' => $password,
                ]);
                return redirect()->route('admin');
            } else {
                return redirect('admin/edit-password')->with('message', 'Password tidak sama');
            }
        } else {
            return redirect('admin/edit-password')->with('message', 'Password Lama salah');
        }
    }

    public function updatePhoto(Request $request)
    {
        $data = User::find(1);

        $image_path = $data->image;


        if (FacadesFile::exists($image_path)) {
            if ($image_path != 'images/user/img.jpg') {
                FacadesFile::delete($image_path);
            }
        }


        if ($request->hasFile('image')) {
            $nameImage = $request->file('image')->move('images/user/', $request->file('image')->getClientOriginalName());
            $data->image = 'images/user/' . $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admin');
    }
}
