<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //controller method name register. It takes a parameter $request, which is an instance of Laravel’s Request class.Data send through hgttp request is stored in $request object
    public function register(Request $request){

        //validate incoming request data using the validate method in $request object
        $incomingFields = $request->validate([
            // 'name'=> 'required',
            // 'email'=> 'required',
            // 'password'=> 'required',

            'name'=>['required', 'min:3','max:10', Rule::unique('users', 'name')],
            'email'=>['required', 'email'],
            'password'=>['required', 'min:4', 'max:20'],
        ]);

        //If validation fails, Laravel automatically redirects the user back (usually to the form) with validation error messages.If validation passes, it returns only the validated fields as an associative array, which is stored in $incomingFields.

        //In Laravel, a Model is a class that represents a table in your database, and it lets you interact with that table using PHP code—no need to write raw SQL most of the time.Here we are using the User model defined in app/Models/User.php

        //laravel has bcrypt as a built in utilities
        $incomingFields['password']=bcrypt($incomingFields['password']);

        //bulit in model 
        $user=User::create($incomingFields);//This calls the Eloquent ORM's create() method to insert a new user(associative array) into the users table.
        auth()->login($user);//auth is a built in function in laravel that acts like a middleware. it has the login method that logs in the user instance into the session


        return redirect('/');
    }

    public function logout(){
        auth()->logout();//It removes the user's session and clears the authentication state.
        return redirect('/');
    }

    public function login(Request $request){
        $userData=$request->validate([
            'loginname'=>'required',
            'loginpassword'=> 'required',
        ]);

        //attempt method checks the credentials and logs in the user and returns either true or false.
        if(auth()->attempt(['name'=>$userData['loginname'], 'password'=>$userData['loginpassword']])){

            //regenerate session token to prevent session fixation attacks.
                $request->session()->regenerate();
        }

        return redirect('/');
    }
};
