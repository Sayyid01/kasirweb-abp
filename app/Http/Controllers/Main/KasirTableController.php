<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KasirTableController extends Controller
{
    public function getDataKasir()
    {
        $kasirData = DB::table('kasirs')->get();

        return view('pages.kasir', compact('kasirData'));
    }

    //Menambah data Kasir baru
    public function tambahKasirData(Request $request)
    {
        $comparison = strcmp($request->password, $request->confirm_password);


        if ($comparison == 0) {
            Kasir::create([
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'created_at' => $request->created_at,
                    'updated_at' => $request->updated_at
                ]);
        }

        return redirect('/kasir-data');
    }

    public function updateKasirData(Request $request)
    {
        DB::table('kasirs')
            ->where('id', $request->id)
            ->update([
                'name' => $request->nama,
                'email' => $request->email
            ]);

        $comparison = strcmp($request->password, $request->confirmPassword);

        if ($comparison == 0) {
            DB::table('kasirs')
                ->update([
                    'password' => bcrypt($request->password)
                ]);
        }

        return redirect('/kasir-data');
    }

    public function deleteKasirData($id)
    {
        DB::table('kasirs')
            ->where('id', $id)
            ->delete();
    }
}
