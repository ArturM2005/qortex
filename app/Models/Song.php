<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /** @use HasFactory<\Database\Factories\SongFactory> */
    use HasFactory;
    public function albums() {
        $this->belongsToMany(Album::class, 'album_songs', 'song_id', 'album_id');
    }
}
