<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Item;
use App\Models\Brand;
use DB;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::where('release_flg', 1)->orderBy('id', 'desc')->get();
        return view('item/index', [
            'item_list' => $item,
        ]);
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view('item/show', [
            'item' => $item,
        ]);
    }

    public function item_list()
    {
        $item_list = Item::select('items.id as id', 'items.name as name', 'brand.name as brand_name', 'text', 'price_tax', 'deadline')
        ->join('brand', 'items.brand', '=', 'brand.url')->orderBy('id')->paginate(10);

        return view('admin/item_list', [
            'item_list' => $item_list ]);
    }

    public function item_regist()
    {
        $brand_list = Brand::get();

        return view('admin/item_regist', [
            'brand_list' => $brand_list ]);
    }

    public function item_store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'deadline' => 'required',
            'price' => 'required',
            'img' => 'max:10240',
        ];

        $messages = [
            'name.required' => '名前を入力してください',
            'deadline.required' => '納期を入力してください',
            'price.required' => '価格を入力してください',
            'img.max' => 'ファイルは10MB未満でお願いします',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $item = new Item;

        if ($img = $request->img) {
            $img_name = 'item_' . time() . $img->getClientOriginalName();
        } else {
            $img_name = null;
        }

        $request = $request->all();

        $fill_data = [
            'name' => $request['name'],
            'category' => $request['brand'],
            'deadline' => $request['deadline'],
            'brand' => $request['brand'],
            'size' => 1, //後で消す可能性あり
            'color' => 1, //後で消す可能性あり
            'price' => $request['price'],
            'price_tax' => $request['price'] * 1.1,
            'elasticity' => $request['elasticity'],
            'lining' => $request['lining'],
            'translucency' => $request['translucency'],
            'text' => $request['text'],
        ];

        $genres = $request['genre'];
        foreach ($genres as $key => $value) {
            $fill_data = array_merge($fill_data, [$key => $value]);
        }

        DB::beginTransaction();
        try {
            $item->fill($fill_data)->save();

            if ($img_name) {
                $target_path = public_path('img/item/');
                $img->move($target_path, $img_name);    
            }

            DB::commit();
            return redirect()->to('admin/item_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function item_edit($id)
    {
        $item = Item::find($id);
        $brand_list = Brand::get();

        return view('admin/item_edit', [
            'item' => $item,
            'brand_list' => $brand_list ]);
    }

    public function item_update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'deadline' => 'required',
            'price' => 'required',
            'img' => 'max:10240',
        ];

        $messages = [
            'name.required' => '名前を入力してください',
            'deadline.required' => '納期を入力してください',
            'price.required' => '価格を入力してください',
            'img.max' => 'ファイルは10MB未満でお願いします',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        if ($img = $request->img) {
            $img_name = 'item_' . time() . $img->getClientOriginalName();
        } else {
            $img_name = null;
        }

        $request = $request->all();
        $item = Item::find($request['id']);

        $fill_data = [
            'name' => $request['name'],
            'category' => $request['brand'],
            'deadline' => $request['deadline'],
            'brand' => $request['brand'],
            'size' => 1, //後で消す可能性あり
            'color' => 1, //後で消す可能性あり
            'price' => $request['price'],
            'price_tax' => $request['price'] * 1.1,
            'elasticity' => $request['elasticity'],
            'lining' => $request['lining'],
            'translucency' => $request['translucency'],
            'text' => $request['text'],
        ];

        $genres = $request['genre'];
        foreach ($genres as $key => $value) {
            $fill_data = array_merge($fill_data, [$key => $value]);
        }

        if (isset($img_name)) {
            $fill_data['img'] = $img_name;
        }

        $old_img = $item->img;

        DB::beginTransaction();
        try {
            $item->update($fill_data);

            $target_path = public_path('img/item/');

            if ($img && $old_img) {
                if(file_exists($target_path . $old_img)){
                    unlink($target_path . $old_img);
                }
                $img->move($target_path, $img_name);
            }

            DB::commit();
            return redirect()->to('admin/item_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function item_delete($id)
    {
        DB::beginTransaction();
        try {
            Item::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.item_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

}
