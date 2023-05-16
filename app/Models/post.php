<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public function getExcerptAttribute(){
        return substr($this->content, 0, 159);
    }

    public function getPublishedAttribute(){


    }
}
