<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cates', function (Blueprint $table) {
            $table->increments('cate_id')->unsigned()->comment('后台栏目ID');
            $table->string('cate_name', 20)->default('')->comment('后台栏目名');
            $table->tinyInteger('parent_id')->default(0)->comment('父级栏目ID');
            $table->tinyInteger('is_enabled')->default(1)->comment('是否有效');
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
        Schema::drop('cates');
    }
}
