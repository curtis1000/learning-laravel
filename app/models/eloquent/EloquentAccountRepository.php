<?php

class EloquentAccountRepository extends Eloquent implements AccountRepositoryInterface
{
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