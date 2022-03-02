<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags_ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ads_id');
            $table->foreignId('tag_id');
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags_ads', function (Blueprint $table) {
            //
        });
    }
}
