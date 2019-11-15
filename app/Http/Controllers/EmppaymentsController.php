<?php
        namespace App\Http\Controllers;
        
        use Session;
        use Auth;
        use Storage;
        use App\Emppayment;
        use Illuminate\Http\Request;
        
        class EmppaymentsController extends Controller
        {
            public function index()
            {
                return json_encode(Emppayment::all());
            }
        
            public function create()
            {
                return json_encode(false);
            }
        
            public function store(Request $request)
            {       
                $crud = new Emppayment;
                if( $request->payment != null && $request->payment != '' ) {
                $crud->payment = $request->payment;
                }$crud->user_id = Auth::user()->id;$crud->paymentmethod_id = $request->paymentmethod_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function show($id)
            {
                return json_encode(Emppayment::find($id));
            }
        
            public function edit($id)
            {
                return json_encode(false);
            }
        
            public function update(Request $request, $id)
            {
                $crud = Emppayment::find($id);
                if( $request->payment != null && $request->payment != '' )
                $crud->payment = $request->payment;
                $crud->user_id = $request->user_id;$crud->paymentmethod_id = $request->paymentmethod_id;$crud->save();
        
                return json_encode($crud);
            }
        
            public function destroy($id)
            {
                Emppayment::find($id)->delete();
                return json_encode(true);
            }
        }
        