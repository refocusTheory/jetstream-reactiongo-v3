<?php

namespace Modules\ReactionGo\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Channel;

class MyChannelController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function createNewMyChannel()
    {
        return view('reactiongo::index');
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function saveMyChannel(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function showMyChannel($id)
    {
        return view('reactiongo::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editMyChannel($id)
    {
        return view('reactiongo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateMyChannel(Request $request, $id)
    {

        $account = [
     
            'email'=>'erica.thebestlight@gmail.com'

        ];
        $pages = [
            [
                'id' => 'index-pages',
                'key' => 'pages',
                'data' => [
                    'photo_1_url' => ''
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
        
        $channel->account = json_encode($account,true);
        $channel->pages = json_encode($pages,true);
        $channel->integrations = json_encode($integrations,true);
        $channel->settings = json_encode($settings,true);
        $channel->save();


        //
    }

}
