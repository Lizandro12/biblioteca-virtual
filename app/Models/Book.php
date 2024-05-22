<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Author;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'author_id', 'category_id', 'title', 'publishing_company', 'publication_date', 'isbn', 'synopsis',
        'language', 'numb_page', 'price', 'availability', 'contry_code', 'edition',
    ];

    /**
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'publication_date' => 'date',
            'price' => 'decimal:2',
            'availability' => 'boolean',
        ];
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
