<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Attendance;
        use Illuminate\Http\Request;
        
        class AttendancesController extends Controller
        {
            public function index()
            {
                return json_encode(Attendance::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Attendance;
                if( $request->date != null && $request->date != '' ) {
                $crud->date = $request->date;
                }
                if( $request->start != null && $request->start != '' ) {
                $crud->start = $request->start;
                }
                if( $request->end != null && $request->end != '' ) {
                $crud->end = $request->end;
                }
                if( $request->status != null && $request->status != '' ) {
                $crud->status = $request->status;
                }$crud->user_id = Auth::user()->id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Attendance::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Attendance::find($id);
                if( $request->date != null && $request->date != '' )
                $crud->date = $request->date;
                
                if( $request->start != null && $request->start != '' )
                $crud->start = $request->start;
                
                if( $request->end != null && $request->end != '' )
                $crud->end = $request->end;
                
                if( $request->status != null && $request->status != '' )
                $crud->status = $request->status;
                $crud->user_id = $request->user_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Attendance::find($id)->delete();
                return json_encode(true);
            }
        }
        