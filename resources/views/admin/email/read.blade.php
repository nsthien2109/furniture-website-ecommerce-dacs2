@extends('admin_layout')
@section('admin_content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box">
                  <h4 class="page-title">Đọc mail</h4>
              </div>
          </div>
      </div>
      <!-- end page title -->

        <!-- Right Sidebar -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                  <!-- Left sidebar -->
                  <div class="inbox-leftbar">

                      <a href="{{URL::to('/write-mail')}}" class="btn btn-danger btn-block waves-effect waves-light">Viết mail</a>

                      <div class="mail-list mt-4">
                          <a href="javascript: void(0);" class="text-danger font-weight-bold"><i class="feather-inbox mr-2"></i>Hộp thư<span class="badge badge-soft-danger float-right ml-2">7</span></a>
                          <a href="javascript: void(0);"><i class="feather-star mr-2"></i>Dấu sao</a>
                          <a href="javascript: void(0);"><i class="feather-clock mr-2"></i>Đã nhận</a>
                          <a href="javascript: void(0);"><i class="feather-align-justify mr-2"></i>Nháp<span class="badge badge-soft-info float-right ml-2">32</span></a>
                          <a href="javascript: void(0);"><i class="feather-send mr-2"></i>Đã gửi</a>
                          <a href="javascript: void(0);"><i class="feather-trash mr-2"></i>Thùng rác</a>
                          <a href="javascript: void(0);"><i class="feather-tag mr-2"></i>Quan trọng</a>
                          <a href="javascript: void(0);"><i class="feather-warning mr-2"></i>Spam</a>
                      </div>
                  </div>
                  <!-- End Left sidebar -->

                    <div class="inbox-rightbar">

                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-light waves-effect"><i class="feather-archive font-18"></i></button>
                          <button type="button" class="btn btn-sm btn-light waves-effect"><i class="feather-alert-octagon font-18"></i></button>
                          <button type="button" class="btn btn-sm btn-light waves-effect"><i class="feather-delete font-18"></i></button>
                      </div>
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                              <i class="feather-folder font-18"></i>
                              <i class="feather-chevron-down"></i>
                          </button>
                      </div>
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                              <i class="feather-tag font-18"></i>
                              <i class="feather-chevron-down"></i>
                          </button>
                      </div>

                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                              <i class="feather-more-horizontal font-18"></i>
                              <i class="feather-chevron-down"></i>
                          </button>
                      </div>

                        <div class="mt-4">


                            <div class="media mb-3 mt-1">
                                <img class="d-flex mr-2 rounded-circle" src="{{('public/backend/images/custom.png')}}" alt="placeholder image" height="32">
                                <div class="media-body">
                                    <small class="float-right">{{$detail->created_at}}</small>
                                    <h6 class="m-0 font-14">{{$detail->ContactName}}</h6>
                                    <small class="text-muted">From: {{$detail->ContactEmail}}</small>
                                </div>
                            </div>

                            <p>{{$detail->ContactSubject}}</p>
                            <p>{{$detail->ContactMessage}}</p>
                            <hr/>

                            <!-- end row-->

                            <div class="mt-5">
                                <a href="{{URL::to('/reply_id='.$detail->ContactID.'')}}" class="btn btn-secondary mr-2"><i class="feather-corner-down-right mr-1"></i>Trả lời</a>
                                <a href="{{URL::to('/mail-manager')}}" class="btn btn-light">Trở lại <i class="feather-fast-forward ml-1"></i></a>
                            </div>

                        </div>
                        <!-- end .mt-4 -->

                    </div>
                    <!-- end inbox-rightbar-->

                    <div class="clearfix"></div>
                </div>

            </div> <!-- end Col -->

        </div><!-- End row -->


    </div> <!-- container -->

</div> <!-- content -->
@endsection
