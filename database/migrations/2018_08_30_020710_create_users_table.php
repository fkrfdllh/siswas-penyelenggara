<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('userid');
            $table->integer('instansi_id');
            $table->string('fullname');
            $table->string('username');
            $table->string('password');
            $table->string('old_password');
            $table->string('email');
            $table->string('alternative_email');
            $table->tinyInteger('allow_concurrent_login');
            $table->tinyInteger('has_change_password');
            $table->tinyInteger('enable_change_password');
            $table->datetime('last_change_password');
            $table->integer('password_expired_remainder');
            $table->integer('attemp_count');
            $table->datetime('attemp_time');
            $table->datetime('user_expired');
            $table->datetime('last_login');
            $table->tinyInteger('block');
            $table->string('activation');
            $table->string('code_activation');
            $table->text('params');
            $table->integer('lock_by');
            $table->datetime('lock_at');
            $table->string('lock_address');
            $table->integer('insert_by');
            $table->datetime('insert_at');
            $table->integer('update_by');
            $table->datetime('update_at');
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
