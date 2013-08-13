<?php

class DealerModelTest extends TestCase {

    /**
     *
     * @return void
     */
    public function testCreateDealer()
    {
        // bind repositories
        App::bind('LanguageRepositoryInterface', 'ConstLanguageRepository');
        App::bind('AccountRepositoryInterface',  'EloquentAccountRepository');
        App::bind('DealerRepositoryInterface',   'EloquentDealerRepository');

        $language   = App::make('LanguageRepositoryInterface');
        $account    = App::make('AccountRepositoryInterface');
        $dealer     = App::make('DealerRepositoryInterface');

        // clear out accounts, related rows are deleted on cascade
        // foreign key relationship prohibits truncate(), so we need to loop
        foreach ($account->all() as $deleteMe) {
            $deleteMe->delete();
        }

        // new dealer -> new account

        $account->login_email_address = 'test@name.com';
        $account->password = '3very!secure6';
        $account->save();

        // attach account to dealer
        $dealer->account()->associate($account);

        // boring data
        $dealer->name                   = 'Plumbing Inc.';
        $dealer->support_email_address  = 'support@name.com';
        $dealer->dealer_id              = '90237493';
        $dealer->language               = $language::LANG_FRENCH;
        $dealer->address_line_1         = '234 8th Street S';
        $dealer->address_line_2         = 'Suite 4';
        $dealer->country                = 'United States';
        $dealer->city                   = 'Burnsville';
        $dealer->state_province_region  = 'Minnesota';
        $dealer->postal_code            = '55421';

        $dealer->save();
    }
}