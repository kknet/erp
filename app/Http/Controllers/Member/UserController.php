<?php

namespace App\Http\Controllers\Member;

use App\Services\User\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Config;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * 跳转至登录页面
     *
     * @return mixed
     */
    public function login()
    {
        return view('user.login');
    }


    /**
     * 校验登录信息
     *
     * @param Request $request
     * @return mixed
     */
    public function checkMsg(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');
        $remember = $request->get('remember');
        $userInfo = compact('name', 'password');

        if (Auth::attempt($userInfo, $remember)) {
            return redirect('/');
        } else {
            return view('user.login', ['error' => '用户名或密码错误']);
        }
    }


    /**
     * 跳转至注册页面
     *
     * @return mixed
     */
    public function create()
    {
        return view('user.register');
    }


    /**
     * 注册用户信息
     *
     * @param  Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $messages = Config::get('member.auth.messages');
        $validator = Config::get('member.auth.validator');
        $this->validate($request, $validator, $messages);

        $name = $request->get('name');
        $password = $request->get('password');
        $email = $request->get('email');
        $role = $request->get('role');

        $param = compact('name', 'password', 'email', 'role');
        $this->userService->register($param);

        return redirect('user/login');
    }


    /**
     * 用户注销
     *
     * @return mixed
     */
    public function logout()
    {
        Auth::logout();
        return view('user.login');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
