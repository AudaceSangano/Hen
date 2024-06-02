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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('sector_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('district_id')->on('districts')->onDelete('cascade');
            $table->foreign('sector_id')->references('sector_id')->on('sectors')->onDelete('cascade');
        });

        App\Models\User::create([
            'name' => "admin",
            'email' => "admin@hen.com",
            'telephone' => "250783503691",
            'province_id'=>1,
            'district_id'=>101,
            'sector_id'=>10101,
            'password' => '$2y$10$EDxE9OA6O0KzOpeqV0npw.mMhidqKrdCDODFgpheUMf9VbFO762zW',  //test@123
            'role_id' => 1,
        ]);

        App\Models\User::create([
            'name' => "farmer",
            'email' => "farmer@hen.com",
            'telephone' => "250790203756",
            'province_id'=>1,
            'district_id'=>101,
            'sector_id'=>10101,
            'password' => '$2y$10$EDxE9OA6O0KzOpeqV0npw.mMhidqKrdCDODFgpheUMf9VbFO762zW',  //test@123
            'role_id' => 2,
        ]);

        App\Models\User::create([
            'name' => "client",
            'email' => "client@hen.com",
            'telephone' => "250722696343",
            'province_id'=>1,
            'district_id'=>101,
            'sector_id'=>10101,
            'password' => '$2y$10$EDxE9OA6O0KzOpeqV0npw.mMhidqKrdCDODFgpheUMf9VbFO762zW',  //test@123
            'role_id' => 3,
        ]);
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
};
