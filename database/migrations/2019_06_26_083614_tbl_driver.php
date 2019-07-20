<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDriver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Driver', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('LicenseNo');
            $table->string('NIC');
            $table->string('name');
            $table->string('Address');
            $table->int('Number');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
