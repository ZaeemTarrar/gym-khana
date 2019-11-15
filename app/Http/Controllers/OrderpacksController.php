<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Orderpack;
        use Illuminate\Http\Request;
        
        class OrderpacksController extends Controller
        {
            public function index()
            {
                return json_encode(Orderpack::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Orderpack;
                if( $request->sku != null && $request->sku != '' ) {
                $crud->sku = $request->sku;
                }
                if( $request->totalprice != null && $request->totalprice != '' ) {
                $crud->totalprice = $request->totalprice;
                }
                if( $request->approval != null && $request->approval != '' ) {
                $crud->approval = $request->approval;
                }$crud->department_id = $request->department_id;$crud->service_id = $request->service_id;$crud->user_id = Auth::user()->id;$crud->slot_id = $request->slot_id;$crud->orderstatus_id = $request->orderstatus_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Orderpack::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Orderpack::find($id);
                if( $request->sku != null && $request->sku != '' )
                $crud->sku = $request->sku;
                
                if( $request->totalprice != null && $request->totalprice != '' )
                $crud->totalprice = $request->totalprice;
                
                if( $request->approval != null && $request->approval != '' )
                $crud->approval = $request->approval;
                $crud->department_id = $request->department_id;$crud->service_id = $request->service_id;$crud->user_id = $request->user_id;$crud->slot_id = $request->slot_id;$crud->orderstatus_id = $request->orderstatus_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Orderpack::find($id)->delete();
                return json_encode(true);
            }
        }
        