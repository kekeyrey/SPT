<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Atribut yang bisa diisi secara massal.
     * Pastikan kolom 'name', 'image', dan 'category' ada di database!
     */
    protected $fillable = [
        'name',
        'image',
        'category',
    ];

    /**
     * Daftar kategori produk yang digunakan di database.
     * Bisa dipakai untuk validasi dan mapping tampilan.
     */
    const CATEGORY_BAHAN_BAKU = 'bahan_baku';
    const CATEGORY_PAKAN_JADI = 'pakan_jadi';
    const CATEGORY_VIEW = 'view';

    /**
     * Ambil daftar kategori sebagai array.
     */
    public static function categories(): array
    {
        return [
            self::CATEGORY_BAHAN_BAKU => 'Bahan Baku Pakan',
            self::CATEGORY_PAKAN_JADI => 'Pakan Jadi',
             self::CATEGORY_VIEW => 'view',
        ];
    }
}
