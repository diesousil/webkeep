<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
			
            $table->bigIncrements('id');
            $table->unsignedBigInteger('request_id');
			
			$table->string('protocol');
			$table->string('url');
			
			$table->foreign('request_id')->references('id')->on('requests');
			
            $table->timestamps();
			$table->softDeletes();
            $table->engine = 'InnoDB';
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domains');
    }
}
