<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('type');
			$table->string('lang', 2);
            $table->string('title');
            $table->string('meta_description');
            $table->string('h1');
            $table->longText('content');
            $table->text('description');
            $table->boolean('show_on_cover')->default(0);
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
		Schema::table('pages', function(Blueprint $table)
		{
			//
		});
	}

}