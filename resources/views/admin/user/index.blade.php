<x-admin-layout>
    <div class="row">
        <div class="col-12">
            <div
                class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Puskesmas</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Admin</a>
                        </li>
                        <li class="breadcrumb-item active">Puskesmas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h4 class="card-title fw-bold">Data Puskesmas</h4>
                        <div class="margin-right">
                            <button
                                type="button"
                                class="btn btn-primary btn-sm waves-effect waves-light"
                                data-bs-toggle="modal"
                                data-bs-target="#firstmodal">
                                Tambah Data
                            </button>

                            <!-- First modal dialog -->
                            <div
                                class="modal fade"
                                id="firstmodal"
                                aria-hidden="true"
                                aria-labelledby="..."
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                            <form action="/admin/puskesmas" method="post">
                                                @csrf
                                                @method('post')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Puskesmas</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">
                                                        Username
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input
                                                            name="username"
                                                            class="form-control"
                                                            type="text"
                                                            required
                                                            id="example-text-input"
                                                            />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-md-2 col-form-label">Nama Puskesmas
                                                        <span class="text-danger">*</span>
                                                    </label >
                                                    <div class="col-md-10">
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="name"
                                                            id="example-email-input"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-md-2 col-form-label">Email
                                                        <span class="text-danger">*</span>
                                                    </label >
                                                    <div class="col-md-10">
                                                        <input
                                                            class="form-control"
                                                            type="email"
                                                            name="email"
                                                            id="example-email-input"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-url-input" class="col-md-2 col-form-label">Password
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label >
                                                    <div class="col-md-10">
                                                        <input
                                                            class="form-control"
                                                            type="password"
                                                            id="example-url-input"/>
                                                        <div class="form-check mt-2">
                                                            <input
                                                                class="form-check-input "
                                                                type="checkbox"
                                                                value="1"
                                                                name="default"
                                                                id="flexCheckChecked"
                                                                >
                                                                <label class="form-check-label " for="flexCheckChecked">
                                                                    Password Default (puskesmas@garut)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button
                                                        type="button"
                                                        class="btn btn-secondary waves-effect"
                                                        data-bs-dismiss="modal">
                                                        Kembali
                                                    </button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap"
                                    style="
                                        border-collapse: collapse;
                                        border-spacing: 0;
                                        width: 100%;
                                    ">
                                <tr>
                                    <th>No</th>
                                    <th>Logo</th>
                                    <th>Puskesmas</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @php($no = 1) 
                                @forelse($puskesmas as $no => $p)
                                <tr>
                                    <td>
                                        {{ $puskesmas->firstItem() + $no }}
                                    </td>
                                    <td></td>
                                    <td>
                                        {{ $p->name }}
                                    </td>
                                    <td>
                                        {{ $p->username }}
                                    </td>
                                    <td>{{ $p->email }} </td>
                                    <td>
                                        <button class="btn btn-sm btn-info">
                                            Edit
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" align="center">
                                        Maaf belum ada puskesmas yang tersedia
                                    </td>
                                </tr>
                                @endforelse
                            </table>
                            {{ $puskesmas->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </x-admin-layout>