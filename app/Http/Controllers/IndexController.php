<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class IndexController extends Controller
{
 /*login form */
    public function showLoginForm()
    {
       

        if (Auth::check()) {
            return \Redirect::to('user');
        }
        return \View::make('user.login');
    }

    public function login(Request $request)
    {
        

        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        
        $messages = array(
            'email.required' => 'This field is required',
            'password.required' => 'This field is required',
        );

        $input = $request->all();
        $validator = \Validator::make($input, $rules,$messages);
        if ($validator->fails()) 
        {
          
            return \redirect()->action('IndexController@showLoginForm')->withErrors($validator)->withInput($request->all());
         }
         $remember = ($request->has('remember')) ? true : false;

        $email = $request->get('email');
        $password = $request->get('password');
        if (\Auth::attempt(array('email' => $email, 'password' => $password))) 
        {
             return redirect()->route('user.index');
                  
              
        } 
        else 
        {
              return redirect()->back()->with('error', 'Invalid username or password');
            
        }
    }
    
    public function logout()
    {  
            Auth::logout();
            return \Redirect::to('login');
    }
}