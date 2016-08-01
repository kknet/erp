<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div>
    <table border="1px">
        <tr>
        {{--<th>host</th>--}}
        <th>request url</th>
        {{--<th>address</th>--}}
        <th>query string</th>
        <th>execute time</th>
        <th>sql</th>
        </tr>
        @foreach ($records as $record)
            <tr>
                {{--<td>{{$record->getHost()}}</td>--}}
                <td width="200">{{$record->getRequestUrl()}}</td>
                {{--<td>{{$record->getAddress()}}</td>--}}
                <td>{{$record->getQueryString()}}</td>
                <td>{{$record->getExecuteTime()}}ms</td>
                <td>{{$record->getSql()}}</td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>
