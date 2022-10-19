<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function index()
    {
        $admin = DB::table('tbl_admin')
                    ->get();
    
            //tampilkan view admin dan kirim datanya ke view tersebut
        return view('admin/index',compact(['admin']));
    }
    public function create(){
        $admin = DB::table('tbl_admin')
        ->get();

        return view('admin/tambah',compact(['admin']));
    }
    public function store(request $request){
        $admin = Admin::create([
            'username' => $request->username,
            'password' => $request->password,
            'admin_level' => $request->admin_level,
            'admin_nama' => $request->admin_nama,
            'admin_status' => $request->admin_status
        ]);
        echo $admin->id_admin;

        return redirect('admin');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin/edit',compact(['admin']));
    }
    public function update($id, request $request){
        $admin = Admin::find($id);
        $admin->update($request->except('_token','Edit'));
        return redirect('admin');
    }
    public function destroy($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin');
    }
}
