<?php

use app\libiray\Common;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/BackGround','BackGroundController@index');

Route::get('/MasterList','BackGroundController@masterrecommend');

Route::get('/unwraptel','BackGroundController@unwraptel');

Route::get('/mastertype','BackGroundController@mastertype');

Route::get('/userdetail','BackGroundController@userdetail');

Route::get('/mastermanager','BackGroundController@mastermanager');



Route::get('/test',function(){
//$context = new ZMQContext();
// Connect to task ventilator
//$sender = new ZMQSocket($context, ZMQ::SOCKET_REQ);
//$sender->connect("tcp://169.54.231.244:1990");
//var_dump(111);
//$sender->send("{'mt4UserID':500001,'__api':'Equity'}");
//var_dump($sender->recv());
    //当前时间 
    $now=date('Y-m-d H:i:s'); 
    //6月前
    $before=date('Y-m-d H:i:s',strtotime('-6 month')); 
    var_dump($now);
    var_dump($before);
    $model=DB::select('select (select sum(profit+`storage`) as p from tiger.history where mt4_id=? and profit+`storage`>0 and `timestamp` between ? and ?)/(select amount from tiger.payment where mt4_id=?)', [82367330,$before,$now,82367330]); //6个月盈利率 
    var_dump($model);
});

Route::get('/unwrap_phone',function(){
    $phone = Request::input('phone');
    $result="解绑失败！";
    if(isMobile($phone))
    {
        $users = DB::select('SELECT id FROM tiger.user where phone=?', [$phone]);
        if($users!=null)
        {
            $count = DB::update('update tiger.user set phone=? where id=?', [$users[0]->id,$users[0]->id]);
                if ($count > 0)
                {
                    $result = "true";
                }
        }
    }else
    {
        $result= '请填写正确的手机号！';
    }
    return $result;
});



Route::get('/AddMasterList', function () {
    $type = Request::input('type');
    $data = Request::input('data');
    $result="插入失败！请先填写个人说明！";
    $users = DB::select('select username,user_code,mt4_real,`desc` from tiger.user where mt4_real=? limit 1', [$data]);
    $desc= $users[0]->desc;
    if($desc!=null)
    {
        //历史数据
        $dic=DB::select('select * from tiger.recommend where mt4_id=? and type=?', [$data,$type]);
        if($dic==null)
        {
            $i=DB::select('insert into tiger.recommend(mt4_id, `type`,`desc`) values(?,?,?)', [$data,$type,$desc]);
            if($i>0)
            {
                //成功
                $result="true";
            }
        }else
        {
            $result="已有相同项！";
        }
    }
    return $result;
});

Route::get('/GetMasterList', function () {
    $data = DB::select('select * from tiger.recommend');
    if($data!=null) {
        foreach($data as $model){
            $temp=DB::select('select * from tiger.user where mt4_real=?', [ $model->mt4_id]);
            $model->name=$temp[0]->username;
        }
    }
    return $data;
});

Route::get('/RemoveMasterList', function () {
    $id = Request::input('id');
    $result="删除失败！";
    $data = DB::select('select * from tiger.recommend where mt4_id=?',[$id]);
    if($data!=null) {
       $i=DB::select('delete from tiger.recommend where mt4_id=?',[$id]);
        if($i>0)
        {
            $result="true";
        }
    }
    return $result;
});

Route::get('/GetMasterTypeList',function(){
    $data = DB::select('select * from tiger.master_new');
    if($data!=null) {
            //当前时间 
            $now=date('Y-m-d H:i:s'); 
            //6月前
            $before=date('Y-m-d H:i:s',strtotime('-6 month')); 
        foreach($data as $model){
            $temp=DB::select('select * from tiger.user where mt4_real=?', [ $model->mt4_id]);
            $model->name=$temp[0]->username;
            $model->type=TypeToName($model->type);
            $model->six_rate=DB::select('select (select sum(profit+`storage`) as p from history where mt4_id=? and profit+`storage`>0 and timestamp between ? and ?)/(select amount from payment where mt4_id=?) as money', [ $model->mt4_id,$before,$now,$model->mt4_id])[0]->money; //6个月盈利率 
            $model->win=0.00;
            $model->lose=0.00;
            $model->volunm=0.00;
        }
    }
    return $data;
});


Route::get('/RemoveMasterTypeList', function () {
    $id = Request::input('id');
    $result="删除失败！";
    $data = DB::select('select * from tiger.master_new where mt4_id=?',[$id]);
    if($data!=null) {
       $i=DB::select('delete from tiger.master_new where mt4_id=?',[$id]);
        if($i>0)
        {
            $result="true";
        }
    }
    return $result;
});

Route::get('/UpdateMasterType',function(){
    $id = Request::input("mt4_id");
    $type = Request::input("type");
    $result = "修改失败！";
    $data=DB::select('select count(*) from tiger.user where mt4_real=?',[$id]);
    if ($data!=null && $type!=null)
    {
       $i=DB::update('update master_new set type=? where mt4_id=?',[$type,$id]);
       if ($i>0)
       {
           $result = "true";
       }
    }
    return $result;
});

function isMobile($value,$match='/^[(86)|0]?(13\d{9})|(14\d{9})|(15\d{9})|(17\d{9})|(18\d{9})$/'){
    $v = trim($value);
    if(empty($v) || strlen($v)>15) return false;
    return preg_match($match,$v);
}

function TypeToName($type)
        {
            switch ($type)
            {
                case "0":
                     $type="短期投资";
                    break;
                case "1":
                    $type="长期投资";
                    break;
                case "2":
                    $type="最多复制";
                    break;
                case "3":
                    $type = "最多盈利";
                    break;
            }
            return $type;
        }

