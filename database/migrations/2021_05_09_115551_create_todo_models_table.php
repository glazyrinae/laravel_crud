<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->set('priopity', ['Low', 'Medium', 'Hight']);
            $table->date('datestart');
            $table->date('dateend');
            $table->string('description');
            $table->boolean('hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_models');
    }
}
