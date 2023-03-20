<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    function send_notification()
    {
        $session = service('session');
        $auth = service('auth');

        if ($auth->check() && !$session->get('login_email_sent')) {
            $email = service('email');
            $userEmail = $session->get('logged_in')['email'];

            $email->setTo($userEmail);
            $email->setSubject('Login Notification');
            $email->setMessage('You have successfully logged in.');
            $email->send();

            $session->set('login_email_sent', true);
        }

        $session->get('login_email_sent');
    }
}
