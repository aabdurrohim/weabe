<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'slug',
        'imageUrl',
        'date',
        'category',
        'content1',
        'content2',
    ];

    // Jika ingin menambahkan fungsi untuk format tanggal atau lainnya, bisa ditambahkan di sini
    protected $dates = ['date'];
}
