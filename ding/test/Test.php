<?php
// +----------------------------------------------------------------------
// | CoolCms [ DEVELOPMENT IS SO SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020 http://www.coolcms.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: Myj <815081410@qq.com>
// +----------------------------------------------------------------------
namespace test;

require_once "../vendor/autoload.php";

use ding\Api;
class Test{
    public function test()
    {
        $api = new Api();
        $api ->test();
        echo "<hr/>";
        echo 13;

    }
}

$a = new Test();
$a->test();