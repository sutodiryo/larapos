<div class="container-fluid mt--6">

    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Inline actions</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip"
                        data-original-title="Edit product">
                        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                        <span class="btn-inner--text">Export</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>Author</th>
                        <th>Created at</th>
                        <th>Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($this->member as $m)
                        <tr>
                            <td class="table-user">
                                <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                                <b>{{ $m->name }}</b>
                            </td>
                            <td>
                                <span class="text-muted">{{ $m->created_at }}</span>
                            </td>
                            <td>
                                <a href="#!" class="font-weight-bold">{{ $m->email }}</a>
                            </td>
                            <td class="table-actions">
                                <a href="#!" class="table-action" data-toggle="tooltip"
                                    data-original-title="Edit product">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#!" class="table-action table-action-delete" data-toggle="tooltip"
                                    data-original-title="Delete product">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Card footer -->
        <div class="card-footer py-4">
            <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                            <i class="fas fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>
