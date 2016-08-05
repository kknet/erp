<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\User\UserService;

class UserTest extends TestCase
{

    private $userService;

    /**
     * UserTest constructor.
     */
    public function __construct()
    {
        $this->userService = new UserService();
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testAddAdmin()
    {
        $name = 'caterina';
        $password = '123456';
        $role = 0;
        $email = '123@gmail.com';
        $params = compact('name', 'password', 'role', 'email');
        $this->userService->register($params);
    }


    public function testLogin()
    {
        $this->visit('/')->type('chw', 'name')->type('123456', 'password')->press('登录');
        echo session('user');
    }


    public function testGetUsersExpectManager()
    {
        echo $this->userService->getUsersExpectManager();
    }

    public function testGetUserByID()
    {
        echo $this->userService->getUserByID(5);
    }

    public function testUpdate()
    {
        $id = 1;
        $name = 'chenwei';
        $user = compact('id','name');
        $this->userService->update($user);
    }
}
