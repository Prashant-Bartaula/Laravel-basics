<?php

namespace App\Http\Controllers;

use App\Models\ExMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // artisan in laravel is a command line tool that allows you to run commands from the command line interface.
    public function aboutIntroduction()
    {
        return view('about.about');
    }

    //render this view that just runs the script to send post request of exmembers json data.
    public function article()
    {
        return view('article');
    }
    //create exmembers in table using json data 
    public function createExMembers(Request $request)
    {
        $membersData = $request->all();//laravel automatically parses the json data sent in the request object and stores it in $membersData array
        foreach ($membersData as $memberData) {
            //create a new instance of ExMember model
            $newMember=new ExMember();
          //checks if the member name already exists in the table
            if(ExMember::where('name', $memberData['name'])->exists()){
                return;
            }else{
                $newMember->name=$memberData['name'];
                $newMember->imgSrc= $memberData['imgSrc'];
                $newMember->position=$memberData['position'];
                $newMember->email= $memberData['email'];
                $newMember->save();
            }
        }
        return response()->json('success');
    }

    public function exMembers()
    {
        return view('about.exmembers');
    }
}
