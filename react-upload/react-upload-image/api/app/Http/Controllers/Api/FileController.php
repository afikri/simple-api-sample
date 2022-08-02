<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('myfile')) {
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
            $fname = date('His') . $filename;

            $request->file('myfile')->storeAs('images/', $fname, 'public');
            return response()->json([
                'message' => 'name created successfully',
                'status' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'You should upload appropriate file',
            ]);
        }
    }
}
