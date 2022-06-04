<?php
namespace App\Http\Services;

use App\Models\speciesarchives;
use Illuminate\Support\Facades\Storage;

class speciesarchivesService
{
    //查詢全部
    public function getAllspeciesarchives()
    {
        $result = speciesarchives::orderBy('created_at')->get();
        return $result;
    }

    //建新的一筆資料
    public function createspeciesarchives($request, $file)
    {
        $request->all();
        $path =  $file->store('public/img');
        $path = str_replace("public", "/storage", $path);
        $result = speciesarchives::create(
            [
                'species_' => $request->species_,
                'name' => $request->name,
                'phylum_' => $request->phylum_,
                'class_' => $request->class_,
                'order_' => $request->order_,
                'family_' => $request->family_,
                'genus_' => $request->genus_,
                'body_type' => $request->body_type,
                'scientific_name' => $request->scientific_name,
                'feeding_habits' => $request->feeding_habits,
                'feature' => $request->feature,
                'distribution' => $request->distribution,
                'conservation_level' => $request->conservation_level,
                'area' => $request->area,
                'img' => $path
            ]
        );
        // return $result;
        return $result;
    }

    //更新一筆資料
    public function updatespeciesarchives($request, $id, $file)
    {
        $path =  $file->store('public/img');
        $path = str_replace("public", "/storage", $path);
        if (speciesarchives::where('id', $id)->first()) {
            $deletepath = str_replace("/storage", "public", speciesarchives::where('id', $id)->first()->img);
            Storage::delete($deletepath);
        }
        $result = speciesarchives::where('id', $id)->update(
            [
                'species_' => $request->species_,
                'name' => $request->name,
                'phylum_' => $request->phylum_,
                'class_' => $request->class_,
                'order_' => $request->order_,
                'family_' => $request->family_,
                'genus_' => $request->genus_,
                'body_type' => $request->body_type,
                'scientific_name' => $request->scientific_name,
                'feeding_habits' => $request->feeding_habits,
                'feature' => $request->feature,
                'distribution' => $request->distribution,
                'conservation_level' => $request->conservation_level,
                'area' => $request->area,
                'img' => $path
            ]
        );
        return $result;
    }

    //刪除
    public function deletespeciesarchives($id)
    {
        if (speciesarchives::where('id', $id)->first()) {
            $deletepath = str_replace("/storage", "public", speciesarchives::where('id', $id)->first()->img);
            Storage::delete($deletepath);
        }
        $result = speciesarchives::where('id', $id)->delete();
        return $result;
    }
}
