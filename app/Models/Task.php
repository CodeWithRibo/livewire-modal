<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    public function scopeSearch(Builder $query, ?string $property = null) : Builder
    {
        return $query->where('title', 'LIKE' , '%' . $property . '%');
    }

    public function scopeFiltered(Builder $query, string $sortField, string $sortDirection) : Builder
    {
        return $query->orderBy($sortField, $sortDirection);
    }
}
