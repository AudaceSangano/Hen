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
        Schema::create('roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('name')->nullable();
            $table->timestamps();
        });

        App\Models\Role::create([

            'name' => "admin",
        ]);

        App\Models\Role::create([
            'name' => "farmer"
        ]);

        App\Models\Role::create([
            'name' => "client"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
