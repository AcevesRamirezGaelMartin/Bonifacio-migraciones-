<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario1', function(blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo');
            $table->string('matricula');
            $table->string('contrasena');
            $table->timestamps();//created_at updated_at
        });
    
        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('usuario1');
    }
};
