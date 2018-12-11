<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
// <?php

// require_once 'functions.php';

// if (isLoggedIn()) {
//     header('Location:' . BASE_URL . '/index.php');
//     exit();
// }

// if (isset($_POST['password'])) {
//     if (checkPassword($_POST['password'])) {
//         login();
//         header('Location:' . BASE_URL . '/index.php');
//         exit();
//     }
// }prisiloginimo kelias

// <?php
// require_once 'functions.php';

// mano funkcijos
// function isLoggedIn(): bool
// {
//     if (session_status() == PHP_SESSION_NONE) {
//         session_start();
//     }

//     return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] == true;
// }

// function addFlashMessage(string $messageType, string $text)
// {
//     if (session_status() == PHP_SESSION_NONE) {
//         session_start();
//     }

//     if (!isset($_SESSION['flash_messages'])) {
//         $_SESSION['flash_messages'] = [];
//     }

//     $_SESSION['flash_messages'][] = [
//         'type' => $messageType,
//         'text' => $text,
//     ];
// }

// function checkLoginAndRedirect(): void
// {
//     if (!isLoggedIn()) {
//         header('Location:' . BASE_URL . '/form.php');
//         addFlashMessage('danger', 'You must be logged in!');
//         exit();
//     }
// }

// function checkPassword(string $password): bool
// {
//     return password_verify($password, ADMIN_PASSWORD_HASH);
// }

// function login(): void
// {
//     if (session_status() == PHP_SESSION_NONE) {
//         session_start();
//     }

//     $_SESSION['admin_logged_in'] = true;
// }

// function logout(): void
// {
//     if (session_status() == PHP_SESSION_NONE) {
//         session_start();
//     }

//     session_destroy();
// }

// logout();

// header('Location:' . BASE_URL . '/form.php');  logautas

// addFlashMessage('danger', 'Password incorrect!');
// header('Location:' . BASE_URL . '/form.php');
// <div role="alert" class="alert alert-<?php echo $messageType; //?

//password_hash().uzkesuoja pasworda
