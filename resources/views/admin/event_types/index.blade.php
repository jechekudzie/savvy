@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Event Types</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item active">event_types</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="flex-grow-1">
                                    <button class="btn btn-info add-btn" data-bs-toggle="modal"
                                            data-bs-target="#showModal"><i
                                            class="ri-add-fill me-1 align-bottom"></i> Add Event Type
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($errors->any())
                    @include('errors')
                @endif
                @if (session('message'))
                    <div class="col-lg-6">
                        <!-- Primary Alert -->
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong> Hi! </strong> <b>{{session('message')}} </b> !
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            @endif
            <!--end col-->
                <div class="col-xxl-9">
                    <div class="card" id="companyList">
                        <div class="card-header">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                               placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-3">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                           value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="name" scope="col">id</th>
                                            <th class="sort" data-sort="owner" scope="col">Event Tyoe</th>
                                            <th class="sort" data-sort="owner" scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @foreach($event_types as $event_type)
                                            <tr>
                                                <td scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child"
                                                               value="option1">
                                                    </div>
                                                </td>
                                                <td class="owner">{{$event_type->id}}</td>
                                                <td class="owner">{{$event_type->name}}</td>
                                                <td class="owner">{!! $event_type->description !!}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            title="Edit">
                                                            <a class="edit-item-btn"
                                                               href="{{url('/admin/event_types/'.$event_type->id.'/edit')}}">Edit <i
                                                                    class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- add modal-->
                            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content border-0">
                                        <div class="modal-header bg-soft-info p-3">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                        </div>


                                        <form method="post" action="{{url('/admin/event_types')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="name"
                                                                   class="form-label">Event Type</label>
                                                            <input type="text" name="name"
                                                                   class="form-control rounded-pill mb-3"
                                                                   value="{{old('name')}}"
                                                                   placeholder="Enter service name"/>
                                                        </div>
                                                    </div>

                                                   {{-- <div class="col-lg-12">
                                                        <div>
                                                            <label for="description"
                                                                   class="form-label">Description</label>
                                                            <textarea name="description" class="editor form-control"
                                                                      placeholder="Enter service description">

                                                            </textarea>
                                                        </div>
                                                    </div>--}}

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success">Add
                                                        Event Type
                                                    </button>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- add modal-->


                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@stop
@push('scripts')
    <!-- ckeditor -->

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('.editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

@endpush
