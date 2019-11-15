<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Service;
        use Illuminate\Http\Request;
        
        class ServicesController extends Controller
        {
            public function index()
            {
                return json_encode(Service::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Service;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->description != null && $request->description != '' ) {
                $crud->description = $request->description;
                }
                if( $request->cost != null && $request->cost != '' ) {
                $crud->cost = $request->cost;
                }
                if( $request->bookingcost != null && $request->bookingcost != '' ) {
                $crud->bookingcost = $request->bookingcost;
                }
                if( $request->snap != null && $request->snap != '' ) {
                $crud->snap = $request->snap;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->department_id = $request->department_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Service::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Service::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->description != null && $request->description != '' )
                $crud->description = $request->description;
                
                if( $request->cost != null && $request->cost != '' )
                $crud->cost = $request->cost;
                
                if( $request->bookingcost != null && $request->bookingcost != '' )
                $crud->bookingcost = $request->bookingcost;
                
                if( $request->snap != null && $request->snap != '' )
                $crud->snap = $request->snap;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->department_id = $request->department_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Service::find($id)->delete();
                return json_encode(true);
            }
        }
        