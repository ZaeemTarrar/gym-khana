<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Productcategory;
        use Illuminate\Http\Request;
        
        class ProductcategoriesController extends Controller
        {
            public function index()
            {
                return json_encode(Productcategory::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Productcategory;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->snap != null && $request->snap != '' ) {
                $crud->snap = $request->snap;
                }
                if( $request->description != null && $request->description != '' ) {
                $crud->description = $request->description;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Productcategory::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Productcategory::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->snap != null && $request->snap != '' )
                $crud->snap = $request->snap;
                
                if( $request->description != null && $request->description != '' )
                $crud->description = $request->description;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Productcategory::find($id)->delete();
                return json_encode(true);
            }
        }
        