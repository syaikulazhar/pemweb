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

    public function viewcart()
    {
        Session::put('name', 'ProductID');
        return view('viewcart');
    }
}
