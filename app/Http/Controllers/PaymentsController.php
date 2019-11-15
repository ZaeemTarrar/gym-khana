<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Payment;
        use Illuminate\Http\Request;
        
        class PaymentsController extends Controller
        {
            public function index()
            {
                return json_encode(Payment::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Payment;
                if( $request->payment != null && $request->payment != '' ) {
                $crud->payment = $request->payment;
                }$crud->paymentmethod_id = $request->paymentmethod_id;$crud->orderpack_id = $request->orderpack_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Payment::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Payment::find($id);
                if( $request->payment != null && $request->payment != '' )
                $crud->payment = $request->payment;
                $crud->paymentmethod_id = $request->paymentmethod_id;$crud->orderpack_id = $request->orderpack_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Payment::find($id)->delete();
                return json_encode(true);
            }
        }
        