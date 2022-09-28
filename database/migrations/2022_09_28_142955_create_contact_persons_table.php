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
        Schema::table('contact_persons', function (Blueprint $table) {
            $table->id();
            $table->string('CompleteName', 100)->nullable();
            $table->string('ContactNumber',20);
            $table->string('email', 100);
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
        Schema::table('contact_persons', function (Blueprint $table) {
            //
        });
    }
};
