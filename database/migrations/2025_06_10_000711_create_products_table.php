<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration // Ubah nama class
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) { // Ubah nama tabel
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products'); // Ubah nama tabel
    }
}