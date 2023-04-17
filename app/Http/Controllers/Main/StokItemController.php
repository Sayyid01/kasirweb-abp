<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StokItemController extends Controller
{
    //Memanggil data stok_table untuk dimunculkan di pages.stock
    public function getTableStok()
    {
        $stok = DB::table('stok_item')->get();

        return view('pages.stok', compact('stok'));
    }

    //Menambah data stok_item
    public function tambahStok(Request $request)
    {
        DB::table('stok_item')
            ->insert([
                'nama_barang' => $request->nama_barang,
                'jml_stok' => $request->jml_stok,
                'expired' => $request->expired,
                'last_update' => $request->last_update
            ]);
        return redirect('/stok');
    }

    //Update data stok_item
    public function updateStok(Request $request)
    {
        DB::table('stok_item')
            ->where('id', $request->id)
            ->update([
                'nama_barang' => $request->nama_barang,
                'jml_stok' => $request->jml_stok,
                'expired' => $request->expired,
                'last_update' => $request->last_update
            ]);
        return redirect('/stok');
    }

    //Delete data stok_item
    public function deleteStok($id)
    {
        DB::table('stok_item')
            ->where('id', $id)
            ->delete();
    }
}
