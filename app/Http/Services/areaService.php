<?php

namespace App\Http\Services;

use App\Models\area;
use App\Models\speciesarchives;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class areaService
{
    //查詢全部
    public function getAllarea()
    {
        // $areas = DB::select("select * from areas");
        DB::connection('mysql');
        $areas = DB::select('select x.pid,x.name,x.introduction,x.img,x.speciestotal,SUM(y.animaltotal) as animaltotal
        from (select a.pid ,a.name,a.introduction,a.img,count(b.area) as speciestotal 
        from areas as a 
        inner join speciesarchives as b on a.name = b.area 
        group by b.area) as x
        INNER JOIN (SELECT a.species_,a.area,COUNT(b.species_) as animaltotal
        FROM speciesarchives as a
        INNER JOIN animalfiles as b on a.species_ = b.species_
        GROUP by b.species_) as y on x.name = y.area
        GROUP by y.area');
        // $areas = area::orderBy('created_at')->get();
        $speciesarchives = speciesarchives::groupBy('area')->select('area',speciesarchives::raw('count(area) as total'))->get();
        return $areas;
    }

    //建新的一筆資料
    public function createarea($request, $file)
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
