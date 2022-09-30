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
        Schema::create('acceso', function(blueprint $table){
            $table->id();
            $table->string('Encuesta_ID');
            $table->string('Usuario_ID');
            $table->string('QR');
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
        schema::dropIfExists('acceso');
    }
};
