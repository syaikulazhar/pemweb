<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\categorymodel;
use App\Models\categorymodels;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class controllernwind extends Controller
{
    public function viewall()
    {
        $selectall = categories::all();
        return view('page1', compact(['selectall']));
    }

    public function viewproducts($CategoryID)
    {
        $selectproducts = products::where('CategoryID', $CategoryID)->get();
        return view('page2', compact(['selectproducts']));
    }

    public function viewdetailproducts($ProductID)
    {
        $detailproducts = products::where('ProductID', $ProductID)->get();
        return view('page3', compact(['detailproducts']));
    }

    public function sessioncart(Request $view)
    {
        $view->session()->put('ProductName', $view->ProductName);
        $view->session()->put('qty', $view->qty);
        $view->session()->put('UnitPrice', $view->UnitPrice);
        $view->session()->put('total', $total = $view->UnitPrice * $view->qty);
        return view('page4');
    }

    public function viewcart(Request $view)
    {
        if ($view->session()->has('ProductName') && $view->session()->has('qty') && $view->session()->has('UnitPrice') && $view->session()->has('total')) {
            return view('page5', compact(['view']));
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }
}
