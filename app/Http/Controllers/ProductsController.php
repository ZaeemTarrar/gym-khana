<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Product;
        use Illuminate\Http\Request;
        
        class ProductsController extends Controller
        {
            public function index()
            {
                return json_encode(Product::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Product;
                if( $request->code != null && $request->code != '' ) {
                $crud->code = $request->code;
                }
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->purchase != null && $request->purchase != '' ) {
                $crud->purchase = $request->purchase;
                }
                if( $request->sale != null && $request->sale != '' ) {
                $crud->sale = $request->sale;
                }
                if( $request->weight != null && $request->weight != '' ) {
                $crud->weight = $request->weight;
                }
                if( $request->color != null && $request->color != '' ) {
                $crud->color = $request->color;
                }
                if( $request->brand != null && $request->brand != '' ) {
                $crud->brand = $request->brand;
                }
                if( $request->flavor != null && $request->flavor != '' ) {
                $crud->flavor = $request->flavor;
                }
                if( $request->size != null && $request->size != '' ) {
                $crud->size = $request->size;
                }
                if( $request->stock != null && $request->stock != '' ) {
                $crud->stock = $request->stock;
                }
                if( $request->ingredients != null && $request->ingredients != '' ) {
                $crud->ingredients = $request->ingredients;
                }
                if( $request->model != null && $request->model != '' ) {
                $crud->model = $request->model;
                }
                if( $request->manufacture != null && $request->manufacture != '' ) {
                $crud->manufacture = $request->manufacture;
                }
                if( $request->expiry != null && $request->expiry != '' ) {
                $crud->expiry = $request->expiry;
                }
                if( $request->start != null && $request->start != '' ) {
                $crud->start = $request->start;
                }
                if( $request->end != null && $request->end != '' ) {
                $crud->end = $request->end;
                }
                if( $request->snap != null && $request->snap != '' ) {
                $crud->snap = $request->snap;
                }
                if( $request->shortdescription != null && $request->shortdescription != '' ) {
                $crud->shortdescription = $request->shortdescription;
                }
                if( $request->description != null && $request->description != '' ) {
                $crud->description = $request->description;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }
                if( $request->beds != null && $request->beds != '' ) {
                $crud->beds = $request->beds;
                }
                if( $request->statustype != null && $request->statustype != '' ) {
                $crud->statustype = $request->statustype;
                }$crud->category_id = $request->category_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Product::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Product::find($id);
                if( $request->code != null && $request->code != '' )
                $crud->code = $request->code;
                
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->purchase != null && $request->purchase != '' )
                $crud->purchase = $request->purchase;
                
                if( $request->sale != null && $request->sale != '' )
                $crud->sale = $request->sale;
                
                if( $request->weight != null && $request->weight != '' )
                $crud->weight = $request->weight;
                
                if( $request->color != null && $request->color != '' )
                $crud->color = $request->color;
                
                if( $request->brand != null && $request->brand != '' )
                $crud->brand = $request->brand;
                
                if( $request->flavor != null && $request->flavor != '' )
                $crud->flavor = $request->flavor;
                
                if( $request->size != null && $request->size != '' )
                $crud->size = $request->size;
                
                if( $request->stock != null && $request->stock != '' )
                $crud->stock = $request->stock;
                
                if( $request->ingredients != null && $request->ingredients != '' )
                $crud->ingredients = $request->ingredients;
                
                if( $request->model != null && $request->model != '' )
                $crud->model = $request->model;
                
                if( $request->manufacture != null && $request->manufacture != '' )
                $crud->manufacture = $request->manufacture;
                
                if( $request->expiry != null && $request->expiry != '' )
                $crud->expiry = $request->expiry;
                
                if( $request->start != null && $request->start != '' )
                $crud->start = $request->start;
                
                if( $request->end != null && $request->end != '' )
                $crud->end = $request->end;
                
                if( $request->snap != null && $request->snap != '' )
                $crud->snap = $request->snap;
                
                if( $request->shortdescription != null && $request->shortdescription != '' )
                $crud->shortdescription = $request->shortdescription;
                
                if( $request->description != null && $request->description != '' )
                $crud->description = $request->description;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                
                if( $request->beds != null && $request->beds != '' )
                $crud->beds = $request->beds;
                
                if( $request->statustype != null && $request->statustype != '' )
                $crud->statustype = $request->statustype;
                $crud->category_id = $request->category_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Product::find($id)->delete();
                return json_encode(true);
            }
        }
        