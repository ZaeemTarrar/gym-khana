<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Order;
        use Illuminate\Http\Request;
        
        class OrdersController extends Controller
        {
            public function index()
            {
                return json_encode(Order::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Order;
                if( $request->quantity != null && $request->quantity != '' ) {
                $crud->quantity = $request->quantity;
                }$crud->product_id = $request->product_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Order::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Order::find($id);
                if( $request->quantity != null && $request->quantity != '' )
                $crud->quantity = $request->quantity;
                $crud->product_id = $request->product_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Order::find($id)->delete();
                return json_encode(true);
            }
        }
        