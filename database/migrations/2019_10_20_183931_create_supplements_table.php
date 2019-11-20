<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('cost_exc');
            $table->string('cost_incl');
            $table->string('perc_incl');
            $table->string('cost_patient');
            $table->string('invoice_id');
            $table->string('supplier_id');
            $table->string('mini_levels');
            $table->string('stock_level');
            $table->string('napi_code');
            $table->string('ga_id');
            $table->string('hcp_id');
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
        Schema::dropIfExists('supplements');
    }
}
