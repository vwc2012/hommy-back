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

        //ATRIBUTOS DO USUÁRIO

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("email")->nullable()->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string("telephone_number")->nullable();
            $table->biginteger("cpf")->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
