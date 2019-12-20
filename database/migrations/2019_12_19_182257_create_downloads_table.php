<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('request_id');
			$table->unsignedBigInteger('parent_id');
			
			$table->string('filename');
			$table->string('url');
			$table->string('path');
			$table->enum('status',['waiting','executing','done','error']);
			$table->string('http_status');
			
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
        Schema::dropIfExists('downloads');
    }
}
