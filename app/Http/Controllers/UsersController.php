<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // display login page
    public function index(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }
        return view('login', ['cart' => $cart]);
    }

    // display registration page
    public function showRegister(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }
        return view('register',['cart' => $cart]);
    }

    // display profile page
    public function showProfile(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        return view('users.profile', ['cart' => $cart]);
    }

    // login function
    public function login(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            if(auth()->user()->type === "admin"){
                return redirect('/')->with('message', 'Welcome back admin.');
            }

            return redirect('/')->with('message', 'Welcome back our dear customer.');
        }

        return redirect('/login')->with('message', 'Email and password do not not match.')->with('status', 'danger');
    }

    // create new user
    public function register(Request $request){
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'address' => ['required'],
            'password' => 'required|min:6'
        ]);

        if($validated['password'] === $request->password_confirmation){
            $validated['password'] = bcrypt($validated['password']);
            $validated['type'] = 'user';
            User::create($validated);

            return redirect('/')->with('message', 'User successfully created.');
        } else {
            return redirect('/register')->with('message', 'Password not match.')->with('status', 'danger');
        }
    }

    // logout function
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('message', 'Logout Successfully.');
    }

    // update user
    public function update(Request $request, $id){
        $result = User::where('id', $id)->get();

        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,'. $id],
            'address' => ['required'],
        ]);

        if (\Hash::check($request->old_password, $result[0]->password)) {
            $validated['password'] = bcrypt($request->new_password);

            $user = User::where('id', $id)->first();

            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->address = $validated['address'];
            $user->password = $validated['password'];

            $user->save();

            return redirect('/profile')->with('message', 'Saved successfully.');
        } else {
            return redirect('/profile')->with('message', 'Your old password is incorrect.')->with('status', 'danger');
        }

        return redirect('/profile')->with('message', 'Please fill the information and make sure your old password is incorrect.')->with('status', 'danger');
    }
}
