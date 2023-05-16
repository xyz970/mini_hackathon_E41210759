<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class FileUploadTempController extends Controller
{
    public function temp_upload(Request $request)
    {
        if ($request->has('foto')) {
            /**
             * Uncomment kode dibawah ini untuk me-rize ukuran menjadi dibagi 4
             */
            // $file = $request->file('file');
            // $filename = $file->getClientOriginalName();
            // $actual_image = Image::make($file->getRealPath());
    
            // // Resize tinggi dengan ukuran tinggi image asli / 4
            // $height = $actual_image->height() / 4;
    
            // // Resize lebar dengan ukuran lebar image asli / 4
            // $width = $actual_image->width() / 4;
    
            // // Resize tinggi dengan ukuran tinggi image asli / 4 dan lebar dengan ukuran lebar image asli / 4 upload ke folder public/data_file
            // $actual_image->resize($width,$height)->save('/assets/temp/'.$filename);
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
        //
        unlink(public_path('assets/temp/') . $filename);
    }
}
