<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['author', 'category'];
    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //             ->orWhere('author', 'like', '%' . $search . '%');
    //     });
    //     $query->when($filters['category'] ?? false, function ($query, $category) {
    //         return $query->whereHas('category', function ($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });
    // }

    public function book() {
        return $this->belongsTo(Book::class);
    }
}