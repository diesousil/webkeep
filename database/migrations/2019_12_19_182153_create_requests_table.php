<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::disableForeignKeyConstraints();
        Schema::create('requests', function (Blueprint $table) {
			
            $table->bigIncrements('id');
			
			$table->string('name');
			$table->string('url');
			$table->string('domain');
			$table->enum('status',['draft','waiting','executing','done']);
			$table->enum('scope',['page','domain','multiple','web']);
			$table->dateTime('started_at');
			$table->dateTime('ended_at');
			
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';			
			
        });
		Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('requests');
		Schema::enableForeignKeyConstraints();
    }
}
