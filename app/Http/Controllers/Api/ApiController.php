<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    //
    public function api(){
        echo '当前时间: >'.date('Y-m-d H:s');echo "<br>";
        echo '浏览网页的用户ip:    >'.$_SERVER["REMOTE_ADDR"];echo "<br>";
        echo $_SERVER["HTTP_USER_AGENT"];echo "<br>";
        echo '服务器的ip地址: >'.$_SERVER["SERVER_ADDR"];
    }
}
