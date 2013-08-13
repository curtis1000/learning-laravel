<?php

class EloquentDealerRepository extends Eloquent implements DealerRepositoryInterface
{
    protected $table = 'dealers';

    /**
     * @var bool
     */
    public $autoHydrateEntityFromInput = true;

    /**
     * @var bool
     */
    public $forceEntityHydrationFromInput = true;

    /**
     * @var LanguageRepositoryInterface
     */
    protected $languageRepository;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('EloquentAccountRepository');
    }
}