@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Rumah /</span> Edit Data</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-12">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Data</h5>
                        {{-- <small class="text-muted float-end">Default label</small> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.rumah.update',$rumah->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="Tipe">Tipe</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tipe" id="Tipe"
                                        value="{{ $rumah->tipe }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="Tipe">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga" id="harga"
                                        value="{{ $rumah->harga }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="Tipe">status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="status">
                                        <option value="Tersedia"  {{ $rumah->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                        <option value="Tidak Tersedia" {{ $rumah->status == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="Foto">foto</label>
                                <div class="col-sm-10">
                                    <input name="foto" id="foto" type="file">
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2">
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers &amp; periods</div>
                            </div>
                        </div> --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea id="keterangan" class="form-control" name="keterangan" aria-describedby="basic-icon-default-message2">{{ $rumah->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!--/ Card layout -->
        </div>
    @endsection
    @section('script')
        <script>
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                });
                FilePond.registerPlugin(
                    FilePondPluginFileValidateType,
                );
                $('#foto').filepond({
                    acceptedFileTypes: ['image/*'],
                    credits: false,
                    fileValidateTypeDetectType: [],
                    labelFileProcessingComplete: `Upload Berhasil`,
                    labelTapToUndo: `ketuk untuk membatalkan`,
                    labelTapToCancel: `ketuk untuk membatalkan`,
                    labelFileProcessingError: `Gagal Memproses`,
                    labelTapToRetry: `ketuk untuk coba lagi`,
                    labelFileProcessing: `Sedang memproses`,
                    labelIdle: `Seret dan tempel atau <span class="filepond--label-action">Pilih Foto</span>`,
                    server: {
                        url: "{{ env('APP_URL') }}",
                        process: "/temp/file/upload",
                        revert: {
                            url: "/temp/file/delete/",
                            method: 'GET',
                        },
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        }
                    }
                }, );
            })
        </script>
    @endsection
