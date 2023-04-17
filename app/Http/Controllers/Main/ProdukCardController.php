<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class ProdukCardController extends Controller
{
    public function getTableProduk()
    {
        $produkDrink = DB::table('produk_drink')->get();
        $produkFood = DB::table('produk_food')->get();

        return view('pages.produk', compact('produkDrink', 'produkFood'));
    }

    function getGambarMenu($filename)
    {
        $files = public_path("/gambar_menu" . '/' . $filename);
        $headers = array(
            'Content-Type: image/jpeg', 'Content-Type: image/png',
        );
        return response()->file($files, $headers);
    }

    public function tambahMenuDrink(Request $request)
    {

        $request->validate([
            'foto_menu' => 'required|image|max:2048',
        ]);

        $fileName = Str::of('GMBRDRINK')->basename() . '-' . time() . '.' . $request->file('foto_menu')->extension();

        $request->file('foto_menu')->move(public_path('gambar_menu'), $fileName);

        DB::table('produk_drink')
            ->insert([
                'nama_menu' => $request->nama_menu,
                'foto_menu' => $fileName,
                'keterangan' => $request->keterangan,
                'jml_stok' => $request->jml_stok,
                'last_update' => $request->last_update
            ]);


        return redirect('/produk');
    }

    public function updateMenuDrink(Request $request)
    {
        DB::table('produk_drink')
            ->where('id', $request->id)
            ->update([
                'nama_menu' => $request->nama_menu,
                'keterangan' => $request->keterangan,
                'jml_stok' => $request->jml_stok,
                'last_update' => $request->last_update
            ]);
        return redirect('/produk');
    }

    //Delete data Produk_Drink
    public function deleteDrinkItem($id)
    {
        $filename = DB::table('produk_drink')
            ->where('id', $id)
            ->value('foto_menu');

        if (Storage::delete('public/gambar_menu/' . $filename)) {
            DB::table('produk_drink')
                ->where('id', $id)
                ->delete();
        }
    }

    public function tambahMenuFood(Request $request)
    {

        $request->validate([
            'foto_menu' => 'required|image|max:2048',
        ]);

        $fileName = Str::of('GMBRFOOD')->basename() . '-' . time() . '.' . $request->file('foto_menu')->extension();

        $request->file('foto_menu')->move(public_path('gambar_menu'), $fileName);

        DB::table('produk_food')
            ->insert([
                'nama_menu' => $request->nama_menu,
                'foto_menu' => $fileName,
                'keterangan' => $request->keterangan,
                'jml_stok' => $request->jml_stok,
                'last_update' => $request->last_update
            ]);


        return redirect('/produk');
    }

    public function updateMenuFood(Request $request)
    {
        DB::table('produk_food')
            ->where('id', $request->id)
            ->update([
                'nama_menu' => $request->nama_menu,
                'keterangan' => $request->keterangan,
                'jml_stok' => $request->jml_stok,
                'last_update' => $request->last_update
            ]);
        return redirect('/produk');
    }

    //Delete data Produk_Drink
    public function deleteFoodItem($id)
    {
        $filename = DB::table('produk_food')
            ->where('id', $id)
            ->value('foto_menu');

        if (Storage::delete('public/gambar_menu/' . $filename)) {
            DB::table('produk_food')
                ->where('id', $id)
                ->delete();
        }
    }

    public function getTableProdukKasir()
    {
        $produkDrink = DB::table('produk_drink')->get();
        $produkFood = DB::table('produk_food')->get();

        return view('pages.produkKasir', compact('produkDrink', 'produkFood'));
    }
}
