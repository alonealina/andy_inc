<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Item;
use App\Models\ItemSize;
use App\Models\Size;
use App\Models\AdminUser;
use App\Models\Brand;

class CustomerController extends Controller
{
    public function index()
    {
        $topic_list = Item::orderBy('id', 'asc')->take(5)->get();
        $topic_first = $topic_list[0];
        unset($topic_list[0]);
        $topic_list_sp = Item::orderBy('id', 'asc')->take(2)->get();
        $news_list = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->take(5)->get();
        return view('cs.index', [
            'news_list' => $news_list,
            'topic_first' => $topic_first,
            'topic_list' => $topic_list,
            'topic_list_sp' => $topic_list_sp,
        ]);
    }

    public function topics($genre)
    {
        if ($genre == 'all') {
            $topic_list = Item::orderBy('id', 'asc')->get();
        } elseif ($genre == 'ship') {
            $topic_list = Item::where('ship_flg', 1)->get();
        } elseif ($genre == 'new') {
            $topic_list = Item::where('new_flg', 1)->get();
        } elseif ($genre == 'deadline') {
            $topic_list = Item::where('deadline_flg', 1)->get();
        } elseif ($genre == 'add') {
            $topic_list = Item::where('add_img_flg', 1)->get();
        }

        return view('cs.topics', [
            'topic_list' => $topic_list,
            'genre' => $genre,
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

    public function stylebook()
    {
        return view('stylebook');
    }

    public function company()
    {
        return view('cs.company');
    }

    public function disclaimer()
    {
        return view('cs.disclaimer');
    }

    public function terms()
    {
        return view('cs.terms');
    }

    public function contact()
    {
        return view('cs.contact');
    }

    public function collection()
    {
        return view('cs.collection');
    }


    public function new_item($brand)
    {
        if ($brand == 'all') {
            $item_list = Item::where('new_flg', 1)->select('items.id as id', 'items.name as name', 'brand.name as brand_name')
            ->leftJoin('brand', 'items.brand', '=', 'brand.url')->get();
        } else {
            $item_list = Item::where('new_flg', 1)->where('items.brand', $brand)->select('items.id as id', 'items.name as name', 'brand.name as brand_name')
            ->leftJoin('brand', 'items.brand', '=', 'brand.url')->get();
        }

        $item_size_list_all = ItemSize::join('size', 'item_size.size_id', '=', 'size.id')->orderBy('size_id', 'asc')->get();

        return view('cs.new_item', [
            'item_list' => $item_list,
            'item_size_list_all' => $item_size_list_all,
            'brand' => $brand,
        ]);
    }

    public function price_down()
    {
        $item_list = Item::where('price_down_flg', 1)->get();

        return view('cs.price_down', [
            'item_list' => $item_list,
        ]);
    }

    public function add_production()
    {
        $item_list = Item::where('add_production_flg', 1)->get();

        return view('cs.add_production', [
            'item_list' => $item_list,
        ]);
    }

    public function item_detail($id)
    {
        $item = Item::find($id);
        $item_size_list = ItemSize::where('item_id', $id)->join('size', 'item_size.size_id', '=', 'size.id')->orderBy('size_id', 'asc')->get();
        $brand_name = Brand::where('url', $item->brand)->first()->name;

        return view('cs.item_detail', [
            'item' => $item,
            'item_size_list' => $item_size_list,
            'brand_name' => $brand_name,
        ]);
    }

    public function calendar()
    {
        return view('cs.calendar');
    }

    public function search()
    {
        return view('cs.search');
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
