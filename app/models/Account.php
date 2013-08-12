<?php

use \LaravelBook\Ardent\Ardent;

class Account extends Ardent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * @var array
     */
    protected $guarded = array('login_email_address', 'password');

}