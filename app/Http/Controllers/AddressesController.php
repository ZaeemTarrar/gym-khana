<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Address;
        use Illuminate\Http\Request;
        
        class AddressesController extends Controller
        {
            public function index()
            {
                return json_encode(Address::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Address;
                if( $request->postalcode != null && $request->postalcode != '' ) {
                $crud->postalcode = $request->postalcode;
                }
                if( $request->house != null && $request->house != '' ) {
                $crud->house = $request->house;
                }
                if( $request->street != null && $request->street != '' ) {
                $crud->street = $request->street;
                }
                if( $request->town != null && $request->town != '' ) {
                $crud->town = $request->town;
                }
                if( $request->city != null && $request->city != '' ) {
                $crud->city = $request->city;
                }
                if( $request->province != null && $request->province != '' ) {
                $crud->province = $request->province;
                }
                if( $request->country != null && $request->country != '' ) {
                $crud->country = $request->country;
                }$crud->profile_id = $request->profile_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Address::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Address::find($id);
                if( $request->postalcode != null && $request->postalcode != '' )
                $crud->postalcode = $request->postalcode;
                
                if( $request->house != null && $request->house != '' )
                $crud->house = $request->house;
                
                if( $request->street != null && $request->street != '' )
                $crud->street = $request->street;
                
                if( $request->town != null && $request->town != '' )
                $crud->town = $request->town;
                
                if( $request->city != null && $request->city != '' )
                $crud->city = $request->city;
                
                if( $request->province != null && $request->province != '' )
                $crud->province = $request->province;
                
                if( $request->country != null && $request->country != '' )
                $crud->country = $request->country;
                $crud->profile_id = $request->profile_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Address::find($id)->delete();
                return json_encode(true);
            }
        }
        