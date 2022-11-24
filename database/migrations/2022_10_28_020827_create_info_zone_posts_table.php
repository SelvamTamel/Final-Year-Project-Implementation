<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_zone_posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_image');
            $table->string('post_tittle');
            $table->text('post_content');
            $table->string('post_author_image');
            $table->string('post_author_name');
            $table->date('post_date');
            $table->string('post_category');
            $table->tinyInteger('post_category_num');
            $table->tinyInteger('post_users_views');
            $table->string('post_widget_image');
            $table->string('post_widget_name');
            $table->string('post_status');
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
        Schema::dropIfExists('info_zone_posts');
    }
};
