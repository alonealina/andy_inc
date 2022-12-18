<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Store;
use DB;

class EcStoreController extends Controller
{
    public function index()
    {
        return view('ec/store/index');
    }

    public function show($id)
    {
        $store = Store::find($id);

        return view('ec/store/show', [
            'store' => $store,
        ]);
    }


}
