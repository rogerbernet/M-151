<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('signIn');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/');
    }

    public function login()
    {

        $email = request()->get('email');
        $password = request()->get('password');
        $user = User::where('email', $email)->first();
        if(password_verify($password, $user->password)){
            echo "Ok";
            request()->session()->put('userId', $user->id);
            return redirect('/');
        }
        else{
            echo "fail";
        }
    }
    public function profile() {
        if ($this->isUserLoggedIn()) {
            $user = $this->getUser();

            return view('user.profile', [
                'user' => $user
            ]);
        }
        else {
            return redirect('/login');
        }
    }

    public function logout() {
        session()->flush();
        return redirect('/');
    }

    protected function isUserLoggedIn() {
        if (session()->has('userId')) {
            return true;
        }
        return false;
    }

    protected function getUser() {
        if ($this->isUserLoggedIn()) {
            return User::find(session()->get('userId'));
        }

        return null;
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}
