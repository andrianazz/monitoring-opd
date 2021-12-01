<?php

namespace App\Http\Controllers;

use App\Models\Government;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File as FacadesFile;


class OfficerController extends Controller
{
    //
    public function index()
    {
        $data = User::all()->skip(1);

        $title = 'Data Pegawai';
        return view('officer.index', compact(['title', 'data']));
    }

    public function add()
    {
        $government = Government::all()->skip(1);
        $title = 'Tambah Pegawai';
        return view('officer.add', compact(['title', 'government']));
    }

    public function insert(Request $request)
    {
        if ($request->password == $request->password2) {
            User::create([
                'name' => $request->name,
                'user_id' => $request->user_id,
                'nip' => $request->nip,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'government_id' => $request->government_id,
            ]);

            return redirect()->route('officer');
        }

        return redirect()->route('add_officer');
    }

    public function edit($id)
    {
        $officer = User::find($id);

        $government = Government::all();

        $title = 'Edit Pegawai';
        return view('officer.edit', compact(['title', 'officer', 'government']));
    }

    public function update(Request $request, $id)
    {

        if ($request->password == null && $request->password2 == null) {

            $data = User::find($id);

            $data->update($request->all());
            return redirect()->back();
        }

        return redirect()->route('edit_officer');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->route('officer');
    }

    public function editPassword($id)
    {
        $data = User::find($id);
        $title = 'Edit Password';
        return view('officer.editpassword', compact(['title', 'data']));
    }

    public function updatePassword(Request $request, $id)
    {
        $data = User::find($id);

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
                return redirect()->route('officer');
            } else {
                return redirect('officer/' . $id . '/edit-password')->with('message', 'Password tidak sama');
            }
        } else {
            return redirect('officer/' . $id . '/edit-password')->with('message', 'Password Lama salah');
        }
    }

    public function updatePhoto(Request $request, $id)
    {
        $data = User::find($id);

        $image_path = $data->image;


        # code...
        if (FacadesFile::exists($image_path)) {
            if ($image_path != 'images/user.png') {
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
