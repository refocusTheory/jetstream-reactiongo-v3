<?php

namespace Modules\FileManager\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Auth;
class FileManagerController extends Controller
{

    public function _construct(){
        config(['filesysytems.disks.Users.root' =>'users/'.\Auth::id()]);
    }
    public function getUser()
    {

        $this->user   = \Auth::user()->with('userDetail')->find(\Auth::user()->id);
       // dd($this->user);
        //$this->banner = Storage::disk('s3')->url($this->user->banner_photo_url);
        //$this->modules = \Module::getByStatus(1);
        // if (array_key_exists('MyChannel',   $this->modules)) {
        //     $this->mychannelclient = $this->user->mychannel_client;
        // }
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $user = User::where('email', Auth::user()->email)->with(['userOauth','userDetail','userAd','userChannel'])->first();
        //dd($user);
                //     $folders = ['Ads','Social Media','Documents'];
        // //     $users = \DB::table('users')->get();
        // //    // dd($users[2]->name);
        //     foreach($folders as $folder){
        //       $directory = $folder;
        //     Storage::disk('s3')->makeDirectory($directory);  
        //     }
        // $directory = "users/Marketing2";
        //     Storage::disk('s3')->makeDirectory($directory);
        //    $rules = \DB::table('acl_rules')
        //     ->where('user_id', $this->getUserID())
        //     ->get(['disk', 'path', 'access'])->map(function ($item) {
        //         return get_object_vars($item);
        //     })
        //     ->all();
        //    dd($rules);

        $breadcrumbs = [['link' => "/dashboard", 'name' => "Dashboard"]];
        $this->user = $this->getUser();
        //dd($this->user);
        return view('filemanager::index', ['breadcrumbs' => $breadcrumbs]);
        //return view('filemanager::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('filemanager::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('filemanager::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('filemanager::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
