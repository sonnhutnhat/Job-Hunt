@extends('admin.layout.app')

@section('heading', 'Home Page Content')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <label class="form-label">Heading *</label>
                    <input type="text" class="form-control" name="heading" value="">
                </div>
                <div class="mb-4">
                    <label class="form-label">Text</label>
                    <textarea name="text" class="form-control h_100" cols="30" rows="10"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Job Title *</label>
                            <input type="text" class="form-control" name="job_title" value="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Job Location *</label>
                            <input type="text" class="form-control" name="job_location" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Job Category *</label>
                            <input type="text" class="form-control" name="job_category" value="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Search *</label>
                            <input type="text" class="form-control" name="search" value="">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Existing Background *</label>
                    <div>
                        <img src="{{ asset('uploads/') }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Change Background *</label>
                    <div>
                        <input type="file" class="form-control mt_10" name="background">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
