<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Profile;
        use Illuminate\Http\Request;
        
        class ProfilesController extends Controller
        {
            public function index()
            {
                return json_encode(Profile::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Profile;
                if( $request->firstname != null && $request->firstname != '' ) {
                $crud->firstname = $request->firstname;
                }
                if( $request->lastname != null && $request->lastname != '' ) {
                $crud->lastname = $request->lastname;
                }
                if( $request->contact != null && $request->contact != '' ) {
                $crud->contact = $request->contact;
                }
                if( $request->cnic != null && $request->cnic != '' ) {
                $crud->cnic = $request->cnic;
                }
                if( $request->gender != null && $request->gender != '' ) {
                $crud->gender = $request->gender;
                }
                if( $request->qualification != null && $request->qualification != '' ) {
                $crud->qualification = $request->qualification;
                }
                if( $request->profession != null && $request->profession != '' ) {
                $crud->profession = $request->profession;
                }
                if( $request->snap != null && $request->snap != '' ) {
                $crud->snap = $request->snap;
                }
                if( $request->account no != null && $request->account no != '' ) {
                $crud->account no = $request->account no;
                }
                if( $request->cnc != null && $request->cnc != '' ) {
                $crud->cnc = $request->cnc;
                }$crud->user_id = Auth::user()->id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Profile::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Profile::find($id);
                if( $request->firstname != null && $request->firstname != '' )
                $crud->firstname = $request->firstname;
                
                if( $request->lastname != null && $request->lastname != '' )
                $crud->lastname = $request->lastname;
                
                if( $request->contact != null && $request->contact != '' )
                $crud->contact = $request->contact;
                
                if( $request->cnic != null && $request->cnic != '' )
                $crud->cnic = $request->cnic;
                
                if( $request->gender != null && $request->gender != '' )
                $crud->gender = $request->gender;
                
                if( $request->qualification != null && $request->qualification != '' )
                $crud->qualification = $request->qualification;
                
                if( $request->profession != null && $request->profession != '' )
                $crud->profession = $request->profession;
                
                if( $request->snap != null && $request->snap != '' )
                $crud->snap = $request->snap;
                
                if( $request->account no != null && $request->account no != '' )
                $crud->account no = $request->account no;
                
                if( $request->cnc != null && $request->cnc != '' )
                $crud->cnc = $request->cnc;
                $crud->user_id = $request->user_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Profile::find($id)->delete();
                return json_encode(true);
            }
        }
        