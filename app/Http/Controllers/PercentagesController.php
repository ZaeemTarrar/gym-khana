<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use Storage;
use App\Percentage;
use Illuminate\Http\Request;

class PercentagesController extends Controller
{
    public function index()
    {
        return json_encode(Percentage::all());
    }

    public function create()
    {
        return json_encode(false);
    }

    public function store(Request $request)
    {
        $crud = new Percentage;
        if ($request->status != null && $request->status != '') {
            $crud->status = $request->status;
        }
        if ($request->percentage != null && $request->percentage != '') {
            $crud->percentage = $request->percentage;
        }
        $crud->user_id = Auth::user()->id;
        $crud->save();

        return json_encode($crud);
    }

    public function show($id)
    {
        return json_encode(Percentage::find($id));
    }

    public function edit($id)
    {
        return json_encode(false);
    }

    public function update(Request $request, $id)
    {
        $crud = Percentage::find($id);
        if ($request->status != null && $request->status != '')
            $crud->status = $request->status;

        if ($request->percentage != null && $request->percentage != '')
            $crud->percentage = $request->percentage;
        $crud->user_id = $request->user_id;
        $crud->save();

        return json_encode($crud);
    }

    public function destroy($id)
    {
        Percentage::find($id)->delete();
        return json_encode(true);
    }
}
