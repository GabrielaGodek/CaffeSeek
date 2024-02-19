<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['tag']);
        if ($filters['tag'] ?? false) {
            $query->where('ingredients', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('ingredients', 'like', '%' . request('search') . '%');
            // $filteredUrl = url()->current() . '#' . Str::slug('all-products');
            // return $filteredUrl;
        }
    }
}
