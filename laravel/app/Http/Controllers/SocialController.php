<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
class SocialController extends Controller
{
    //
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
 
        $authUser = $this->findOrCreateUser($user);
        
        // Chỗ này để check xem nó có chạy hay không
        dd($user);
 
        Auth::login($authUser,true);
 
        return redirect()->route('trangchu');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('provider_id', $facebookUser->id)->first();
 
        if($authUser){
            return $authUser;
        }
 
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'provider_id' => $facebookUser,
            'provider' => $facebookUser->id,
        ]);
    }
}
