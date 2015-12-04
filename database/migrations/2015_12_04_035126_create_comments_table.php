<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nickname');
			$table->string('email')->nullable();
			$table->string('qq')->nullable();
			$table->string('website')->nullable();
			$table->text('content');
			$table->string('photo')->nullable(); // 头像
			$table->string('verify_code')->nullable();    // 验证码
			$table->integer('article_id')->nullable()->default(0);
			$table->integer('page_id')->nullable()->default(0);
			$table->text('reply')->nullable();
			$table->dateTime('reply_at')->nullable();
			$table->integer('checked')->default(1);   // 审核 默认通过
			$table->dateTime('checked_at')->nullable();   // 审核时间
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
		Schema::drop('comments');
	}

}
