<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
           'request_id',
           'parent_id',
           'filename',
           'url',
			  'path',
			  'status',
			  'http_status',
        ];
}
