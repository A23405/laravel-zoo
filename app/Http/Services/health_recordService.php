<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\health_record;

class health_recordService
{
    //查詢全部
    public function getAllhealth_record()
    {
        $result = health_record::all();
        return $result;
    }

    //建新的一筆資料
    public function createUser($request)
    {
    }

    //更新一筆資料
    public function updatearea($request, $id)
    {
    }

    //刪除
    public function deletearea($id)
    {
    }

    //取單一資料
    public function getOne($id)
    {
    }
}
