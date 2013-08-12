<?php

class DealerRegisterController extends BaseController {

    public function getForm()
    {
        $dealer = new Dealer();
        return View::make('dealer-register')->with('dealer', $dealer);
    }

    public function postForm()
    {
        $dealer = new Dealerp();
        if ($dealer->save()) {
            die('success');
            //return Redirect::route('/')->with('message', 'Thanks for registering!');
        } else {
            return Redirect::route('get-dealer-register')->withErrors($dealer->errors());
        }
    }

}