<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\User;
        use Illuminate\Http\Request;
        
        class UsersController extends Controller
        {
            public function index()
            {
                return json_encode(User::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new User;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->email != null && $request->email != '' ) {
                $crud->email = $request->email;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->password = bcrypt($request->password);$crud->subrole_id = $request->subrole_id;$crud->role_id = $request->role_id;$crud->percentage_id = $request->percentage_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(User::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = User::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->email != null && $request->email != '' )
                $crud->email = $request->email;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->password = bcrypt($request->password);$crud->subrole_id = Auth::user()->id;$crud->role_id = Auth::user()->id;$crud->percentage_id = Auth::user()->id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                User::find($id)->delete();
                return json_encode(true);
            }
        }
        