<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joob extends Model
{
    protected $title;

    public function __construct( $title )
    {
        $this->title = $title;
    }
}
