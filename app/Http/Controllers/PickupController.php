<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pickup;
use DB;

class PickupController extends Controller
{
    public function index()
    {
        $pickup = Pickup::where('release_flg', 1)->orderBy('id', 'desc')->get();
        return view('pickup/index', [
            'pickup_list' => $pickup,
        ]);
    }

    public function show($id)
    {
        $pickup = Pickup::find($id);

        return view('pickup/show', [
            'pickup' => $pickup,
        ]);
    }

    public function pickup_list()
    {
        $pickup_list = Pickup::paginate(10);

        return view('admin/pickup_list', [
            'pickup_list' => $pickup_list ]);
    }

    public function pickup_regist()
    {
        return view('admin/pickup_regist');
    }

    public function pickup_store(Request $request)
    {
        $rules = [
            'content' => 'required',
            'img' => 'max:10240',
        ];

        $messages = [
            'content.required' => '内容を入力してください',
            'img.max' => 'ファイルは10MB未満でお願いします',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $pickup = new Pickup;

        if ($img = $request->img) {
            $img_name = 'pickup_' . time() . $img->getClientOriginalName();
        } else {
            $img_name = null;
        }

        $request = $request->all();
        $fill_data = [
            'content' => $request['content'],
            'img' => $img_name,
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $pickup->fill($fill_data)->save();

            if ($img_name) {
                $target_path = public_path('img/pickup/');
                $img->move($target_path, $img_name);    
            }

            DB::commit();
            return redirect()->to('admin/pickup_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function pickup_edit($id)
    {
        $pickup = Pickup::find($id);

        return view('admin/pickup_edit', [
            'pickup' => $pickup ]);
    }

    public function pickup_update(Request $request)
    {
        $rules = [
            'content' => 'required',
            'img' => 'max:10240',
        ];

        $messages = [
            'content.required' => '内容を入力してください',
            'img.max' => 'ファイルは10MB未満でお願いします',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        if ($img = $request->img) {
            $img_name = 'menu_' . time() . $img->getClientOriginalName();
        } else {
            $img_name = null;
        }

        $request = $request->all();
        $pickup = Pickup::find($request['id']);

        $fill_data = [
            'content' => $request['content'],
        ];

        if (isset($img_name)) {
            $fill_data['img'] = $img_name;
        }

        $old_img = $pickup->img;

        DB::beginTransaction();
        try {
            $pickup->update($fill_data);

            $target_path = public_path('img/pickup/');

            if ($img && $old_img) {
                if(file_exists($target_path . $old_img)){
                    unlink($target_path . $old_img);
                }
                $img->move($target_path, $img_name);
            }

            DB::commit();
            return redirect()->to('admin/pickup_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function pickup_delete($id)
    {
        DB::beginTransaction();
        try {
            Pickup::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.pickup_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

}
