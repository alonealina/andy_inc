<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Store;
use DB;

class CsStoreController extends Controller
{
    public function index()
    {
        return view('cs/store/index');
    }

    public function show($id)
    {
        $store = Store::find($id);

        return view('cs/store/show', [
            'store' => $store,
        ]);
    }


}
