<?php

use \LaravelBook\Ardent\Ardent;

class Dealer extends Ardent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealers';

    const LANG_ENGLISH = 1;
    const LANG_FRENCH  = 2;
    const LANG_SPANISH = 3;

    /**
     * @var bool
     */
    public $autoHydrateEntityFromInput = true;

    /**
     * @var bool
     */
    public $forceEntityHydrationFromInput = true;

    /**
     * @var array
     */
    public static $rules = array(
        'name' => 'required',
    );

    /**
     * @var array
     */
    public static $customMessages = array(
        'required' => 'The :attribute field is required.',
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('Account');
    }

}