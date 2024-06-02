<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\District;
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
        Schema::create('districts', function (Blueprint $table) {
            $table->id('district_id');
            $table->string('district_name');
            $table->integer('district_code')->nullable();
            $table->bigInteger('province_id')->unsigned(); // foreign from  provinces table
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->timestamps();
        });
        //insert district
        DB::table('districts')->insert([
            ['district_id'=>101, 'district_name'=>'Nyarugenge', 'province_id'=>1],
            ['district_id'=>102, 'district_name'=>'Gasabo', 'province_id'=>1],
            ['district_id'=>103, 'district_name'=>'Kicukiro', 'province_id'=>1],
            ['district_id'=>201, 'district_name'=>'Nyanza', 'province_id'=>2],
            ['district_id'=>202, 'district_name'=>'Gisagara', 'province_id'=>2],
            ['district_id'=>203, 'district_name'=>'Nyaruguru', 'province_id'=>2],
            ['district_id'=>204, 'district_name'=>'Huye', 'province_id'=>2],
            ['district_id'=>205, 'district_name'=>'Nyamagabe', 'province_id'=>2],
            ['district_id'=>206, 'district_name'=>'Ruhango', 'province_id'=>2],
            ['district_id'=>207, 'district_name'=>'Muhanga', 'province_id'=>2],
            ['district_id'=>208, 'district_name'=>'Kamonyi', 'province_id'=>2],
            ['district_id'=>301, 'district_name'=>'Karongi', 'province_id'=>3],
            ['district_id'=>302, 'district_name'=>'Rutsiro', 'province_id'=>3],
            ['district_id'=>303, 'district_name'=>'Rubavu', 'province_id'=>3],
            ['district_id'=>304, 'district_name'=>'Nyabihu', 'province_id'=>3],
            ['district_id'=>305, 'district_name'=>'Ngororero', 'province_id'=>3],
            ['district_id'=>306, 'district_name'=>'Rusizi', 'province_id'=>3],
            ['district_id'=>307, 'district_name'=>'Nyamasheke', 'province_id'=>3],
            ['district_id'=>401, 'district_name'=>'Rulindo', 'province_id'=>4],
            ['district_id'=>402, 'district_name'=>'Gakenke', 'province_id'=>4],
            ['district_id'=>403, 'district_name'=>'Musanze', 'province_id'=>4],
            ['district_id'=>404, 'district_name'=>'Burera', 'province_id'=>4],
            ['district_id'=>405, 'district_name'=>'Gicumbi', 'province_id'=>4],
            ['district_id'=>501, 'district_name'=>'Rwamagana', 'province_id'=>5],
            ['district_id'=>502, 'district_name'=>'Nyagatare', 'province_id'=>5],
            ['district_id'=>503, 'district_name'=>'Gatsibo', 'province_id'=>5],
            ['district_id'=>504, 'district_name'=>'Kayonza', 'province_id'=>5],
            ['district_id'=>505, 'district_name'=>'Kirehe', 'province_id'=>5],
            ['district_id'=>506, 'district_name'=>'Ngoma', 'province_id'=>5],
            ['district_id'=>507, 'district_name'=>'Bugesera', 'province_id'=>5]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
};
