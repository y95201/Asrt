<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 11:15:58
 * @LastEditors: Y95201
 * @LastEditTime: 2023-09-10 23:01:31
 * @FilePath: /dome/index.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
require "vendor/autoload.php";


$config = [
    // 'default' => [
    //     // 'yunpian',
    //      'aliyun'
    // ],
    'aliyun' => [
        'access_key_id' => '',
        'access_key_secret' => '',
        'sign_name' => '',
    ],
    // 'tenxun' => [
    //     'sdk_app_id' => '', // 短信应用的 SDK APP ID
    //     'secret_id' => '', // SECRET ID
    //     'secret_key' => '', // SECRET KEY
    //     'sign_name' => '腾讯CoDesign', // 短信签名
    // ],
    // 'baidu' => [
    //     'ak' => '',
    //     'sk' => '',
    //     'invoke_id' => '',
    //     'domain' => '',
    // ],
];

$Test = new Y9520\Asrt\Asrt($config);
echo $Test->CreateRecTask();