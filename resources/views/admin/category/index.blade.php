@extends('admin.layout.index')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="card-body">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Category</h5>
                <a href="{{ route('category.create') }}" class="btn btn-info legitRipple">Add Category</a>
            </div>
            <ul class="nav nav-tabs mb-0">
                <li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">List
                        View</a></li>
                <li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="basic-tab1">
                    <div class="d-flex mb-0 justify-content-end">
                        <a href="products_pdf_view.php" class="btn border" target="_blank"><i class="icon-eye"></i>
                            Pdf View</a>
                        <a href="products_pdf_download.php" class="btn border"><i class="icon-download"></i> Pdf</a>
                        <a href="products_excel_download.php" class="btn border"><i class="icon-download"></i> Excel</a>
                        <a href="send_mail.php" class="btn border"><i class="icon-email"></i>Email</a>
                    </div>
                    <div class="card p-3">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="datatable-header">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label><span>Filter:</span>
                                        <input type="search" class="" placeholder="Type to filter..."
                                            aria-controls="DataTables_Table_0"></label>
                                </div>
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label><span>Show:</span>
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="select2-hidden-accessible" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="10" data-select2-id="3">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="2" style="width: auto;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-DataTables_Table_0_length-g1-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-DataTables_Table_0_length-g1-container" role="textbox"
                                                        aria-readonly="true" title="10">10</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span></label>
                                </div>
                            </div>
                            <div class="datatable-scroll">
                                <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0"
                                    role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="First Name: activate to sort column descending">#
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="First Name: activate to sort column descending">Name
                                            </th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Last Name: activate to sort column ascending">Image
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Last Name: activate to sort column ascending">
                                                Description
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending">Status
                                            </th>
                                            <th class="text-center sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 100px;">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td>{{++$index}}</td>
                                                <td>{{$category['name']}}</td>
                                                <td class="text-center"><img class="img-fluid" src="{{$category['image']}}" alt="{{$category['alt']}}" style="height: 50px; width:auto;"></td>
                                                <td>{{$category['description']}}</td>
                                                <td><span class="badge badge-success">{{$category['status']}}</span></td>
                                                <td class="d-flex">
                                                    <a class="btn btn-primary btn-sm" href=""><i class="icon-eye"></i></a>
                                                    <a class="btn btn-info btn-sm" href=""><i class="icon-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm" href=""><i class="icon-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-footer">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">
                                    Showing 1 to 10 of 15 entries
                                </div>
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="DataTables_Table_0"
                                        data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a><span><a
                                            class="paginate_button current" aria-controls="DataTables_Table_0"
                                            data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                            aria-controls="DataTables_Table_0" data-dt-idx="2"
                                            tabindex="0">2</a></span><a class="paginate_button next"
                                        aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                        id="DataTables_Table_0_next">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /basic datatable -->
                </div>

                <!-- Grid View -->
                <div class="tab-pane fade" id="basic-tab2">
                    <div class="d-flex mb-0 justify-content-end">
                        <a href="products_pdf_view.php" class="btn border" target="_blank"><i class="icon-eye"></i>
                            Pdf View</a>
                        <a class="btn border"><i class="icon-download"></i> Pdf</a>
                        <a href="products_excel_download.php" class="btn border"><i class="icon-download"></i> Excel</a>
                    </div>
                    <div class="row mx-o">
                            @foreach ($categories as $category)
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-img-actions mx-1 mt-1">
                                        <img class="card-img img-fluid"
                                             src="{{ $category['image'] }}"
                                             alt="{{ $category['alt'] }}" style="height:300px; width=100%">
                                    </div>

                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-nowrap">
                                            <div>
                                                <div class="font-weight-semibold mr-2">
                                                    {{ $category['name'] }}
                                                </div>
                                                <span class="font-size-sm text-muted">
                                                    {{ $category['description'] }}
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between p-3">
                                        <a class="btn border rounded-round mx-1"
                                           href="show_product.php?id=<?= $category['id'] ?>"><i
                                                    class="icon-eye text-primary"></i></a>
                                        <a href="edit_product.php?id=<?= $category['id']  ?>"
                                           class="btn border rounded-round mx-1"><i
                                                    class="icon-pencil text-info"></i></a>
                                        <form action="DeleteProductController.php" method="post" onclick="return confirm('Are you sure you want to delete this item')">
                                            <input type="hidden" name="id" value="<?= $category['id']  ?>">
                                            <input type="hidden" name="old_image" value="<?= $category['id']  ?>">
                                            <button class="btn border rounded-round mx-1"><i
                                                        class="icon-trash text-danger"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
                <!-- Grid View End -->
            </div>
        </div>
        <!-- /basic datatable -->

    </div>
    <!-- /content area -->
@endsection
