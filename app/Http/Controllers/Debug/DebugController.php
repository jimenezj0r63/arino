<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class DebugController extends Controller
{
    public function index()
    {

        //        return Permission::all()->groupBy('crud_group');
        //        $user = User::find(1);
        //        $user->assignRole('admin');
        //        dd($user->roles);
    }
}
