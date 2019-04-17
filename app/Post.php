<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['user_id', 'post_media', 'post_publish_date', 'post_content'];


    protected $casts = [
        'post_publish_date' => 'date:d.m.Y H:i',
        'created_at' => 'date:d.m.Y H:i'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}



