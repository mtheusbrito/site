<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateMembrosTable.
 */
class CreateMembrosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membros', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->text('avatar')->nullable();
			$table->text('email');
			$table->text('cargo');
			$table->text('descricao');


			$table->timestampsTz();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('membros');
	}
}
