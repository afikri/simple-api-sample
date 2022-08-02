<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;

class DocumentController extends Controller
{
    public function upload(Request $request)
    {
        $document = new Document;
        $document->title = $request->input('title');
        $file = $request->file('file_text');

        $filename = time() . '-' . $file->getClientOriginalName();
        Storage::disk('local')->put($filename, file_get_contents($file));
        $document->file_text = $filename;
        $document->save();

        return response()->json([
            "success" => true,
            "message" => "File successfully uploaded",
        ]);
    }
}
