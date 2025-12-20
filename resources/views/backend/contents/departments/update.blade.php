<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit-Department</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fas fa-arrow-left"></i> Department
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Editing</li>
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
                        <div class="card-header bg-dark">
                            <h3 class="card-title text-white">Edit Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="department_code">DepartmentCode:</label>
                                            <input type="text"
                                                class="form-control"
                                                id="department_code"
                                                name="department_code"
                                                value="{{ old('department_code', $department->department_code ?? 'DPT20250822080743-EF9BA7') }}"
                                                readonly
                                                style="background-color: #e9ecef;">
                                            @error('department_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="department_name">
                                                DepartmentName: <span class="text-danger">*</span>
                                            </label>
                                            <input type="text"
                                                class="form-control @error('department_name') is-invalid @enderror"
                                                id="department_name"
                                                name="department_name"
                                                value="{{ old('department_name', $department->department_name ?? 'Research and Develop') }}"
                                                placeholder="Enter ..."
                                                required>
                                            @error('department_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                              id="description"
                                              name="description"
                                              rows="4"
                                              placeholder="Enter ...">{{ old('description', $department->description ?? 'Description about Research and Develop') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Status:</label>
                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="radio"
                                               name="status"
                                               id="status_active"
                                               value="active"
                                               {{ old('status', $department->status ?? 'active') == 'active' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_active">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="radio"
                                               name="status"
                                               id="status_inactive"
                                               value="inactive"
                                               {{ old('status', $department->status ?? 'active') == 'inactive' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_inactive">
                                            Inactive
                                        </label>
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Update
                                    </button>
                                    <a href="#" class="btn btn-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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
