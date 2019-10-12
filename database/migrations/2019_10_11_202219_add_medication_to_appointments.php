<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMedicationToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('medication')->nullable();
          });
      }
    
      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          Schema::table('medication', function (Blueprint $table) {
              //
          });
      }
    }