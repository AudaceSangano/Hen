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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('name');
            $table->string('telephone');
            $table->string('quantity');
            $table->string('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });

        App\Models\Product::create([
            'name' => "amanyarwanda",
            'telephone' => "250783503691",
            'user_id'=>2,
            'quantity'=>1000,
            'price'=>150,
            'category_id' =>1
        ]);

        App\Models\Product::create([
            'name' => "amanyarwanda",
            'telephone' => "250783503691",
            'user_id'=>2,
            'quantity'=>2000,
            'price'=>1500,
            'category_id' =>2
        ]);

        App\Models\Product::create([
            'name' => "amanyarwanda",
            'telephone' => "250783503691",
            'user_id'=>2,
            'quantity'=>8000,
            'price'=>8000,
            'category_id' =>3
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
