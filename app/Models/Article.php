<?php

namespace App\Models;
// trait searchable importato
use Laravel\Scout\Searchable;  
use App\Models\Tag;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    // qui abbiamo aggiunto il trait Searchable




    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id',
        'is_accepted',
        'slug',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
      // qui abbiamo aggiunto il trait Searchable
    
    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category,
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function readDuration(){
        $totalWords = str_word_count($this->body);
        $minutesToRead = round($totalWords/200);

        return intval($minutesToRead);
    }

}
