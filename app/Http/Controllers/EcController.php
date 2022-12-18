<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Item;
use App\Models\ItemSize;
use App\Models\Size;
use App\Models\Brand;
use App\Models\AdminUser;

class EcController extends Controller
{
    public function index()
    {
        $news_list = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->take(5)->get();
        return view('ec.index', [
            'news_list' => $news_list,
        ]);
    }

    // public function search(Request $request)
    // {
    //     $filter_array = $request->all();
    //     $pref = null;

    //     if (isset($filter_array['pref'])) {
    //         $pref = $filter_array['pref'];
    //     }

    //     $query = Girl::select('*');

    //     if (isset($pref)) {
    //         $query->where('pref', $pref);
    //     }

    //     $girl_list = $query->paginate(10);

    //     return view('search', [
    //         'girl_list' => $girl_list,
    //     ]);
    // }

    public function company()
    {
        return view('ec.company');
    }

    public function disclaimer()
    {
        return view('ec.disclaimer');
    }

    public function terms()
    {
        return view('ec.terms');
    }

    public function contact()
    {
        return view('ec.contact');
    }

    public function collection()
    {
        return view('ec.collection');
    }

    public function topics()
    {
        return view('ec.topics');
    }

    public function new_item()
    {
        return view('ec.new_item');
    }

    public function price_down()
    {
        return view('ec.price_down');
    }

    public function notice()
    {
        return view('ec.notice');
    }

    public function search()
    {
        return view('ec.search');
    }

    public function silhouette()
    {
        return view('ec.silhouette');
    }

    public function model()
    {
        return view('ec.model');
    }

    public function complex()
    {
        return view('ec.complex');
    }

    public function cart()
    {
        return view('ec.cart');
    }

    public function info_form()
    {
        return view('ec.info_form');
    }

    public function time_form()
    {
        return view('ec.time_form');
    }

    public function order_confirm()
    {
        return view('ec.order_confirm');
    }

    public function order_complete()
    {
        return view('ec.order_complete');
    }

    public function favorite()
    {
        return view('ec.favorite');
    }

    public function item_detail($id)
    {
        $item = Item::find($id);
        $item_size_list = ItemSize::where('item_id', $id)->join('size', 'item_size.size_id', '=', 'size.id')->orderBy('size_id', 'asc')->get();
        $brand_name = Brand::where('url', $item->brand)->first()->name;

        return view('ec.item_detail', [
            'item' => $item,
            'item_size_list' => $item_size_list,
            'brand_name' => $brand_name,
        ]);
    }

    public function new_arrival()
    {
        return view('ec.new_arrival');
    }

    public function recommend()
    {
        return view('ec.recommend');
    }

    public function ranking()
    {
        return view('ec.ranking');
    }

    public function brand()
    {
        return view('ec.brand');
    }



    

    public function login(Request $request)
    {
        $admin_user = AdminUser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('admin/girl_list'); 
            }
        }

        return view('admin/login', ['login_error' => '1']);
    }
    
    public function logout(Request $request)
    {
        session()->forget('login_id');
        return redirect('admin/login');
    }
}
