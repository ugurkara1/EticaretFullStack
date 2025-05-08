<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showForm(){
        return view("auth.login");
    }

    public function login(Request $request){
        $credentials = $request->only("email", "password");
        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)){
            $user = Auth::user();
            if(is_null($user->email_verified_at)){
                Auth::logout();
                alert()->warning('Bilgilendirme','Giriş yapabilmeniz için öncelikle mailinizi doğrulamanız gerekmektedir.');
                return redirect()->back();
            }

            // Doğrulanmışsa yönlendir
            return redirect()->intended('/admin');
        }
/*         dd($request->all());
 */
        alert()->error('Hata', 'Giriş bilgileriniz hatalı.');
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route(route: "index");
    }

}