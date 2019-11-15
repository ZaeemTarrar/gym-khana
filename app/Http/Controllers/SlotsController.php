<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Slot;
        use Illuminate\Http\Request;
        
        class SlotsController extends Controller
        {
            public function index()
            {
                return json_encode(Slot::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Slot;
                if( $request->starting != null && $request->starting != '' ) {
                $crud->starting = $request->starting;
                }
                if( $request->ending != null && $request->ending != '' ) {
                $crud->ending = $request->ending;
                }
                if( $request->status != null && $request->status != '' ) {
                $crud->status = $request->status;
                }$crud->day_id = $request->day_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Slot::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Slot::find($id);
                if( $request->starting != null && $request->starting != '' )
                $crud->starting = $request->starting;
                
                if( $request->ending != null && $request->ending != '' )
                $crud->ending = $request->ending;
                
                if( $request->status != null && $request->status != '' )
                $crud->status = $request->status;
                $crud->day_id = $request->day_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Slot::find($id)->delete();
                return json_encode(true);
            }
        }
        