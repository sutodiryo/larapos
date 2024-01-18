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
            <div class="col-lg-6">
                <div class="card-wrapper">
                    <!-- Input groups -->
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">Nama Produk</label>
                                            <input type="text" wire:model="name" id="name"
                                                :error="'name'" placeholder=""
                                                class="form-control @error('name') is-invalid @enderror" />
                                        </div>
                                        <div class="form-group" wire:ignore.self>
                                            <label class="form-control-label" for="category_id">Kategori</label>

                                            <select wire:model="category_id" id="category_id" :error="'category_id'"
                                                class="form-control @error('category_id') is-invalid @enderror"
                                                data-toggle="select">
                                                @foreach ($this->product_categories as $pc)
                                                    <option>{{ $pc->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="images">Foto Produk</label>

                                            <div class="custom-file">
                                                <input type="file" type="file" wire:model.live="images"
                                                    id="images" :error="'images'" multiple
                                                    class="custom-file-input @error('images') is-invalid @enderror"
                                                    id="images" lang="en"
                                                    accept="image/png, image/gif, image/jpeg">
                                                <label class="custom-file-label">Pilih Foto</label>
                                            </div>
                                            <ul>
                                                @foreach ($images as $i)
                                                    <li>
                                                        {{ $i->getClientOriginalName() }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-wrapper">
                    <!-- Input groups -->
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                for="description">Deskripsi/Keterangan</label>

                                            <textarea wire:model="description" class="form-control" id="description" rows="5"></textarea>
                                            {{-- <form>
                                                <div data-toggle="quill" wire:model.live="name" id="description" data-quill-placeholder="Quill WYSIWYG"></div>
                                            </form> --}}
                                        </div>
                                        <div class="form-group" wire:ignore.self>
                                            <label class="form-control-label" for="product_code">Kode Produk</label>
                                            <input type="text" wire:model="product_code" id="product_code"
                                                :error="'product_code'" placeholder=""
                                                class="form-control @error('product_code') is-invalid @enderror" />
                                        </div>

                                        <div class="form-group" wire:ignore.self>
                                            <label class="form-control-label" for="purchase_price">Harga Beli</label>
                                            <input type="number" wire:model="purchase_price" id="purchase_price"
                                                :error="'purchase_price'" placeholder=""
                                                class="form-control @error('purchase_price') is-invalid @enderror"
                                                min="100" step="100" />
                                        </div>

                                        <div class="form-group" wire:ignore.self>
                                            <label class="form-control-label" for="selling_price">Harga Jual</label>
                                            <input type="number" wire:model="selling_price" id="selling_price"
                                                :error="'selling_price'" placeholder=""
                                                class="form-control @error('selling_price') is-invalid @enderror"
                                                min="100" step="100" />
                                        </div>

                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link"
                                target="_blank">License</a>
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
