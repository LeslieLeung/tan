<?php


namespace app\controller;

use app\BaseController;

class ResponseController extends BaseController
{
    const JSON_SUCCESS_STATUS = 0;
    const JSON_ERROR_STATUS = -1;

    /**
     * 输出json基本方法
     * @param $code
     * @param $msg
     * @param null|array $data
     * @return \think\response\Json
     */
    protected function renderJson($code, $msg, $data = null)
    {
        $out = [
            'code' => $code,
            'msg' => $msg,
        ];
        if ($data != null) {
            $out['data'] = $data;
        }
        return json($out);
    }

    /**
     * 返回成功json（可带数据）
     * @param string $msg
     * @param null|array $data
     * @return \think\response\Json
     */
    protected function renderSuccess($msg = '请求成功', $data = null)
    {
        return $this->renderJson(self::JSON_SUCCESS_STATUS, $msg, $data);
    }

    /**
     * 返回失败json
     * @param string $msg
     * @return \think\response\Json
     */
    protected function renderError($msg = '请求失败')
    {
        return $this->renderJson(self::JSON_ERROR_STATUS, $msg);
    }


}