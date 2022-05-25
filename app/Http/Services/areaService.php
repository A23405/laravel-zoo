<?php
namespace App\Http\Services;

use App\Models\area;

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
    public function updatearea($request, $id)
    {
    $result = area::where('id', $id)->update(
        [
            'pid' => $request->pid,
            'name' => $request->name,
            'introduction' => $request->introduction,
            'img' => $request->img
        ]
    );
        return $result;
    }

    //刪除
    public function deletearea($id)
    {
        $result = area::where('id', $id)->delete();
        return $result;
    }
}