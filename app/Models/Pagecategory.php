<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pagecategory extends Model
{
    use HasFactory;
    use Uuid;
    protected $table        = 'pagecategories';
    protected $primaryKey   = 'id';
    protected $guarded      = [];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'pagecategory_id');
    }
}
