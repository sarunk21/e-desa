<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Admin\UpdateWargaDesaRequest;

class WargaDesaController extends Controller
{
    public function index()
    {
        $warga_desa = User::where('user_type', User::USER_TYPE_USER)
            ->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.warga-desa.index', compact('warga_desa'));
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        $data['phone_number'] = str_replace('-', '', $data['phone_number']);
        $data['user_type'] = User::USER_TYPE_USER;
        $password = Carbon::parse($data['tanggal_lahir'])->format('dmY');
        $data['password'] = Hash::make($password);

        User::create($data);

        return redirect()->route('warga.desa.index')->with('success', 'Berhasil menambahkan data warga desa');
    }

    public function show($id)
    {
        $warga_desa = User::findOrFail($id);

        return view('admin.warga-desa.show', compact('warga_desa'));
    }

    public function edit($id)
    {
        $warga_desa = User::findOrFail($id);

        return view('admin.warga-desa.edit', compact('warga_desa'));
    }

    public function update(UpdateWargaDesaRequest $request, $id)
    {
        $data = $request->validated();

        $warga_desa = User::findOrFail($id);

        $data['phone_number'] = str_replace('-', '', $data['phone_number']);
        $password = Carbon::parse($data['tanggal_lahir'])->format('dmY');
        $data['password'] = Hash::make($password);

        $warga_desa->update($data);

        return redirect()->route('warga.desa.index')->with('success', 'Berhasil mengubah data warga desa');
    }

    public function destroy($id)
    {
        $warga_desa = User::findOrFail($id);

        $warga_desa->delete();

        return redirect()->route('warga.desa.index')->with('success', 'Berhasil menghapus data warga desa');
    }
}
