<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        // return $this->orderBy('updated_at', 'ASC')->limit($limit_count)->get();
        return $this->orderBy('updated_at', 'ASC')->Paginate($limit_count);
    }
    
    public function getById($id_extract)
    {
        // $arr_url = parse_url($_SERVER["REQUEST_URI"]);
        // $id = (int) end($arr_url);
        \Log::info($id_extract);
        return $this -> where('created_at','=',$id_extract) -> get();
    }
}
