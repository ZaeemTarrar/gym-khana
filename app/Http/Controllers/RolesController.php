<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use Storage;
use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return json_encode(Role::all());
    }

    public function create()
    {
        return json_encode(false);
    }

    public function store(Request $request)
    {
        $crud = new Role;
        if ($request->name != null && $request->name != '') {
            $crud->name = $request->name;
        }
        if ($request->access != null && $request->access != '') {
            $crud->access = $request->access;
        }
        if ($request->active != null && $request->active != '') {
            $crud->active = $request->active;
        }
        $crud->save();

        return json_encode($crud);
    }

    public function show($id)
    {
        return json_encode(Role::find($id));
    }

    public function edit($id)
    {
        return json_encode(false);
    }

    public function update(Request $request, $id)
    {
        $crud = Role::find($id);
        if ($request->name != null && $request->name != '')
            $crud->name = $request->name;

        if ($request->access != null && $request->access != '')
            $crud->access = $request->access;

        if ($request->active != null && $request->active != '')
            $crud->active = $request->active;
        $crud->save();

        return json_encode($crud);
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return json_encode(true);
    }
}
