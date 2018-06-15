@extends('layout.admin_template')

@section('content')
    <div class='row'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                entries
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                                                                                                      aria-controls="example1"
                                                                                                      data-dt-idx="0"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                                                              tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                                                              tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                                                              tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                                                              tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6"
                                                              tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1"
                                                                                     data-dt-idx="7" tabindex="0"
                                                                                     class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection