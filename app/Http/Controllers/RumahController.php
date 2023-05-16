<?php

namespace App\Http\Controllers;

use App\Http\Requests\TambahRumahRequest;
use App\Models\Rumah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RumahController extends Controller
{
    public function index(Request $request)
    {
        //Cek jika request adalah AJAX Request
        if ($request->ajax()) {
        $rumah = Rumah::all();
        //Tampilkan datatable
            return DataTables::of($rumah)
            ->addIndexColumn()
            ->addColumn('foto',function($row){
                return '<img height="100" width="100" src='.env('ASSET_URL').'/temp/'.$row->foto.' >';
            })
            ->addColumn('harga',function($row){
                return number_format($row->harga);
            })
            ->addColumn('aksi',function($row){
                return '<a href="'.route('admin.rumah.edit',$row->id).'" class="btn btn-icon me-2 btn-primary"><span class="tf-icons bx bx-pencil"></span></a> 
                |
                <a href="'.route('admin.rumah.delete',$row->id).'" class="btn btn-icon me-2 btn-danger"><span class="tf-icons bx bx-trash"></span></a>
                ';
            })
            ->rawColumns(['aksi','foto','harga'])
            ->make(true);
        }
        return view('admin.rumah');
    }

    public function tambah_data()
    {
        return view('admin.tambah-rumah');
    }

    public function add_process(TambahRumahRequest $request)
    {
        $input = $request->only(['harga','foto','tipe','keterangan']);
        //Tambah data sesuai dengan input
        Rumah::create($input);
        return redirect()->route('admin.rumah.index');
    }

    public function delete($id)
    {
       $rumah = Rumah::find($id);
       //hapus gambar yang terkait dengan data tersebut
       unlink(public_path('assets/temp/') . $rumah->foto);
       $rumah->delete();
       return redirect()->back();
    }

    public function edit($id)
    {
        $rumah = Rumah::find($id);
        return view('admin.edit-rumah',compact('rumah'));
    }

    public function update($id,Request $request)
    {
        $input = $request->only(['harga','foto','tipe','keterangan','status']);
        $rumah = Rumah::find($id);
        //hapus gambar yang lama
        unlink(public_path('assets/temp/') . $rumah->foto);
        $rumah->harga = $input['harga'];
        $rumah->foto = $input['foto'];
        $rumah->tipe = $input['tipe'];
        $rumah->keterangan = $input['keterangan'];
        $rumah->status = $input['status'];
        $rumah->update();
        return redirect()->route('admin.rumah.index');
    }
}
