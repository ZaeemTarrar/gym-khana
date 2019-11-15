<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Leave;
        use Illuminate\Http\Request;
        
        class LeavesController extends Controller
        {
            public function index()
            {
                return json_encode(Leave::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Leave;
                if( $request->date != null && $request->date != '' ) {
                $crud->date = $request->date;
                }
                if( $request->days != null && $request->days != '' ) {
                $crud->days = $request->days;
                }
                if( $request->deduction != null && $request->deduction != '' ) {
                $crud->deduction = $request->deduction;
                }$crud->user_id = Auth::user()->id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Leave::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Leave::find($id);
                if( $request->date != null && $request->date != '' )
                $crud->date = $request->date;
                
                if( $request->days != null && $request->days != '' )
                $crud->days = $request->days;
                
                if( $request->deduction != null && $request->deduction != '' )
                $crud->deduction = $request->deduction;
                $crud->user_id = $request->user_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Leave::find($id)->delete();
                return json_encode(true);
            }
        }
        