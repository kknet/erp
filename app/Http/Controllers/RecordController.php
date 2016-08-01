<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slowQueryLogs = file_get_contents('G:\logs\rw_slowQuery0725_251.log');
        $lines = explode("\n", $slowQueryLogs);
        $record = new Record();
        $records = array();
        foreach ($lines as $line) {
            if (stristr($line, 'Excute time')) {
                $string = stristr($line, '=');
                $executeTime = substr($string, 2, -3);
                $record->setExecuteTime(ceil($executeTime));
            }
            if (stristr($line, 'SQL = ')) {
                $sql = substr($line, 6);
                $record->setSql($sql);
            }
            if (stristr($line, '[HTTP_HOST]')) {
                $host = substr($line, 19);
                $record->setHost($host);
            }
            if (stristr($line, '[SERVER_ADDR]')) {
                $address = substr($line, 21);
                $record->setAddress($address);
            }
            if (stristr($line, '[QUERY_STRING]')) {
                $queryString = substr($line, 22);
                $record->setQueryString($queryString);
            }
            if (stristr($line, '[REQUEST_URI]')) {
                $requestUrl = substr($line, 21);
                $record->setRequestUrl($requestUrl);
            }

            if (stristr($line, '======End This Log Flag======xxxxxxxxxxxxxxxxxx')) {
                $records[] = $record;
                $record = new Record();
            }

        }

        return view('record.list', ['records' => $records]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
