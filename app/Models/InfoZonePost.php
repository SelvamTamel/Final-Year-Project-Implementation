<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoZonePost extends Model
{
    use HasFactory;
    protected $table = 'info_zone_posts';
    protected $fillable =['post_id ','post_image','post_tittle', 'post_content','post_author_image', 'post_author_name ','post_date','post_category', 'post_users_views', 'post_status'];
    protected $dates = ['post_date'];
}
