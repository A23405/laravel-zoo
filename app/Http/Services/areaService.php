<?php
namespace App\Http\Services;

use App\Models\area;
use Illuminate\Support\Facades\Storage;

class areaService
{
    //查詢全部
    public function getAllarea()
    {
    $areas = area::orderBy('created_at')->get();
    return $areas;
    }


    //建新的一筆資料
    public function createarea($request , $file)
    {
    $request->all();
    $path =  $file->store('public/img');
    $path = str_replace("public", "/storage", $path);
    $result = area::create(
        [
            'pid' => $request->pid,
            'name' => $request->name,
            'introduction' => $request->introduction,
            'img' => $path
        ]
    );
    // return $result;
    return $result;
    }

    //更新一筆資料
    public function updatearea($request, $id , $file)
    {
        $path =  $file->store('public/img');
        $path = str_replace("public", "/storage", $path);
        if(area::where('id', $id)->first()){
            $deletepath = str_replace("/storage","public",area::where('id', $id)->first()->img);
            Storage::delete($deletepath);
        }
        $result = area::where('id', $id)->update(
            [
                'pid' => $request->pid,
                'name' => $request->name,
                'introduction' => $request->introduction,
                'img' => $path
            ]
        );
        return $result;
    }

    //刪除
    public function deletearea($id)
    {
        if(area::where('id', $id)->first()){
            $deletepath = str_replace("/storage","public",area::where('id', $id)->first()->img);
            Storage::delete($deletepath);
        }
        $result = area::where('id', $id)->delete();
        return $result;
        //先確認有此id在刪檔不然會報錯
    }

    public function getOne($id)
    {
        $result = area::where('id', $id)->first();
        return $result;
    }
}