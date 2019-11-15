<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Subrole;
        use Illuminate\Http\Request;
        
        class SubrolesController extends Controller
        {
            public function index()
            {
                return json_encode(Subrole::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Subrole;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->access != null && $request->access != '' ) {
                $crud->access = $request->access;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->role_id = $request->role_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Subrole::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Subrole::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->access != null && $request->access != '' )
                $crud->access = $request->access;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->role_id = $request->role_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Subrole::find($id)->delete();
                return json_encode(true);
            }
        }
        