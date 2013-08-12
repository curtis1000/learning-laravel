<?php


class LoginController extends BaseController {

    public function showLogin()
    {
        // new here? button - links to dealer account registration
        $dealerAccountRegistrationActionUrl = URL::action('DealerAccountRegistrationController@showForm');
        return View::make('login')->with('dealerAccountRegistrationActionUrl', $dealerAccountRegistrationActionUrl);
    }

}