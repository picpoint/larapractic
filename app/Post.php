<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

class Post extends Model
{

    use Sluggable;

    protected $fillable = ['title', 'description', 'content', 'category_id', 'views'];

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }


    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public static function uploadImage(Request $request, $image = null) {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }

            $folder = date('m-Y');
            return $request->file('thumbnail')->store("image/{$folder}");
        }

        return null;
    }


    public function getImage() {
        if (!$this->thumbnail) {
            return asset("public/noimage.png");
        }

        return asset("public/{$this->thumbnail}");

    }


    public function getPostDate() {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d, F, Y');
    }



}
