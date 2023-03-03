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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('plan_id')->nullable();
            $table->string('family_name')->nullable();
            $table->enum('user_type', ['principal', 'spouse', 'dependant']);
            $table->string('home_address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('principal_name');
            $table->date('dob');
            $table->enum('sex', ['M', 'F']);
            $table->string('blood_group')->nullable();
            $table->string('allergies')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('hospital_address')->nullable();
            $table->string('signature')->nullable();
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
