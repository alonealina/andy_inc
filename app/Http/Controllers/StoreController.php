<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Store;
use DB;

class StoreController extends Controller
{
    public function index()
    {
        return view('store/index');
    }

    public function show($id)
    {
        $store = Store::find($id);

        return view('store/show', [
            'store' => $store,
        ]);
    }


}
