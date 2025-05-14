<?php

namespace App\Http\Controllers;//namespace to let laravel know where to find the controller

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //controller method name register. It takes a parameter $request, which is an instance of Laravel’s Request class which is a built-in class that represents an HTTP request.Laravel sees Request in the function and automatically gives you an object that holds all the current request data. In this case Data send through http request is stored in $request object like form input, url parameters, cookeis , headers. so you can give any name for the request object as $rqst or something.
    public function register(Request $request)
    {

        //validate incoming request data using the validate method in $request object. some request object method are
        //request->all() Returns an array of all of the input data.
        //request->input() Returns the value of the input with the given key.
        //request->has() Returns true if the given input key has a value.
        $incomingFields = $request->validate([
            // 'name'=> 'required',
            // 'email'=> 'required',
            // 'password'=> 'required',

            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],//unique method checks if the value of the field is unique in the database by quering the database table with the name. 
            'email' => ['required', 'email'],
            'password' => ['required', 'min:4', 'max:20'],
        ]);

        //If validation fails, Laravel automatically redirects the user back (usually to the form) with validation error messages.If validation passes, it returns only the validated fields as an associative array, which is stored in $incomingFields.

        //In Laravel, a Model is a class that represents a table in your database, and it lets you interact with that table using PHP code—no need to write raw SQL most of the time.Here we are using the User model defined in app/Models/User.php

        //laravel has bcrypt as a built in utilities
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        //bulit in model 

        //in native php code
        // $user = new User($incomingFields); // creates a new instance
        // $user->save();                     // saves it to the database

        //USING ELOQUENT ORM's create method.
        $user = User::create($incomingFields);//This calls the Eloquent ORM's create() method to insert a new user(associative array) into the users table. This method directly creates User instances and saves them to the database and returns the user as object.


        //Laravel has a built-in authentication system. The auth() allows you to access authentication system.
        //auth()->user()	Returns the currently logged-in user
// auth()->check()	Returns true if a user is logged in
// auth()->id()	Returns the ID of the logged-in user
// auth()->logout()	Logs out the current user
// auth()->login($user)	Logs in a user manually
        auth()->login($user);//auth is a built in function in laravel that acts like a middleware. it has the login method that logs in the user instance into the session


        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();//It removes the user's session and clears the authentication state.
        return redirect('/');
    }

    public function login(Request $request)
    {
        $userData = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required',
        ]);

        //attempt method checks the credentials and logs in the user and returns either true or false.
        if (auth()->attempt(['name' => $userData['loginname'], 'password' => $userData['loginpassword']])) {

            //regenerate session token to prevent session fixation attacks.
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}
;
