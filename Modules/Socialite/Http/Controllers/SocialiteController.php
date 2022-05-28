<?php

namespace Modules\Socialite\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\UserOauth;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{

    public function index(){

        $user = User::where('email', Auth::user()->email)->with('userOauth')->first();
        //dd($user->userOauth->google_id);
        $pageConfigs = ['pageHeader' => false];

        $banner = \Storage::disk('s3')->url(\Auth::user()->banner_photo_url);

        return view('socialite::index', [
            'pageConfigs' => $pageConfigs,
            'banner'=> $banner,
            'user' => $user
        ]);

    }
    public function test(){

        $user = Auth::user();
        $finduser = User::where('email', $user->email)->with('userOauth')->first();
       // $finduser = UserOauth::where('user_id', '2')->get();
      //  $user->userOauth()->where('user_id', 1)->get();
        //$finduser = User::find(Auth::user()->id)->UserOauth;
       // User::find(1)->phone;
        dd($finduser);
      //  dd($user);
    }

    //////////////    Google   //////////////////////////////


    public function redirectToGoogle()
    {

        $scopes = [
            'openid',
            'email',
            'profile',
            // 'https://www.googleapis.com/auth/plus.me',
            // 'https://www.googleapis.com/auth/plus.profile.emails.read',
            // 'https://www.googleapis.com/auth/gmail.readonly',
            // 'https://www.googleapis.com/auth/analytics'
        ];


        return Socialite::driver('google')
        ->scopes($scopes) // For any extra scopes you need, see https://developers.google.com/identity/protocols/googlescopes for a full list; alternatively use constants shipped with Google's PHP Client Library
        ->with(['access_type' => 'offline', 'prompt' => 'consent select_account'])
        ->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();

            //dd($user);
            //$finduser = User::where('email', $user->email)->first();

            $finduser = User::where('email', $user->email)->with('userOauth')->first();

            if($finduser){

                $finduser->userOauth->google_id = $user->id;
                $finduser->userOauth->google_refresh_token = $user->refreshToken;
                $finduser->userOauth->google_token = $user->token;

                $finduser->userOauth->save();

                Auth::login($finduser);

                return redirect()->intended('dashboard');
       
            }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'google_id'=> $user->id,
                //     'password' => encrypt('123456dummy')
                // ]);
      
                // Auth::login($newUser);
      
                return redirect()->intended('login');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    //////////////   LinkedIn   //////////////////////////////

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleLinkedinCallback()
    {
        try {
      
            $user = Socialite::driver('linkedin')->user();
           // dd($user);
            $finduser = User::where('email', $user->email)->with('userOauth')->first();

            if($finduser){

            $finduser->userOauth->linkedin_id = $user->id;
            $finduser->userOauth->linkedin_refresh_token = $user->refreshToken;
            $finduser->userOauth->linkedin_token = $user->token;

            $finduser->userOauth->save();

                Auth::login($finduser);

                return redirect()->intended('dashboard');
       
            }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'linkedin_id'=> $user->id,
                //     'password' => encrypt('123456dummy')
                // ]);
      
                // Auth::login($newUser);
      
                return redirect()->intended('login');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    ///////////////   Facebook   /////////////////////////////

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')
        ->with(['access_type'=>'offline'])
        ->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
      
            $user = Socialite::driver('facebook')->user();
           // dd($user);
            $finduser = User::where('email', $user->email)->first();
       
            if($finduser){
                $finduser->userOauth->facebook_id = $user->id;
                $finduser->userOauth->facebook_refresh_token = $user->refreshToken;
                $finduser->userOauth->facebook_token = $user->token;

                $finduser->userOauth->save();


                Auth::login($finduser);

                return redirect()->intended('dashboard');
       
            }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'google_id'=> $user->id,
                //     'password' => encrypt('123456dummy')
                // ]);
      
                // Auth::login($newUser);
      
                return redirect()->intended('login');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    ///////////////   Zoho   /////////////////////////////

    public function redirectToZoho()
    {
        return Socialite::driver('zoho')
        ->scopes(['ZohoCRM.modules.ALL', 'ZohoCRM.settings.ALL'])
        ->with(['access_type'=>'offline'])
        ->redirect();
    }
    public function handleZohoCallback()
    {
        try {

            $user = Socialite::driver('zoho')->user();
            // dd($user);
            
            $finduser = User::where('email', $user->email)->with('userOauth')->first();

            if($finduser){

            $finduser->userOauth->zoho_id = $user->id;
            $finduser->userOauth->zoho_refresh_token = $user->refreshToken;
            $finduser->userOauth->zoho_token = $user->token;

            $finduser->userOauth->save();

            Auth::login($finduser);

            return redirect()->intended('dashboard');

            // ZCRMRestClient::initialize(Zoho::zohoOptions());
            // $oAuthClient = ZohoOAuth::getClientInstance();
            // $oAuthClient->generateAccessToken($request->code);
    
            // return 'Zoho CRM has been set up successfully.';


        
            }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'google_id'=> $user->id,
                //     'password' => encrypt('123456dummy')
                // ]);
        
                // Auth::login($newUser);
        
                return redirect()->intended('login');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
