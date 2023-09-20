<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Greeting extends Model
{
    use HasFactory;
    use Uuid;
    protected $table        = 'greetings';
    protected $primaryKey   = 'id';
    protected $guarded      = [];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryGreetings');
            $imagePath = public_path() . "/{$directory}" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("/{$directory}" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageThumbUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryGreetings');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}" . $thumbnail;
            if (file_exists($imagePath)) $imageThumbUrl = asset("/$directory" . $thumbnail);
        }

        return $imageThumbUrl;
    }


    public function getStatusLabelAttribute()
    {
        //ADAPUN VALUENYA AKAN MENCETAK HTML BERDASARKAN VALUE DARI FIELD STATUS
        if ($this->status == 0) {
            return '<span class="badge badge-primary">Draft</span>';
        }
        return '<span class="badge badge-success">Published</span>';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    //change default date view
    public function getCreatedAtAttribute($createdAt)
    {
        // return Carbon::parse($createdAt)->format('d-M-Y');
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->diffForHumans();
    }
    //change default date view
    public function getUpdatedAtAttribute($updateddAt)
    {
        // return Carbon::parse($updateddAt)->format('d-M-Y');
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }

    // fungsi scope untuk manampilkan yang status publish
    public function scopePublished($query)
    {
        return $query->where("status", "=", 1);
    }

    public function menuitems()
    {
        return $this->hasMany(MenuItems::class, 'linkid');
    }
}
