<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Day;
        use Illuminate\Http\Request;
        
        class DaysController extends Controller
        {
            public function index()
            {
                return json_encode(Day::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Day;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Day::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Day::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Day::find($id)->delete();
                return json_encode(true);
            }
        }
        