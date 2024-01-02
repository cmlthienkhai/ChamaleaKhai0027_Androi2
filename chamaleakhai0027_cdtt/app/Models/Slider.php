<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'cmlk_slider';
    
    protected $fillable = ['image_path', 'title', 'description'];

    public function getImageUrl()
    {
        return asset('dist/images/slider/' . $this->image_path);
    }
}
?>