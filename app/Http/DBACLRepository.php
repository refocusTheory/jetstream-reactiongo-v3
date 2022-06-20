<?php

namespace App\Http;

use Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository;

/**
 * Class DBACLRepository
 *
 * @package Alexusmai\LaravelFileManager\Services\ACLService
 */
class DBACLRepository implements ACLRepository
{
    /**
     * Get user ID
     *
     * @return mixed
     */
    public function getUserID()
    {
        return \Auth::id();
    }

    /**
     * Get ACL rules list for user
     *
     * @return array
     */
    public function getRules(): array
    {

        if (\Auth::id() === 1 ) {
            return [
                ['disk' => 'Blueprint', 'path' => '*', 'access' => 2],
                ['disk' => 'Jetstream', 'path' => '*', 'access' => 2],   
                ['disk' => 'MyDrive', 'path' => '*', 'access' => 2],   
            ];
        }else{
        
            return [
                ['disk' => 'MyDrive', 'path' => '/', 'access' => 1],   
                // ['disk' => 'MyDrive', 'path' => 'users/*', 'access' => 1],  
                // ['disk' => 'MyDrive', 'path' => 'users', 'access' => 1], 
               ['disk' => 'MyDrive', 'path' => \Auth::id(), 'access' => 2],  // read and write
                ['disk' => 'MyDrive', 'path' =>  \Auth::id() .'/*', 'access' => 2],  // read and write
                // ['disk' => 'Users', 'path' => \Auth::id(), 'access' => 1],        // only read// main folder - read
                // ['disk' => 'Users', 'path' => 'users', 'access' => 1],
                
                ['disk' => 'Jetstream', 'path' => '/', 'access' => 1],    
                ['disk' => 'Jetstream', 'path' => '/*', 'access' => 1], 
                ['disk' => 'Jetstream', 'path' => 'Marketing', 'access' => 1], 
                ['disk' => 'Jetstream', 'path' => 'Social Media', 'access' => 1], 
                ['disk' => 'Jetstream', 'path' => 'Documents', 'access' => 1], 
                ['disk' => 'Jetstream', 'path' => 'Ads/*', 'access' => 1],  
                // ['disk' => 'Users', 'path' => 'Marketing/*', 'access' => 1],  
                // ['disk' => 'Users', 'path' => 'Social Media/*', 'access' => 1],  
                // ['disk' => 'Users', 'path' => 'Documents/*', 'access' => 1],                                   // only read
                // ['disk' => 'Users', 'path' => 'users/'. \Auth::id(), 'access' => 1],        // only read
                // ['disk' => 'MyDrive', 'path' =>  \Auth::id() .'/*', 'access' => 2],  // read and write
                // ['disk' => 'MyDrive', 'path' => \Auth::id(), 'access' => 1],        // only read
                //['disk' => 'Users', 'path' => 'users/'. \Auth::id() .'/*', 'access' => 2],  // read and write
            ];
        }
        // return config('file-manager.aclRules')[$this->getUserID()] ?? [];
        // return \DB::table('acl_rules')
        //     ->where('user_id', $this->getUserID())
        //     ->get(['disk', 'path', 'access'])
        //     ->map(function ($item) {
        //         return get_object_vars($item);
        //     })
        //     ->all();
    }
}
