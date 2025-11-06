<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian extends Model
{
    use HasFactory;

    // Tambahkan ini supaya Laravel pakai tabel "antrian" bukan "antrians"
    protected $table = 'antrian';

    // Tambahkan field yang boleh diisi massal
    protected $fillable = [
        'nama',
        'layanan',
        'tanggal',
        'waktu',
        'nomor_antrian',
    ];
}
