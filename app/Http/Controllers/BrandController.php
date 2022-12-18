<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;
use App\Models\News;
use App\Models\Stylebook;
use DB;

class BrandController extends Controller
{
    public function show($url)
    {
        $brand = Brand::whereUrl($url)->first();
        $news_list = News::whereBrand($url)->get();

        return view('brand/show', [
            'brand' => $brand,
            'news_list' => $news_list,
        ]);
    }

    public function stylebook($url)
    {
        $stylebook = Stylebook::whereBrand($url)->orderBy('page', 'asc')->get();

        return view('stylebook', [
            'stylebook' => $stylebook,
        ]);
    }

    public function girl_list()
    {
        $girls = Girl::paginate(10);

        return view('admin/girl_list', [
            'girls' => $girls ]);
    }

    public function girl_regist()
    {
        return view('admin/girl_regist');
    }

    public function girl_store(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $girl = new Girl;

        $request = $request->all();
        $fill_data = [
            'title' => $request['title'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $girl->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/girl_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function girl_edit($id)
    {
        $girl = Girl::find($id);

        return view('admin/girl_edit', [
            'girl' => $girl,
        ]);
    }

    public function girl_update(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $girl = Girl::find($request['id']);

        $fill_data = [
            'title' => $request['title'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $girl->update($fill_data);
            DB::commit();
            return redirect()->to('admin/girl_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function girl_delete($id)
    {
        DB::beginTransaction();
        try {
            Girl::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.girl_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }


}
