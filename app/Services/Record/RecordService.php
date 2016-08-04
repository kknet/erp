<?php

namespace App\Services\Record;

use App\Model\Record;
use App\Services\Service;

class RecordService extends Service
{


    public function analysisLogFile($filePath = '')
    {
        //
        ini_set('memory_limit', '512M');
        $slowQueryLogs = file_get_contents($filePath);
        $lines = explode("\n", $slowQueryLogs);
        $records = array();
        $record = new Record();
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

        return $records;
    }


}