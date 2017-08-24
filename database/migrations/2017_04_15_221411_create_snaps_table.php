<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snaps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('cloudinary_id', 100);
            $table->text('title', 100);
            $table->text('description');
            $table->integer('loves');
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
        Schema::dropIfExists('snaps');
    }
}
