<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showRegistrationForm()
    {
        return view('themes.auth.signup');
    }
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'firstname' => 'required',
                'lastname'  => 'required',
                'email'     => 'required',
                'phone'     => 'required',
                'password'  => 'required',
            ];
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $count = User::where('email',$data['email'])->count();
            if($count >0){
                return back()->with('error','Email already exits!');
            }
            $data = new User();
            $data['firstname'] = $request['firstname'];
            $data['lastname'] = $request['lastname'];
            $data['email'] = $request['email'];
            $data['phone'] = $request['phone'];
            $data['password'] = Hash::make($request['password']);
            $data->save();
            return back()->with('success','User register succcessfuly');
        }
    }
}
