<?php

namespace App\Containers\Media\Models;

use App\Containers\Media\Filters\Large;
use App\Containers\Post\Models\Post;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Intervention\Image\Facades\Image;

/**
 * Class Media
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class Media extends Model
{
    protected $fillable = [
        'title',
        'file',
        'path',
        'ext',
        'description',
        'alt',
        'filename',
        'width',
        'height',

        'created_at',
        'updated_at',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'images');
    }

    /**
     * @return $this
     */
    public function dimensions()
    {

        $this->orig             = [
            'w' => $this->width,
            'h' => $this->height
        ];
        $this->large2048        = $this->getDimensions($this->width, $this->height, 2048);
        $this->large1600        = $this->getDimensions($this->width, $this->height, 1600);
        $this->large            = $this->getDimensions($this->width, $this->height, 1024);
        $this->medium800        = $this->getDimensions($this->width, $this->height, 800);
        $this->medium640        = $this->getDimensions($this->width, $this->height, 640);
        $this->medium           = $this->getDimensions($this->width, $this->height, 500);
        $this->small320         = $this->getDimensions($this->width, $this->height, 320);
        $this->small            = $this->getDimensions($this->width, $this->height, 240);
        $this->thumbnail        = $this->getDimensions($this->width, $this->height, 100);

        $this->avatar           = $this->getDimensions($this->width, $this->height, 150, true);
        $this->small_square     = $this->getDimensions($this->width, $this->height, 75, true);
        $this->large_square     = $this->getDimensions($this->width, $this->height, 150, true);

        return $this;
    }

    /**
     * @param $width
     * @param $height
     * @param $number
     * @param bool $squared
     * @return array
     */
    protected function getDimensions($width, $height, $number, $squared = false)
    {
        if ($width > $height) {
            $w = ($width > $number) ? $number : $width;
            if ($squared) $h = $w;
            else $h = $height * $w / $width;
        }
        else {
            $h = ($height > $number)? $number : $height;
            if ($squared) $w = $h;
            else $w = $width * $h / $height;
        }
        return ['w' => (int) $w, 'h' => (int) $h];
    }

    /**
     * @return bool|null
     * @throws \Exception
     */
    public function deleteMedia()
    {
        //delete from db
        $response = $this->delete();
        //delete file
        if (file_exists(storage_path('app/'.$this->path))) unlink(storage_path('app/'.$this->path));
        return $response;
    }
}
