<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Auth\User;
use  Validator;

use Illuminate\Support\Facades\Auth;  //added


/**
 * Class LanguageController.
 */
class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator =    Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);


        if ($validator->fails()) {
            return $this->sendError('error validation', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User created succesfully');
    }



}
