@extends('layout')
@section('content')
  <div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title">Đăng kí</h1>

					<!--=======  breadcrumb list  =======-->

					<ul class="breadcrumb-list">
						<li class="breadcrumb-list__item"><a href="index.html">Trang chủ</a></li>
						<li class="breadcrumb-list__item breadcrumb-list__item--active">Đăng kí mới</li>
					</ul>

					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>

	<!--=======  End of breadcrumb area =======-->

	<!--=============================================
    =            login page content         =
    =============================================-->

	<div class="login-area mb-130 mb-md-70 mb-sm-70 mb-xs-70 mb-xxs-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-md-50 mb-sm-50">
					<div class="lezada-form login-form">
						<form action="{{URL::to('/send-new-account')}}" method="post">
              {{csrf_field()}}
							<div class="row">
								<div class="col-lg-12">
									<!--=======  login title  =======-->

									<div class="section-title section-title--login text-center mb-50">
										<h2 class="mb-20">Tạo tài khoản</h2>
                    <?php
                    $message = Session::get('message');
                    if (isset($message)) {
                      echo '<p> <strong>Thông báo : </strong>'.$message.'</p>';
                      Session::put('message',null);
                    }else {
                      echo '<p>Vui lòng điền đầy đủ thông tin bên dưới !</p>';
                  } ?>
									</div>

									<!--=======  End of login title  =======-->
								</div>
                <div class="col-lg-12 mb-60">
									<input type="text" name="FirstName" placeholder="Họ" required>
								</div>
								<div class="col-lg-12 mb-60">
									<input type="text" name="Name" placeholder="Tên" required>
								</div>
                <div class="col-lg-12 mb-60">
                  <input type="email" name="Email" placeholder="Email" required>
                </div>
                <div class="col-lg-12 mb-60">
                  <input type="text" name="Phone" placeholder="Số điện thoại" required>
                </div>
                <div class="col-lg-12 mb-60">
                  <input type="text" name="Username" placeholder="Tên tài khoản" required>
                </div>
								<div class="col-lg-12 mb-60">
									<input type="password" name="Password" placeholder="Mật khẩu" required>
								</div>
                
                <div class="col-lg-12 mb-60">
                  <input type="text" name="Address" placeholder="Địa chỉ chi tiết">
                </div>
								<div class="col-lg-12 text-center mb-30">
									<button type="submit" class="lezada-button lezada-button--medium">Đăng kí tài khoản</button>
								</div>
                <div class="container">
                <div class="row">
								<div class="col-lg-8">
									<a href="#" class="reset-pass-link">Bạn quên mật khẩu ?</a>
								</div>
                <div class="col-lg-4">
                  <a href="{{URL::to('check-login')}}" class="reset-pass-link">Đã có tài khoản </a>
                </div>
                </div>
              </div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6">
				        <img src="{{('public/frontend/images/login.jpg')}}" height="73%" width="100%" alt="">
				</div>
			</div>
		</div>
	</div>
@endsection
