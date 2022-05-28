<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use App\Models\Channel;

class DashboardController extends Controller
{


    public function index()
    {

        $account = [
     
            'email'=>'erica.thebestlight@gmail.com'

        ];
        $pages = [
            [
                'id' => 'index-pages',
                'key' => 'pages',
                'data' => [
                    'photo_1_url' => 'https://ec2-purple-summit-domains.s3.amazonaws.com/app/uploads/thebestlightpossible/20220402161729/DSC03351.jpg'
                ]
            ],
            [
                'id' => 'portfolio-one',
                'key' => 'pages',
                'data' => ''
            ]

        ];
        $integrations = [
            [
                'id' => 'username',
                'key' => 'facebook',
                'data' => ''
            ]
        ];
        $settings = [
            'theme' => 'dark'
        ];
        $data = [

        ];
        
        // $channel = Channel::whereBelongsTo(Auth::user())->first();
        // $channel->account = json_encode($account,true);
        // $channel->pages = json_encode($pages,true);
        // $channel->integrations = json_encode($integrations,true);
        // $channel->settings = json_encode($settings,true);
        // $channel->save();




        $pageConfigs = ['pageHeader' => false];
  
        return view('/dashboard', ['pageConfigs' => $pageConfigs]);
    }

    public function testhtml(){
        $pageConfigs = ['pageHeader' => false];
  
        return view('/dashboard', ['pageConfigs' => $pageConfigs]);
    }
}
