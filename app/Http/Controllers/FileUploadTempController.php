<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadTempController extends Controller
{
    public function temp_upload(Request $request)
    {
        if ($request->has('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/assets/temp/',$filename);
            // $file->move(public_path('assets/temp/'), $filename);
            return $filename;
        }
        return response()->json(['Gagal'], 500);
    }

    public function temp_delete($filename)
    {
        unlink(public_path('assets/temp/') . $filename);
    }
}
