@extends('admin.layout.app')

@section('heading', 'Other Page Content')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="{{ route('admin_other_page_update') }}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="row custom-tab">
                            <div class="col-lg-3 col-md-12">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active text-center border mb-2 rounded-pill" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Login Page</a>
                                    <a class="nav-link text-center border mb-2 rounded-pill" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Signup Page</a>
                                    <a class="nav-link text-center border mb-2 rounded-pill" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Forget Password Page</a>
                                </div>
                            </div>                                                                                    
                            <div class="col-lg-9 col-md-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" tabindex="0">
                                        <!-- Login Page Section Start -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="login_page_heading" value="{{ $page_other_data->login_page_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="login_page_title" value="{{ $page_other_data->login_page_title }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Meta Description</label>
                                                    <textarea name="login_page_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_other_data->login_page_meta_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Login Page Section End -->
                                    </div>
                                    
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab" tabindex="0">
                                        <!-- Signup Page Section Start -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="signup_page_heading" value="{{ $page_other_data->signup_page_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="signup_page_title" value="{{ $page_other_data->signup_page_title }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Meta Description</label>
                                                    <textarea name="signup_page_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_other_data->signup_page_meta_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signup Page Section End -->
                                    </div>


                                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab" tabindex="0">
                                        <!-- Forget Password Page Section Start -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="forget_password_page_heading" value="{{ $page_other_data->forget_password_page_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="forget_password_page_title" value="{{ $page_other_data->forget_password_page_title }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Meta Description</label>
                                                    <textarea name="forget_password_page_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_other_data->forget_password_page_meta_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Forget Password Page Section End -->
                                    </div>



                                    




                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection