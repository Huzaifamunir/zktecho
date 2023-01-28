<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laradevsbd\Zkteco\Http\Library\ZktecoLib;
use Rats\Zkteco\Lib\ZKTeco;

class ZktController extends Controller
{
    public function index()
    { 
        ini_set('max_execution_time', 0);
        $zk = new ZKTeco('192.168.18.201');
        // $zk = new ZktecoLib('192.168.18.201','4370');
        // dd($zk,$zk->connect());
        // dd($zk->connect());
            if ($zk->connect()){
            $attendance = $zk->getAttendance();
            dd($attendance);
            return view('zkteco::app',compact('attendance'));
            }else {
                dd('not found');
            }
    }
}
