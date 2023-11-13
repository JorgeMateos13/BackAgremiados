<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function getRoles()
    {
        return response()->json (roleConfig::all(), 200);
    }


    public function gerRoleById($id)
    {
        $role = role::find($id);
        if(is_null($role)){
            return response()->json(['message'=>'Role not found'], 404);
        }
        return response()->json($role::find($id), 200);
    }


    public function addRole(Request $req)
    {
        $role = role::create($req->all());
        return response($role, 200);
    }


    public function updateRole(Request $request, $id)
    {
        $role = role::find($id);
        if(is_null($role)){
            return response()->json(['message'=>'Type of role not found'], 404);
        }
        $role->update($request->all());
        return response($role, 200);
    }


    public function deleteRole($id)
    {
        $role = role::find($id);
        if(is_null($role)){
            return response()->json(['message'=>'Role not found'], 404);
        }
        $role->delete();
        return response()->json(['message'=>'Role deleted', null,], 204);
    }
}
