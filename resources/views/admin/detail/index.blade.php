<x-admin-layout>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Identitas Puskesmas</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                                            <li class="breadcrumb-item active">Identitas Puskesmas</li>
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
        
                                        <h4 class="card-title mb-3">Identitas Puskesmas</h4>
                                        <!-- <p class="card-title-desc">Takes the basic nav from above and adds the <code class="highlighter-rouge">.nav-tabs</code> class to generate a tabbed interface.</p> -->
        
                                        <!-- Nav tabs -->
                                        <form enctype="multipart/form-data" action="/admin/detail/{{ $puskesmas->id }}/update" method="post">
                                            @csrf
                                            @method('PUT')
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#identitas" role="tab">
                                                        <i class="dripicons-home me-1 align-middle"></i> <span class="d-none d-md-inline-block">identitas</span> 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#denah" role="tab">
                                                        <i class="dripicons-user me-1 align-middle"></i> <span class="d-none d-md-inline-block">Denah</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#sejarah" role="tab">
                                                        <i class="dripicons-mail me-1 align-middle"></i> <span class="d-none d-md-inline-block">Sejarah</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#maklumat" role="tab">
                                                        <i class="dripicons-gear me-1 align-middle"></i> <span class="d-none d-md-inline-block">Maklumat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        <!-- Tab panes -->
                                            <div class="tab-content p-3">
                                                <div class="tab-pane active" id="identitas" role="tabpanel">
                                                    <p class="mb-0">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card shadow-lg">
                                                                    <div class="card-body">
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('images/garut.png') }}" height="100" alt="">
                                                                        </div>
                                                                        <div class="text-center mt-3">
                                                                            <h5> Puskesmas {{ $puskesmas->user->name }} </h5>
                                                                            <h6> @if($puskesmas->motto)  " {{ $puskesmas->motto }} " @else " <i> Belum membuat Motto </i> "  @endif </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <div class="form-input mb-2">
                                                                        <label for=""> VISI </label>
                                                                        <textarea name="visi" class="form-control">{{ $puskesmas->visi  }}</textarea>
                                                                    </div>
                                                                    <div class="form-input mb-2">
                                                                        <label for=""> MISI </label>
                                                                        <textarea name="misi" class="form-control">{{ $puskesmas->misi }}</textarea>
                                                                    </div>
                                                                    <div class="form-input mb-2">
                                                                        <label for=""> Motto </label>
                                                                        <textarea name="motto" class="form-control">{{ $puskesmas->motto }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="denah" role="tabpanel">
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
                                                <div class="tab-pane" id="sejarah" role="tabpanel">
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
                                                <div class="tab-pane" id="maklumat" role="tabpanel">
                                                <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-center">
                                                                        <img src="{{ $puskesmas->pictmaklumat }}" height="200" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">                                                            
                                                            <div class="form-group">
                                                                <div class="form-input mb-2">
                                                                    <label for=""> Maklumat </label>
                                                                    <input type="file" name="maklumat" id="" class="form-control">
                                                                </div>
                                                                <div class="form-input">
                                                                    <label for=""> Deskripsi </label>
                                                                    <textarea name="deskripsi_maklumat" class="form-control">{{ $puskesmas->deskmaklumat }}</textarea>
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