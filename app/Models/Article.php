<?php

namespace App\Models;
// trait searchable importato
use Laravel\Scout\Searchable;  
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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

      // qui abbiamo aggiunto il trait Searchable
    
    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->title,
            'category' => $this->category,
        ];
    }


}
