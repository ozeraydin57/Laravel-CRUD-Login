<?php

namespace App\Http\Controllers;

use App\Yazi;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function kaydet(Request $request)
    {
        $kaydet = new Yazi([
            'Baslik' => $request->get("Baslik"),
            'Icerik' => $request->get("Icerik"),
            'OkumaSayisi' => 0
        ]);
        $kaydet->save();

        return redirect("/yazilistele");
    }

    public function Goster()
    {
        return view('formdanverial');
    }

    public function Listele()
    {
        $yazilar = Yazi::all();
        return view("yazilistele")->with("yazilar", $yazilar);
    }

    public function guncelle($id)
    {
        $yazibul = Yazi::find($id);
        return view('formguncelle')->with('yazibul', $yazibul);
    }

    public function yaziguncelle(Request $request, $id)
    {
        $yazibul = Yazi::find($id);
        $yazibul->Baslik = $request->get("Baslik");
        $yazibul->Icerik = $request->get("Icerik");
        $yazibul->update();

       return redirect("/yazilistele");
    }

    public function yazisil($id)
    {
        $yazibul = Yazi::find($id);
        $yazibul->delete();

        return redirect("/yazilistele");
    }
}
