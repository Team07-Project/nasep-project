<x-admin-layout>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Struktur Organigram</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                    <li class="breadcrumb-item active">Struktur Organisasi</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-3">Struktur Organigram</h4>
                <!-- <p class="card-title-desc">Takes the basic nav from above and adds the <code class="highlighter-rouge">.nav-tabs</code> class to generate a tabbed interface.</p> -->

                <!-- Nav tabs -->
                <form enctype="multipart/form-data" action="/admin/detail/{{ $puskesmas->id }}/update" method="post">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#puskesmas" role="tab">
                                <i class="dripicons-home me-1 align-middle"></i> <span class="d-none d-md-inline-block">SO Puskesmas</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#rawat" role="tab">
                                <i class="dripicons-user me-1 align-middle"></i> <span class="d-none d-md-inline-block">SO Rawat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#laboratorium" role="tab">
                                <i class="dripicons-mail me-1 align-middle"></i> <span class="d-none d-md-inline-block">SO Laboratorium</span>
                            </a>
                        </li>
                    </ul>
                <!-- Tab panes -->
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="puskesmas" role="tabpanel">
                        <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ $puskesmas->pictdenah }}" height="200" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="form-input mb-2">
                                            <label for=""> Denah </label>
                                            <input type="file" name="denah" id="" class="form-control">
                                        </div>
                                        <div class="form-input">
                                            <label for=""> Deskripsi </label>
                                            <textarea name="deskripsi_denah" class="form-control">{{ $puskesmas->deskdenah }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="rawat" role="tabpanel">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ $puskesmas->pictdenah }}" height="200" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="form-input mb-2">
                                            <label for=""> Denah </label>
                                            <input type="file" name="denah" id="" class="form-control">
                                        </div>
                                        <div class="form-input">
                                            <label for=""> Deskripsi </label>
                                            <textarea name="deskripsi_denah" class="form-control">{{ $puskesmas->deskdenah }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="laboratorium" role="tabpanel">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ $puskesmas->pictsejarah }}" height="200" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">                                                            
                                    <div class="form-group">
                                        <div class="form-input mb-2">
                                            <label for=""> Sejarah </label>
                                            <input type="file" name="sejarah" id="" class="form-control">
                                        </div>
                                        <div class="form-input">
                                            <label for=""> Deskripsi </label>
                                            <textarea name="deskripsi_sejarah" class="form-control">{{ $puskesmas->desksejarah }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success"> Simpan Perubahan </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end row -->
</x-admin-layout>