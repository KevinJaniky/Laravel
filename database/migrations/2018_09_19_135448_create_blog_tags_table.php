<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTagsTable extends Migration {

	public function up()
	{
		Schema::create('blog_tags', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('slug')->unique();
		});
	}

	public function down()
	{
		Schema::drop('blog_tags');
	}
}