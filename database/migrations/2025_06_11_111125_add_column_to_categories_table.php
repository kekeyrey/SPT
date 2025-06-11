<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) { // Ubah create menjadi table
            // Tambahkan kolom baru di sini
            // Contoh: $table->string('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Hapus kolom yang ditambahkan
            // Contoh: $table->dropColumn('description');
        });
    }
}