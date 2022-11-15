<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Country;
use App\User;
use App\Rules\IbanRule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => 'required|string|min:2|max:20|alpha',
            'lastName' => 'required|string|min:2|max:40|alpha',
            'dni' => 'required|regex:/[0-9]{8}[A-Z]{1}/|max:9',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:10|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{10,}$/',
            'password_confirmation' => 'required|same:password',
            'telephone' => 'nullable|regex:/[+]{1}[0-9]{8,11}/|min:9|max:12',
            'idCountry' => 'nullable',
            'iban' => new IbanRule,
            'aboutYou' => 'nullable|min:20|max:250'
        ],[],[
            'name' => 'nombre',
            'lastName' => 'apellido',
            'dni' => 'DNI',
            'password' => 'contraseña',
            'lastName' => 'apellido',
            'password_confirmation' => 'confirmación de contraseña',
            'telephone' => 'número telefónico',
            'idCountry' => 'país',
            'aboutYou' => 'sobre ti',
            'iban' => 'IBAN'
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
        $idCountry = null;
        $country = $data['idCountry']; 
        $countries = Country::all()->pluck('country'); 
        foreach ($countries as $count){
            if ($count == $country){
                $id =  Country::where('country', $count)->pluck('id');
                if (!empty($id)){
                    $idCountry = $id[0];
                }
            }
        }

        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'dni' => $data['dni'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telephone' => $data['telephone'],
            'idCountry' => $idCountry,
            'iban' => $data['iban'],
            'aboutYou' => $data['aboutYou']
        ]);
    }
}
