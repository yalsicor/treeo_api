<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    */
   
    'route' => 'media',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited 
    | by URI. 
    | 
    | Define as many directories as you like.
    |
    */
    
    'paths' => array(
        public_path('storage/media'),
        public_path('storage/defaults'),
        public_path('storage/sample'),
        public_path('upload'),
        public_path('images'),
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates 
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
    */
   
    'templates' => array(
        'small_square'      => 'App\Containers\Media\Filters\SmallSquare',
        'large_square'      => 'App\Containers\Media\Filters\LargeSquare',
        'avatar'            => 'App\Containers\Media\Filters\LargeSquare',
        'thumbnail'         => 'App\Containers\Media\Filters\Thumbnail',
        'small'             => 'App\Containers\Media\Filters\Small',
        'small320'          => 'App\Containers\Media\Filters\Small320',
        'medium'            => 'App\Containers\Media\Filters\Medium',
        'medium640'         => 'App\Containers\Media\Filters\Medium640',
        'medium800'         => 'App\Containers\Media\Filters\Medium800',
        'large'             => 'App\Containers\Media\Filters\Large',
        'large1600'         => 'App\Containers\Media\Filters\Large1600',
        'large2048'         => 'App\Containers\Media\Filters\Large2048',
    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */
   
    'lifetime' => 43200,

);
