<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Department</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Department</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title">Department List</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#" class="btn btn-success">
                                        <i class="fas fa-plus"></i> Add Department
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="departmentsTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>DepartmentCode</th>
                                        <th>DepartmentName</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($departments ?? [] as $index => $department)
                                    <tr>
                                        <td>{{ ($departments->currentPage() - 1) * $departments->perPage() + $index + 1 }}</td>
                                        <td>{{ $department->department_code ?? 'DPT20250822080743-EF9BA7' }}</td>
                                        <td>{{ $department->department_name ?? 'Research and Develop' }}</td>
                                        <td>{{ $department->description ?? 'Description about Research and Develop' }}</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                <i class="fas fa-user-edit"></i> Edit
                                            </a>
                                            <form action="" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <!-- Sample data for demonstration -->
                                    <tr>
                                        <td>1</td>
                                        <td>DPT20250822080743-EF9BA7</td>
                                        <td>Research and Develop</td>
                                        <td>Description about Research and Develop</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                <i class="fas fa-user-edit"></i> Edit
                                            </a>
                                            <form action="#" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DPT20250809044922-677A7B</td>
                                        <td>HR-Admin</td>
                                        <td>Description about HR-Admin</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                <i class="fas fa-user-edit"></i> Edit
                                            </a>
                                            <form action="#" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fas fa-user-times"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        @if(isset($departments) && $departments->hasPages())
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $departments->links() }}
                            </div>
                        </div>
                        @else
                        <!-- Sample pagination for demonstration -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
