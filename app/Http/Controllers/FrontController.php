<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Menu;
use App\Models\Modul;
use App\Models\Paket;
use App\Models\PaketTermasuk;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $setting = Setting::all(); 
        $menus = Menu::orderBy('id')->get(); 
        $pakets = Paket::orderBy('id')->get();
        $termasuk = PaketTermasuk::orderBy('id')->get(); 
        $moduls = Modul::orderBy('id')->get(); 
        $footers = Footer::orderBy('id')->get(); 

        $arr_bank = array('bca', 'mandiri', 'bni', 'visa','mastercard','atmbersama', 'permata','prima','alto');

        return view('index', compact('setting', 'menus', 'pakets', 'termasuk', 'moduls', 'footers', 'arr_bank'));
    }
}
