<div>
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Produk Baru</h6>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        {{-- <a href="#" class="btn btn-sm btn-neutral">Kembali</a> --}}
                        <button class="btn btn-sm btn-icon btn-danger" type="button" onclick="back_to_previous()">
                            <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                            <span class="btn-inner--text">Kembali</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-wrapper">
                    <!-- Input groups -->
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="product_name">Nama Produk</label>
                                            <input type="text" wire:model.live="product_name"
                                                class="form-control @error('product_name') is-invalid @enderror"
                                                id="product_name" :error="'product_name'" placeholder="" />
                                            {{-- <input type="text" wire:model.live="product_nss" /> --}}
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="product_name">Nama Produk</label>
                                            <input type="text" wire:model.live="product_name"
                                                class="form-control @error('product_name') is-invalid @enderror"
                                                id="product_name" :error="'product_name'" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example4cols1Input">One of four
                                                cols</label>
                                            <input type="text" class="form-control" id="example4cols1Input"
                                                placeholder="One of four cols">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example4cols2Input">One of four
                                                cols</label>
                                            <input type="text" class="form-control" id="example4cols2Input"
                                                placeholder="One of four cols">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example4cols3Input">One of four
                                                cols</label>
                                            <input type="text" class="form-control" id="example4cols3Input"
                                                placeholder="One of four cols">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example4cols3Input">One of four
                                                cols</label>
                                            <input type="text" class="form-control" id="example4cols3Input"
                                                placeholder="One of four cols">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example2cols1Input">One of two
                                                cols</label>
                                            <input type="text" class="form-control" id="example2cols1Input"
                                                placeholder="One of two cols">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="example2cols2Input">One of two
                                                cols</label>
                                            <input type="text" class="form-control" id="example2cols2Input"
                                                placeholder="One of two cols">
                                        </div>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                    <!-- Dropdowns -->
                    {{-- <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Dropdowns</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <select class="form-control" data-toggle="select">
                                    <option>Alerts</option>
                                    <option>Badges</option>
                                    <option>Buttons</option>
                                    <option>Cards</option>
                                    <option>Forms</option>
                                    <option>Modals</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <!-- Datepicker -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Datepicker</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                for="exampleDatepicker">Datepicker</label>
                                            <input class="form-control datepicker" placeholder="Select date"
                                                type="text" value="06/20/2018">
                                        </div>
                                    </div>
                                </div>
                                <div class="row input-daterange datepicker align-items-center">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-control-label">Start date</label>
                                            <input class="form-control" placeholder="Start date" type="text"
                                                value="06/18/2018">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-control-label">End date</label>
                                            <input class="form-control" placeholder="End date" type="text"
                                                value="06/22/2018">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Text editor -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Text editor</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"></div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="card-wrapper">
                    <!-- Tags -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Tags</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <input type="text" class="form-control"
                                    value="Bucharest, Cluj, Iasi, Timisoara, Piatra Neamt" data-toggle="tags" />
                            </form>
                        </div>
                    </div>
                    <!-- Toggle buttons -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Toggle buttons</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <label class="custom-toggle">
                                    <input type="checkbox">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <label class="custom-toggle">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="custom-toggle custom-toggle-default">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="custom-toggle custom-toggle-danger">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="custom-toggle custom-toggle-warning">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="custom-toggle custom-toggle-success">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="custom-toggle custom-toggle-info">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                            </form>
                        </div>
                    </div>
                    <!-- Sliders -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Sliders</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <!-- Slider -->
                                <div class="input-slider-container">
                                    <div id="input-slider" class="input-slider" data-range-value-min="100"
                                        data-range-value-max="500"></div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <span id="input-slider-value" class="range-slider-value"
                                                data-range-value-low="100"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Range slider -->
                                <div class="mt-5">
                                    <div id="input-slider-range" data-range-value-min="100"
                                        data-range-value-max="500"></div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="range-slider-value value-low" data-range-value-low="200"
                                                id="input-slider-range-value-low"></span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="range-slider-value value-high" data-range-value-high="400"
                                                id="input-slider-range-value-high"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Dropzone -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Dropzone</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Single -->
                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone"
                                data-dropzone-url="http://">
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                    </div>
                                </div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover">
                                        <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                    </div>
                                </div>
                            </div>
                            <!-- Multiple -->
                            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple
                                data-dropzone-url="http://">
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileUploadMultiple"
                                            multiple>
                                        <label class="custom-file-label" for="customFileUploadMultiple">Choose
                                            file</label>
                                    </div>
                                </div>
                                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <img class="avatar-img rounded" src="..." alt="..."
                                                        data-dz-thumbnail>
                                                </div>
                                            </div>
                                            <div class="col ml--3">
                                                <h4 class="mb-1" data-dz-name>...</h4>
                                                <p class="small text-muted mb-0" data-dz-size>...</p>
                                            </div>
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item" data-dz-remove>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        function back_to_previous() {
            if (confirm('Anda yakin ??') == true) {
                history.back();
            }
        }
    </script>

</div>
