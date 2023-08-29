@extends('admin.layouts.master')
@section('title')
    @lang('admin.productClasses.update')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="orderList">
                <div class="card-header  border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">
                            @lang('admin.edit')
                        </h5>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.productClasses.update', $productClass->id) }}" method="post" class="form-steps" autocomplete="on">
                                @csrf
                                @method('PUT')
                                <div class="text-center pt-3 pb-4 mb-1">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </div>
                                <div class="tab-content">
                                    <!-- Start Of Arabic Info tab pane -->
                                    <div class="tab-pane fade active show" id="productClasses-arabic-info" role="tabpanel"
                                        aria-labelledby="productClasses-arabic-info-tab">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name_ar">@lang('admin.productClasses.name_ar')</label>
                                                        <input type="text" name="name_ar" class="form-control"
                                                            id="name_ar"
                                                            value="{{ $productClass->getTranslation('name', 'ar') }}"
                                                            placeholder="{{ trans('admin.productClasses.name_ar') }}">
                                                        @error('name_ar')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name_en">@lang('admin.productClasses.name_en')</label>
                                                        <input type="text" name="name_en" class="form-control"
                                                            id="name_en"
                                                            value="{{ $productClass->getTranslation('name', 'en') }}"
                                                            placeholder="{{ trans('admin.productClasses.name_en') }}">
                                                        @error('name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Of Arabic Info tab pane -->
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="submit"
                                        class="btn btn-success btn-label right ms-auto nexttab nexttab">
                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>
                                        @lang('admin.create')
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>

    <!--ecommerce-customer init js -->
    <script src="{{ URL::asset('assets/js/pages/ecommerce-order.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2_parent_id').select2({
                placeholder: "Select",
                allowClear: true
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2_child_id').select2({
                placeholder: "Select",
                allowClear: true
            });

        });
    </script>

    <script>
        $(document).ready(function() {

            // Department Change
            $('#select2_parent_id').change(function() {

                // Department id
                var id = $(this).val();

                // Empty the dropdown
                $('#select2_child_id').find('option').not(':first').remove();

                // AJAX request 
                $.ajax({
                    url:  `${id}/get-sub-productClass`,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response.data[1])
                        var len = 0;
                        if (response.data != null) {
                            len = response.data.length;
                        }

                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {

                                var id = response.data[i].id;
                                var name = response.data[i].name["en"];

                                var option = "<option value='" + id + "'>" + name + "</option>";

                                $("#select2_child_id").append(option);
                            }
                        }

                    }
                });
            });
        });
    </script>
@endsection