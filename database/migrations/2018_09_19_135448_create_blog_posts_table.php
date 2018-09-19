<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTable extends Migration {

	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('category_id')->unsigned()->index();
			$table->string('title');
			$table->string('slug')->unique();
			$table->string('description')->nullable();
			$table->text('summary');
			$table->text('content');
			$table->enum('status', array('draft', 'publish'))->index();
			$table->boolean('comments')->index();
			$table->string('lang')->default('fr');
			$table->integer('uid');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('blog_posts');
	}
}