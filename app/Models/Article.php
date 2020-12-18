<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','body'];

    protected $fillable = ['title','body','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
