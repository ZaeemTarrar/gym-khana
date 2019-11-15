<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Paymentmethod;
        use Illuminate\Http\Request;
        
        class PaymentmethodsController extends Controller
        {
            public function index()
            {
                return json_encode(Paymentmethod::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Paymentmethod;
                if( $request->name != null && $request->name != '' ) {
                $crud->name = $request->name;
                }
                if( $request->active != null && $request->active != '' ) {
                $crud->active = $request->active;
                }$crud->payments_id = $request->payments_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Paymentmethod::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Paymentmethod::find($id);
                if( $request->name != null && $request->name != '' )
                $crud->name = $request->name;
                
                if( $request->active != null && $request->active != '' )
                $crud->active = $request->active;
                $crud->payments_id = $request->payments_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Paymentmethod::find($id)->delete();
                return json_encode(true);
            }
        }
        