<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function KnygosAutorius()
    {
        return $this->BelongsTo('App\Author', 'author_id', 'id');
    }
}
