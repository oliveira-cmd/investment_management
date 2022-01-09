<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
			$table->string('cpf', 15)->unique()->Nullable(); // varchar(15)
			$table->string('name', 50);
			$table->string('phone', 15);
			$table->date('birth')->nullable();
			$table->string('gender', 1)->nullable();
			$table->text('notes')->nullable();
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');
			$table->rememberToken(); // utilizado pelo laravel para atualizar a senha do user
            $table->timestamps(); // cria dois campos "created_at" e "updated_at" - gerenciados pelo laravel
			$table->softDeletes(); // apaga o dado da aplicação, mas mantem o mesmo no banco, e salva com o campo "deleted_at" - gerenciado pelo laravel pra salvar a data de delete
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table){

		});
		Schema::drop('users');
	}
}
