<?php

namespace service;

use entity\soldier;

include '/entity/soldier.php';

class BaseService
{

    protected $dataDao;

    protected function __construct($className)
    {
        $this->dataDao = util\Singleton::get($className);
        return $this->dataDao;
    }





    function show($status,$msg='',$data=[]) {

        $result = [
            'status'=>intval($status),
            'msg'=>$msg
        ];

        if(!empty($data)|| $data == 0){
            $result['data'] = $data;
        }

        return $result;
    }


}


?>
