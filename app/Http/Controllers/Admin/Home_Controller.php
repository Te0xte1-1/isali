<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Home_Controller extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login_store(Request $request)
    {
        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // إنشاء سيشن جديدة للمستخدم
            $request->session()->regenerate();
            return Redirect::intended('Dashboard');
        } else {

            return redirect()->back()->with(['error' => 'Email Or Password Not Correct']);
        }

    }
    public function Dashboard()
    {

        $complete = Isal::where('isal_status', 3)->count();
        $in_proccess = Isal::where('isal_status', 1)->count();
        $canceled = Isal::where('isal_status', 4)->count();
        $total_isal = Isal::get()->sum('id');
        return view('Main_Page.index', compact(['complete', 'in_proccess', 'canceled', 'total_isal']));

    }

    public function logout(Request $request)
    {
        // إزالة سيشن المستخدم
        $request->session()->invalidate();

        // تسجيل الخروج من الجلسة الحالية
        Auth::logout();

        // اعادة التوجيه إلى صفحة بعد تسجيل الخروج
        return redirect('login');
    }
}
