<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Notificationtype;
        use Illuminate\Http\Request;
        
        class NotificationtypesController extends Controller
        {
            public function index()
            {
                return json_encode(Notificationtype::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Notificationtype;
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
                return json_encode(Notificationtype::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Notificationtype::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Notificationtype::find($id)->delete();
                return json_encode(true);
            }
        }
        