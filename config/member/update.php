<?php
return [
    'messages' => [
        'name.required' => '用户名为必填项',
        'email.required' => '邮箱为必填项',
        'role.required' => '职务为必填项',
    ],

    'validator' => [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'role' => 'required|integer'
    ]
];