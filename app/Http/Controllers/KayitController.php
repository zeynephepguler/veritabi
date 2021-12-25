<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KayitController extends Controller
{
  public function insert(Request $request)
    {
        $product = new Kayit();
        $product->telno = $request->get('telno');
        $product->ad = $request->get('ad');
        $product->soyad = $request->get('soyad');
        $product->save();
        return ('Kayıt başarılı');
    }
}
