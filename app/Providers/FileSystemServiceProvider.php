<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Env;

class FileSystemServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // DomainSettings::all()->each(function(DomainSettings $myDisk) {

        //     if (!is_null($myDisk->driver_name) && !is_null($myDisk->driver_type)
        //         && !is_null($myDisk->driver_host) && !is_null($myDisk->driver_username) && !is_null($myDisk->driver_password)) {
    $user = \Auth::id();
                $this->app['config']["filesystems.disks.MyDrive"] = [

                        'driver' => config('filesystems.disks.MyDrive.driver'),//'s3',
                        'key' => config('filesystems.disks.MyDrive.key'),//env('AWS_ACCESS_KEY_ID'),
                        'secret' => config('filesystems.disks.MyDrive.secret'),//env('AWS_SECRET_ACCESS_KEY'),
                        'region' =>config('filesystems.disks.MyDrive.region'),//us-east-1',// env('AWS_DEFAULT_REGION'),
                        'bucket' => config('filesystems.disks.MyDrive.bucket'),//env('AWS_BUCKET'),
                        'visibility' => 'public',
                        'root' => 'users/'.$user
                    ];
          //  }
        // });
    }
}
