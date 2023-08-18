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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('user_unique');
            $table->string('name', 64);
            $table->string('lastname', 64);
            $table->date('date_of_birth');
            $table->string('address', 128);
            $table->string('kind_of_subscription', 64);
            $table->date('end_subscription');
            $table->string('main_picture')->nullable();
            $table->string('goal', 64);

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
        Schema::dropIfExists('customers');
    }
};
