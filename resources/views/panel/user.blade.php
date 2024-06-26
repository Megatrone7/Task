
@extends('panel.layouts.main')
@section('content')
<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if (localStorage.getآیتم("data-theme") !== null) { themeMode = localStorage.getآیتم("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
  <!--begin::Page-->
  <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::Header-->

    @include('panel.layouts.header')

    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
      <!--begin::Sidebar-->
      @include('panel.layouts.sidebar')
      <!--end::Sidebar-->
      <!--begin::Main-->
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->

                  <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">لیست کاربران</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->

										<!--end::Breadcrumb-->
									</div>

								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">

									<!--begin::جداول Widget 13-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
                      <div class="card-title">
												<!--begin::جستجو-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-4">

													</span>
													<!--end::Svg Icon-->

												</div>
												<!--end::جستجو-->
											</div>


										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
                      @if(session('success'))
                          <div class="alert alert-success mb-4" role="alert">
                                {{session('success')}}
                          </div>
                        @endif
                        @if(count($errors)>0)
                          <div class="alert alert-danger mb-4" role="alert">
                                @foreach($errors->all() as $error)
                                <span>{!!$error!!}</span><br>
                              @endforeach
                          </div>
                        @endif
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table datatable1 text-center table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="w-25px text-center">#</th>
															<th class="min-w-140px text-center">موبایل</th>
															<th class="min-w-120px text-center">نام</th>
															<th class="min-w-120px text-center">نام خانوادگی</th>
															<th class="min-w-120px text-center">وضعیت</th>

														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
                            <?php $i=1; ?>
                            @foreach($users as $user)
														<tr>
                              <td>
                                {{$i++}}
                              </td>
															<td>
																{{$user->mobile}}
															</td>
															<td>
																{{$user->name}}
															</td>
															<td>{{$user->family}}</td>
															<td>
                                @if($user->role=='admin')
                                  <span class="badge badge-light-danger">ادمین</span>
                                @elseif($user->role=='user')
                                  <span class="badge badge-light-success">کاربر اصلی</span>
                                @endif
															</td>




																</form>














																					</tr>


                            @endforeach

													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::جداول Widget 13-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						@include('panel.layouts.footer')
						<!--end::Footer-->
					</div>
      <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Page-->
</div>

@endsection

