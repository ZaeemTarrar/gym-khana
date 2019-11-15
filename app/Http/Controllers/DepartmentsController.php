<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Department;
        use Illuminate\Http\Request;
        
        class DepartmentsController extends Controller
        {
            public function index()
            {
                return json_encode(Department::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Department;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->description != null && $request->description != '' ) {
                $crud->description = $request->description;
                }
                if( $request->snap != null && $request->snap != '' ) {
                $crud->snap = $request->snap;
                }
                if( $request->type != null && $request->type != '' ) {
                $crud->type = $request->type;
                }
                if( $request->opening != null && $request->opening != '' ) {
                $crud->opening = $request->opening;
                }
                if( $request->closing != null && $request->closing != '' ) {
                $crud->closing = $request->closing;
                }$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Department::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Department::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->description != null && $request->description != '' )
                $crud->description = $request->description;
                
                if( $request->snap != null && $request->snap != '' )
                $crud->snap = $request->snap;
                
                if( $request->type != null && $request->type != '' )
                $crud->type = $request->type;
                
                if( $request->opening != null && $request->opening != '' )
                $crud->opening = $request->opening;
                
                if( $request->closing != null && $request->closing != '' )
                $crud->closing = $request->closing;
                $crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Department::find($id)->delete();
                return json_encode(true);
            }
        }
        