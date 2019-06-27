<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MongoDB\Client;
use Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    public function api(){
        $info=[
            'time'=>date('Y-m-d H:s'),
            'ip'=>$_SERVER["SERVER_ADDR"],
            'url'=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"],
            'ua'=>$_SERVER["HTTP_USER_AGENT"]
        ];
        return $info;
    }
    public function add(){
        $db_host="mongodb://192.168.137.180:27017";
        $client=new Client($db_host);
        $db = $client->runoob->text; // 获取名称为 "runoob" 的数据库
        $db->insertOne($this->api());
        $arr=$db->find();
        print_r($arr);
    }

    public function mys(){
        $arr=DB::table('text')->insert($this->api());
        if($arr){
            echo "添加成功";
        }else{
            echo "添加失败";
        }
    }
}
