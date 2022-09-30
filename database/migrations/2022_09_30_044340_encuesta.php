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
        Schema::create('encuesta', function(blueprint $table){
            $table->id();
            $table->string('Encuesta_ID');
            $table->string('Usuario_ID');
            $table->string('Preg_1');
            $table->string('Preg_2');
            $table->string('Preg_3');
            $table->string('Preg_4');
            $table->string('Preg_5');
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
