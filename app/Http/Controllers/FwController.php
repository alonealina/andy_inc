<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Item;
use App\Models\ItemSize;
use App\Models\Size;
use App\Models\Brand;
use App\Models\AdminUser;

class FwController extends Controller
{
    public function index()
    {
        return view('fw.index');
    }

    public function new_dress()
    {
        return view('fw.new_dress');
    }

    public function catalog_an()
    {
        return view('fw.catalog_an');
    }

    public function catalog_andy()
    {
        return view('fw.catalog_andy');
    }

    public function catalog_gms()
    {
        return view('fw.catalog_gms');
    }

    public function cover_girl()
    {
        return view('fw.cover_girl');
    }

    public function bar()
    {
        return view('fw.bar');
    }

    public function noa_an()
    {
        return view('fw.noa_an');
    }

    public function famous()
    {
        return view('fw.famous');
    }

    public function pickup()
    {
        return view('fw.pickup');
    }

    public function dress_restaurant()
    {
        return view('fw.dress_restaurant');
    }

    public function archivio()
    {
        return view('fw.archivio');
    }

    public function zara()
    {
        return view('fw.zara');
    }

    public function spur()
    {
        return view('fw.spur');
    }

    public function maria_rui()
    {
        return view('fw.maria_rui');
    }

    public function santa()
    {
        return view('fw.santa');
    }

    public function susukino()
    {
        return view('fw.susukino');
    }

    public function birthday()
    {
        return view('fw.birthday');
    }

    public function sugar()
    {
        return view('fw.sugar');
    }

    public function cosme()
    {
        return view('fw.cosme');
    }

    public function hokkaido()
    {
        return view('fw.hokkaido');
    }

    public function soumei()
    {
        return view('fw.soumei');
    }

    public function pet()
    {
        return view('fw.pet');
    }

    public function fortune()
    {
        return view('fw.fortune');
    }

    public function enrike()
    {
        return view('fw.enrike');
    }

    public function sns()
    {
        return view('fw.sns');
    }

    public function model_list()
    {
        return view('fw.model_list');
    }

    public function shop_list()
    {
        return view('fw.shop_list');
    }

    public function contact()
    {
        return view('fw.contact');
    }

    public function about()
    {
        return view('fw.about');
    }


}
