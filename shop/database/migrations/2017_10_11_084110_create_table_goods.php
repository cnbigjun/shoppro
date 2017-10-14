<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id');
            $table->smallinteger('cat_id')->default(0);
            $table->string('goods_name',60)->default('');
            $table->decimal('plus_price',9,2)->default(0.00);
            $table->decimal('market_price',9,2)->default(0.00);
            $table->smallinteger('goods_number')->default(11);
            $table->string('goods_keywords')->default('');
            $table->string('goods_brief',100)->default('');
            $table->text('goods_desc');
            $table->string('thumb_img',100)->default('');
            $table->string('goods_img',100)->default('');
            $table->tinyinteger('is_on_sale')->default(1);
            $table->tinyinteger('is_delete')->default(0);
            $table->tinyinteger('is_best')->default(0);
            $table->tinyinteger('is_new')->default(0);
            $table->tinyinteger('is_hot')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
