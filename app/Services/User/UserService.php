<?php
/**
 * Created by PhpStorm.
 * Member: Administrator
 * Date: 2016/7/15
 * Time: 15:22
 */

namespace App\Services\User;


use App\Services\Service;
use DB;
use App\Model\User;

class UserService extends Service
{


    function register($data = [])
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role']
        ]);
    }

    function update($user = [])
    {
        User::updateInfo($user);
    }


    function getUsersExpectManager()
    {
        return User::all() ?: [];
    }

    function getUserByID($id = 0)
    {
        return User::find($id);
    }

}