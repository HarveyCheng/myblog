<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->default(0);
			$table->string('title');
			$table->string('intro')->nullable();  // 简介
			$table->text('body');
			$table->integer('top')->default(0);   // 置顶
			$table->integer('hits')->default(0);  // 点击数
			$table->integer('shared')->default(0); // 分享数
			$table->string('image')->nullable();
			$table->string('thumb_image')->nullable();
			$table->integer('user_id');
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
		Schema::drop('articles');
	}

}
