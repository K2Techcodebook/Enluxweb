<?php

namespace App\Http\Controllers\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    public function redirectTo()
    {
      $role = Auth::user()->is_permission;
      switch($role)
      {
        case 1:
          return '/admin';
          break;
        case 2:
          return '/staff';
          break;
          case 3:
            return '/';
            break;
        default:
          return '/';
          break;
      }
    }
    // public function redirectTo()
    // {
    //     if (auth()->user()->is_permission == 1) {
    //         return '/admin/dashboard';
    //     } else if (auth()->user()->is_permission == 2) {
    //         return '/app';
    //     }
    //  else if (auth()->user()->is_permission == 3) {
    //     return '/app';
    // }
    //  else {
    //         return '/home';
    //     }
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone_no' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone_no'],
            'is_permission' => 2,
        ]);
        Toastr::success('Post added successfully :)','Success');
    }


}
