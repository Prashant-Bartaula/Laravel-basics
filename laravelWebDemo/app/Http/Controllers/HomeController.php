<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $noticesDataPath=resource_path('data/notices.json');
        // $noticesData=file_get_contents($noticesDataPath);//raw json string
        $noticesData=json_decode(file_get_contents($noticesDataPath), true);//decoded  json data
       
        return view("home", ['noticesData'=>$noticesData]);//data can be sent directly like his or by using with for smaller data(readability), or using compact(it creates associative array from variable names and values); one more thing here since we are sending parsed json data we cant directly send it so we name the variable noticesData and sent it. other we could also directly send plain string data as
        //return view("home")->with('noticesData', $noticesData) or return view("home", compact('noticesData')) or even return view("home", $noticedata(simple string));
    }
}
