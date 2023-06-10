<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Admin\UpdateAdminDesaRequest;

class AdminDesaController extends Controller
{
    public function index()
    {
        $admin_desa = User::where('user_type', User::USER_TYPE_ADMIN)
            ->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.desa.index', compact('admin_desa'));
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        $data['user_type'] = User::USER_TYPE_ADMIN;
        $password = Carbon::parse($data['tanggal_lahir'])->format('dmY');
        $data['password'] = Hash::make($password);

        User::create($data);

        return redirect()->route('admin.desa.index')->with('success', 'Berhasil menambahkan admin desa');
    }

    public function show($id)
    {
        $admin_desa = User::findOrFail($id);

        return view('admin.desa.show', compact('admin_desa'));
    }

    public function edit($id)
    {
        $admin_desa = User::findOrFail($id);

        return view('admin.desa.edit', compact('admin_desa'));
    }

    public function update(UpdateAdminDesaRequest $request, $id)
    {
        $data = $request->validated();

        $admin_desa = User::findOrFail($id);

        $admin_desa->update($data);

        return redirect()->route('admin.desa.index')->with('success', 'Berhasil mengubah admin desa');
    }

    public function destroy($id)
    {
        $admin_desa = User::findOrFail($id);

        $admin_desa->delete();

        return redirect()->route('admin.desa.index')->with('success', 'Berhasil menghapus admin desa');
    }
}
