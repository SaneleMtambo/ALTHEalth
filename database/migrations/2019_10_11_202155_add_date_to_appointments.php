<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDateToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('date')->nullable();
          });
      }
    
      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          Schema::table('date', function (Blueprint $table) {
              //
          });
      }
    }