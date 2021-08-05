<?php


namespace ctrl;

use framework\util;
use service\AnswerService;
use service\CombatPointsService;
use service\OperationService;
use utils\HttpUtil;
use view\JsonView;


class OperationCtrl extends CtrlBase
{
    /**
     * OperationCtrl constructor.
     */
    public function __construct()
    {
    }

    public function operation()
    {
        //获取get或post请求数据
        $operation = HttpUtil::getPostData('operation');
        /** @var OperationService $operationService */
        $operationService = util\Singleton::get(OperationService::class);
        //校验数据
        list($checkResult, $checkNotice) = $operationService->checkUploadParams($operation);
        if (true !== $checkResult) {
            $rspArr = AnswerService::makeResponseArray($checkNotice);
            return new JsonView($rspArr);
        }
        //执行函数
        $result = $operationService->getOperationResult($operation);
        return new JsonView($result);
    }

}


?>