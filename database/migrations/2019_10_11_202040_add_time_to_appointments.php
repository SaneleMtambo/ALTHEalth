<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimeToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('time')->nullable();
          });
      }
    
      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          Schema::table('time', function (Blueprint $table) {
              //
          });
      }
    }