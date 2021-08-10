<?php

namespace service;

require "../../lib/raftphp/framework/util/Singleton.php";
require "../service/BaseService.php";
require "../service/OperationService.php";

use framework\util\Singleton;
use PHPUnit\Framework\TestCase;

class OperationServiceTest extends TestCase
{
    public function testGetOperationResult()
    {
        /** @var OperationService $operationService */
        $operationService=Singleton::get(OperationService::class);
        print_r($operationService->getOperationResult("1+3*4+8"));
    }
}
