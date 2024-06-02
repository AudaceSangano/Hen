<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Province;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('province_code')->nullable();
            $table->timestamps();
        });
        //insert province
        DB::table('provinces')->insert([
            ['id'=>5, 'name'=>'EASTERN'],
            ['id'=>1, 'name'=>'KIGALI'],
            ['id'=>4, 'name'=>'NORTHERN'],
            ['id'=>2, 'name'=>'SOUTHERN'],
            ['id'=>3, 'name'=>'WESTERN']
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
};
