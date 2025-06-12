<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration // Ubah nama class
{
    public function up()
    {
        // Di migration products
    Schema::table('products', function (Blueprint $table) {
    $table->foreignId('category_id')->constrained();
});
    }

    public function down()
    {
        Schema::dropIfExists('products'); // Ubah nama tabel
    }
}