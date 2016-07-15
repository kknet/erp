<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            <form action="/user" method="post">
                <input title="用户名：" type="text" name="userName"/><br />
                <input title="密码:" type="password" name="password"/><br />
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
                <input type="submit" value="提交">
            </form>
        </div>
    </div>
</div>
</body>
</html>
