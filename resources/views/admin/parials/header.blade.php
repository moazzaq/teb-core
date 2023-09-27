<div id="kt_app_header" class="app-header" data-kt-sticky="true"
     data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
     data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
         id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                 id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../demo1/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="{{asset('backend')}}/media/logos/default-small.svg" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
             id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                 data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                 data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                 data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                 data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

            </div>
            <!--end::Menu wrapper-->

            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">

                <!--begin::Notifications-->
                <div class="app-navbar-item ms-1 ms-md-4">
                    <!--begin::Menu- wrapper-->
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                         data-kt-menu-trigger="{default: 'click', lg: 'click'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                        <i class="ki-duotone ki-notification fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                         data-kt-menu="true" id="kt_menu_notifications">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                             style="background-image:url('{{asset('backend')}}/media/misc/menu-header-bg.jpg')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                <span class="fs-8 opacity-75 ps-3">24 reports</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                <!--begin::Items-->
                                <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                    Alice</a>
                                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">1 hr</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-information fs-2 text-danger">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                    Confidential</a>
                                                <div class="text-gray-400 fs-7">Confidential staff documents
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">2 hrs</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-briefcase fs-2 text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                    HR</a>
                                                <div class="text-gray-400 fs-7">Corporeate staff profiles
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">5 hrs</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-abstract-12 fs-2 text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                    Redux</a>
                                                <div class="text-gray-400 fs-7">New frontend admin theme
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">2 days</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i
                                                                    class="ki-duotone ki-colors-square fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                    Breafing</a>
                                                <div class="text-gray-400 fs-7">Product launch status update
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">21 Jan</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<i class="ki-duotone ki-picture fs-2 text-info"></i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                    Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of banner images
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">21 Jan</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-color-swatch fs-2 text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																	<span class="path6"></span>
																	<span class="path7"></span>
																	<span class="path8"></span>
																	<span class="path9"></span>
																	<span class="path10"></span>
																	<span class="path11"></span>
																	<span class="path12"></span>
																	<span class="path13"></span>
																	<span class="path14"></span>
																	<span class="path15"></span>
																	<span class="path16"></span>
																	<span class="path17"></span>
																	<span class="path18"></span>
																	<span class="path19"></span>
																	<span class="path20"></span>
																	<span class="path21"></span>
																</i>
															</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                   class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                    Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of SVG icons
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">20 March</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <!--begin::View more-->
                                <div class="py-3 text-center border-top">
                                    <a href="../../demo1/dist/pages/user-profile/activity.html"
                                       class="btn btn-color-gray-600 btn-active-color-primary">View All
                                        <i class="ki-duotone ki-arrow-right fs-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->

                <!--begin::Menu item-->
                <div class="app-navbar-item lang-h ms-1 ms-md-4" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
									<span class="menu-title position-relative">
										<span
                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
											<img class="w-15px h-15px rounded-1 ms-2"
                                                 src="{{asset('backend')}}/media/flags/united-states.svg"
                                                 alt="" /></span></span>
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                        <img src="{{asset('backend')}}/media/avatars/300-3.jpg" class="rounded-3" alt="user" />
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                         data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{asset('backend')}}/media/avatars/300-3.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">Robert Fox
                                        <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>
                                    <a href="#"
                                       class="fw-semibold text-muted text-hover-primary fs-7">robert@kt.com</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="profile.html" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="menu-link px-5" href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <span class="align-middle">Sign Out</span>
                                </a>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                         id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
                <!--begin::Aside toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
