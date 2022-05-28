<?php

namespace Modules\ConnectMail\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConnectMailController extends Controller
{

          // Set the client in case of static function call, construct wont fire
          public function setClient(){

            $this->client = new \Acelle\Client(
                'https://mail.mavrealty.com/api/v1',
               // \Auth::user()->mavmail_api_key
                'okJ5sYO2xILgjG2XjDKT1rPFG2Zp4CaOhWaEbjtOqtB75wx6dVy9ikhBclgi'
            );
            $response = $this->client->list()->all();
            dd($response);
        }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('connectmail::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('connectmail::create');
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
        return view('connectmail::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('connectmail::edit');
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
