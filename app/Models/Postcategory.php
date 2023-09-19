<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postcategory extends Model
{
    use HasFactory;
    use Uuid;
    // use SoftDeletes;
    protected $table        = 'postcategories';
    protected $primaryKey   = 'id';
    protected $guarded      = [];


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'postcategory_id');
    }


    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryCategorypost');
            $imagePath = public_path() . "/{$directory}" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("/{$directory}" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageThumbUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryCategorypost');
            $ext       = substr(strrchr($this->image, '.'), 1);
            // $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/images_thumb/" . $this->image;
            if (file_exists($imagePath)) $imageThumbUrl = asset("/$directory" . $this->image);
        }

        return $imageThumbUrl;
    }
}
