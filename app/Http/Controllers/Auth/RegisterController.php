<?php

namespace App\Http\Controllers\Auth;
use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
class RegisterController extends Controller
{
    //
    public function showForm(){
        return view("auth.register");
    }
    public function register(RegisterRequest $request){

        $data=$request->only('name','email','password');

        $user= User::create($data);

        alert()->info('Bilgilendirme','Lütfen e-posta adresinize gelen onay mailini kontrol edin.');
        return redirect()->back();
/*         dd("Event çalıştırıldı");
 */    }


    public function verify(Request $request){
        $userID = Cache::get('_verify_token_' . $request->token);
        if(!$userID){
            alert()->warning('Uyarı','Token geçersiz veya süresi dolmuş.');
            return redirect()->route('register');
        }
/*         $user=User::findOrFail($userID);
        $user->email_verified_at=now();
        $user->save(); */

        $userQuery=User::query()
            ->where('id',$userID);
        $user=$userQuery->firstOrFail();
        $userUpdate=$userQuery->update([
            'email_verified_at'=>now()
        ]);


        Auth::login($user);
        alert()->success('Başarılı','E-posta adresiniz onaylandı.');
        return redirect()->route('admin.index');
    }
}