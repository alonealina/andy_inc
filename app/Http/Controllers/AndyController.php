<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Mail;

class AndyController extends Controller
{
    public function index()
    {
        $news_list = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->take(5)->get();
        return view('index', [
            'news_list' => $news_list,
        ]);
    }

    public function stylebook()
    {
        return view('stylebook');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }

    public function mail_send(Request $request)
    {
    	$data = ['name' => $request->name,
                'mail' => $request->mail,
                'tel' => $request->tel,
                'content' => $request->content,];

        $mail = $request->mail;

        Mail::send('mail', $data, function($message) use ($mail){
            $message->to($mail, 'Test')->subject('【Andy】お問い合わせ完了のご案内');
        });

        Mail::send('mail_admin', $data, function($message) {
            $message->to('info@andy-creative.com', 'Test')->subject('【Andy】お問い合わせ受け付けのお知らせ');
        });

        return redirect()->to('contact');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function anime_test()
    {
        return view('anime_test');
    }

    public function login(Request $request)
    {
        $admin_user = AdminUser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('admin/news_list'); 
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
