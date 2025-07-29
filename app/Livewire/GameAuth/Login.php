<?php

namespace App\Livewire\GameAuth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\GameAccount;

class Login extends Component
{
    public $username;
    public $password;

    public function login()
    {
        // Find game account
        $account = GameAccount::where('userid', $this->username)->first();

        // Check if user exists and password matches (plain text, rAthena style)
        if (!$account || $account->user_pass !== $this->password) {
            $this->addError('login', 'Invalid username or password.');
            return;
        }

        // Login using custom guard
        Auth::guard('game')->login($account);

        // Redirect after successful login
        // return redirect()->intended('/dashboard');
        dd('LOGIN SUCCESS');
    }

    public function render()
    {
        return view('livewire.game-auth.login');
    }
}
