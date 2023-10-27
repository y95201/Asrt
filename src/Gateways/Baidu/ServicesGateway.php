<?php
/*
 * @Description: 
 * @Author: Y95201
 * @Date: 2023-09-10 20:36:49
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-10-27 17:13:50
 */
namespace Y9520\Asrt\Gateways\Baidu;
use Y9520\Asrt\Gateways\Gateway;
class ServicesGateway extends Gateway
{
    private static $errorMapping = array(
        0    => 'success',
        400  => '未知错误',
        404  => '音频文件找不到',
        3300 => '输入参数不正确',
        3301 => '音频质量过差',
        3302 => '鉴权失败',
        3303 => '语音服务器后端问题',
        3304 => '用户的请求QPS超限',
        3305 => '用户的日pv（日请求量）超限',
        3307 => '语音服务器后端识别出错问题',
        3308 => '音频过长',
        3309 => '音频数据问题',
        3310 => '输入的音频文件过大',
        3311 => '采样率rate参数不在选项里',
        3312 => '音频格式format参数不在选项里',
    );
    
    public function GetAccessToken(){
        return $this->getConfig();
    }
    public function SendVoiceTurnText($file)
    {
        $Token = $this->GetAccessToken();
        //获取token
        return $Token;
    }
    public function SendTextTurnVoice($file)
    {
        return 456;
    }

}