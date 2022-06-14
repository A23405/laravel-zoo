<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UsersService
{
    //查詢全部
    public function getAllUser()
    {
        $result = User::all();
        return $result;
    }

    //建新的一筆資料
    public function createUser($request)
    {
        $request->all();
        $result = User::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->introduction,
                'password' => $$request->password,
            ]
        );
        // return $result;
        return $result;
    }

    //更新一筆資料
    public function updatearea($request, $id)
    {
        $result = User::where('id', $id)->update(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->introduction,
                'password' => $$request->password,
            ]
        );
        return $result;
    }

    //刪除
    public function deletearea($id)
    {
        $result = User::where('id', $id)->delete();
        return $result;
    }

    //取單一資料
    public function getOne($id)
    {
        $result = User::where('id', $id)->first();
        return $result;
    }
}
