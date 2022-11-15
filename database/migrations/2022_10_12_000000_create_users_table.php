<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->string('dni')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);
            $table->string('telephone')->nullable(true);
            $table->unsignedBigInteger('idCountry')->nullable(true);
            $table->string('iban')->nullable(false);
            $table->string('aboutYou')->nullable(true);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idCountry')->references('id')->on('countries')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
