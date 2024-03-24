<div class="col-6">
    <div class="card">
        <div class="card-body">

            <div id="datatable_wrapper" class="float-end">
                <div class="dropdown card-header-dropdown">

                    <a class="btn btn-sm btn-outline-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#addProcess">Add
                    </a>
                </div>
            </div>

            @include('admin_panel.components.process.add')

            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Processes</h4>
            </div><br>

            <div class="table">
                <table class="table">
                    <thead>
                        <tr style="cursor: pointer;">
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($processes as $process)
                        <tr data-id="1" style="cursor: pointer;">
                            <td>{{$process->name}}</td>
                            <td>
                                <div class="col-1">
                                    <a data-bs-toggle="modal" data-bs-target="#edit">
                                        <i class="fas fa-user-edit text-primary"></i>
                                    </a>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>