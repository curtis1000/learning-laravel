<?php

class DealerModelTest extends TestCase {

    /**
     *
     * @return void
     */
    public function testDealerAccountCreation()
    {
        $account = new Account();
        $account->login_email_address = 'test@name.com';
        $account->password = '3very!secure6';

        $accountValid = $account->save();
        $this->assertTrue($accountValid);

        $dealer = new Dealer();
        $dealer->account()->associate($account);
        $dealer->name = 'Plumbing Inc.';
        $dealer->support_email_address = 'support@name.com';
        $dealer->dealer_id = '90237493';
        $dealer->language = Dealer::LANG_FRENCH;
        $dealer->address_line_1 = '234 8th Street S';
        $dealer->address_line_2 = 'Suite 4';
        $dealer->country = 'United States';
        $dealer->city = 'Burnsville';
        $dealer->state_province_region = 'Minnesota';
        $dealer->postal_code = '55421';

        $dealerValid = $dealer->save();
        $this->assertTrue($dealerValid);
    }

}