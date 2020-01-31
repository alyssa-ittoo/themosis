<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    /**
     * @var string
     */
    protected $primaryKey = 'ID';
}
