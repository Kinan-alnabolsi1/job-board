<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use HasUuids;
    //Primary key
    protected $primaryKey = 'id'; //modifyliable primary key name //we need this because the default primary key name is id(bruler) but we have id as the primary key name in the database
    protected $keyType = 'string'; //UUID
    public $incrementing = false; 

    protected $table = 'post'; //modifyliable table name //we need this because the default table name is posts(bruler) but we have post as the table name in the database
    protected $fillable = [
        'title',
        'author',
        'body',
        'published',
    ];//modifyliable fillable fields -> fileds that can be updated in the database

    protected $guarded = [
        'id',
    ];//modifyliable guarded fields -> fileds that cannot be updated or assigned in the database (readonly fields)

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
