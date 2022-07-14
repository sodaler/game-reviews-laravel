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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('short_description');
            $table->text('quote')->nullable();
            $table->string('author')->nullable();
            $table->string('content_title');
            $table->text('conclusion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('short_description');
            $table->dropColumn('quote');
            $table->dropColumn('author');
            $table->dropColumn('content_title');
            $table->dropColumn('conclusion');
        });
    }
};
