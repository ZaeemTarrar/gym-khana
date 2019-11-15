<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Notification;
        use Illuminate\Http\Request;
        
        class NotificationsController extends Controller
        {
            public function index()
            {
                return json_encode(Notification::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Notification;
                if( $request->message != null && $request->message != '' ) {
                $crud->message = $request->message;
                }
                if( $request->title != null && $request->title != '' ) {
                $crud->title = $request->title;
                }$crud->notificationtype_id = $request->notificationtype_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Notification::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Notification::find($id);
                if( $request->message != null && $request->message != '' )
                $crud->message = $request->message;
                
                if( $request->title != null && $request->title != '' )
                $crud->title = $request->title;
                $crud->notificationtype_id = $request->notificationtype_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Notification::find($id)->delete();
                return json_encode(true);
            }
        }
        