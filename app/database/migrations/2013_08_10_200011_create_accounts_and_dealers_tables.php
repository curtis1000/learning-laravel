<?php

use Illuminate\Database\Migrations\Migration;

class CreateAccountsAndDealersTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('accounts', function($table) {

            // InnoDB for foreign key support
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('login_email_address');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('dealers', function($table) {

            // InnoDB for foreign key support
            $table->engine = 'InnoDB';

            $table->increments('id');
            // login email address is a parent property
            // password is a parent property
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');;
            $table->string('name');
            $table->string('support_email_address');
            $table->string('dealer_id');
            $table->enum('language', array('English', 'French', 'Spanish'));
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('country');
            $table->string('city');
            $table->string('state_province_region');
            $table->string('postal_code');
            $table->timestamps();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('dealers');
        Schema::drop('accounts');
	}

}