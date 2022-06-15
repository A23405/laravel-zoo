<?php

namespace App\Http\Services;

use App\Models\area;
use App\Models\Animalfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AnimalfileService
{
    //查詢全部
    public function getAll()
    {
        $result = Animalfile::all();
        return $result;
    }

    //建新的一筆資料
    public function creatanimal($request, $aid ,$file)
    {
        dd($request, $aid ,$file);
        $path =  $file->store('public/img');
        $path = str_replace("public", "/storage", $path);
        $result = Animalfile::create(
            [
                'aid' => $aid,
                'name' => $request->name,
                'species_' => $request->species,
                'sex' =>$request->flexRadioDefault,
                'birth'=>$request->date,
                'img' => $path
            ]
        );
        // return $result;
        return $result;
    }

    //更新一筆資料
    public function updatearea($request, $id, $file)
    {
        $path =  $file->store('public/img');
        $path = str_replace("public", "/storage", $path);
        if (area::where('id', $id)->first()) {
            $deletepath = str_replace("/storage", "public", area::where('id', $id)->first()->img);
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
        if (area::where('id', $id)->first()) {
            $deletepath = str_replace("/storage", "public", area::where('id', $id)->first()->img);
            Storage::delete($deletepath);
        }
        $result = area::where('id', $id)->delete();
        return $result;
        //先確認有此id在刪檔不然會報錯
    }
    
    //取單一資料
    public function getOne($id)
    {
        $result = area::where('id', $id)->first();
        return $result;
    }
}
