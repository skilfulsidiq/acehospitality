<?php

namespace App\Livewire\Backend\Auth;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class LoginPage extends Component
{
    use LivewireAlert;
    public function render()
    {
        return view('livewire.backend.auth.login-page');
    }


    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        // 'email' => 'required|email:rfc,dns',
        'password' => 'required|min:6',
    ];
    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }
    //This mounts the default credentials for the admin. Remove this section if you want to make it public.
    public function mount() {
        if(auth()->user()) {
            return redirect()->intended('/dashboard');
        }
        // $this->fill([
        //     'email' => 'admin@test.com',
        //     'password' => '123456',
        // ]);
    }
    // public function updatedEmail()
    // {
    //     $this->validate(['email' => 'required|email|exists:admins']);
    // }

    public function login() {

        $credentials = $this->validate();

        $u = DB::table('admins')->where('email', $this->email)->first();
        if($u && $u->account_is_locked == 1) {
            abort(403);
            return;
        }
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = Admin::where(['email' => $this->email])->first();

            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');


        } else {
            // $this->flash('success', 'Successfully submitted form', [], '/');
            $this->alert("error", "Invalid credetials", [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true
            ]
            );
            return $this->addError('email', trans('auth.failed'));
        }
    }


}
