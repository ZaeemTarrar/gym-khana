<?php

        namespace App\Http\Controllers;
        
        use Illuminate\Foundation\Bus\DispatchesJobs;
        use Illuminate\Routing\Controller as BaseController;
        use Illuminate\Foundation\Validation\ValidatesRequests;
        use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
        
        use Auth;
        use Session;
        use Storage;
        
        class Controller extends BaseController
        {
            use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        
            public function sessionize($request, $list)
            {
                foreach ($list as $key => $item) {
                    Session::flash($item, $request->$item);
                }
            }
        
            protected function upload($request, $filename, $inputname)
            {
                //Check if the directory with the name already exists
                if (!is_dir($filename)) {
                    //Create our directory if it does not exist
                    mkdir($filename);
                }
                $snap;
                // this will check if the file was uploaded
                if ($request->hasFile($inputname)) {
                    // this will add the file in the file bucket of the memory of laravel
                    $path = $request->file($inputname);
                    $target = "public/" . $filename;
                    // stores the image in the public/banners
                    $snap = Storage::putFile($target, $path);
                    $snap = substr(
                        $snap,
                        7,
                        strlen($snap) - 7
                    );
                } else {
                    $snap = "";
                }
                return $snap;
            }
        
            protected function remove($file)
            {
                if ($file) {
                    Storage::delete("public/" . $file);
                    return true;
                } else {
                    return false;
                }
            }
        }
        