<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'body'];
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    public static $rules = array(
        'title' => 'required|max:40',
        'body' => 'required|max:4000'
    );

    public function getByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        // return $this->orderBy('updated_at', 'ASC')->limit($limit_count)->get();
        return $this->orderBy('updated_at', 'ASC')->Paginate($limit_count);
    }
    
}
