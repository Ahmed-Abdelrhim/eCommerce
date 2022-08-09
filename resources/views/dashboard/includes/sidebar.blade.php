<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title"
                        data-i18n="nav.add_on_drag_drop.main">{{__('admin/sidebar.Main')}} </span></a>
            </li>

            <ul class="menu-content">
                <li class="active"><a class="menu-item" href="#"
                                      data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                </li>

            </ul>
            </li>
            {{--Start Main Categories--}}
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/index.Categories')}} </span>
                    {{--<span class="badge badge badge-danger badge-pill float-right mr-2">400</span>--}}
                </a>

                <ul class="menu-content">
                    {{--Main Category --}}
                    <li class="active"><a class="menu-item" href="{{route('view-categories','main-category')}}"
                                          data-i18n="nav.dash.ecommerce"> {{__('admin/index.Main Category')}} </a>
                    </li>
                    {{-- Start Add Main Category--}}
                    <li class="active"><a class="menu-item" href="{{route('add-category','main-category')}}"
                                          data-i18n="nav.dash.ecommerce"> {{__('admin/index.Add Main Category')}} </a>
                    </li>
                    {{-- End Add Main Category --}}
                </ul>
            </li>
            {{--End Main Categories--}}
            {{--Start Sub Categories--}}
            <li class="nav-item"><a href="{{route('view-categories','sub-categories')}}"><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/index.Sub Categories')}} </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    {{--Main Category--}}
                    <li class="active"><a class="menu-item" href="{{route('view-categories','sub-category')}}"
                                          data-i18n="nav.dash.ecommerce"> {{__('admin/index.Sub Categories')}} </a>
                    </li>
                    {{--Start Add Main Category--}}
                        <li class="active">
                            <a class="menu-item" data-i18n="nav.dash.ecommerce" href="{{route('add-category','sub-category')}}">
                                {{__('admin/index.Add Sub Category')}}
                            </a>
                        </li>
                    {{--End Add Main Category--}}

                </ul>
            </li>
            {{--End Sub Categories--}}
            {{--Start Stores--}}
{{--            <li class="nav-item"><a href=""><i class="la la-male"></i>--}}
{{--                    <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/sidebar.Stores') }}  </span>--}}
{{--                    <span--}}
{{--                        class="badge badge badge-success badge-pill float-right mr-2"></span>--}}
{{--                    --}}{{--                                        {{App\Models\Vendor::count()}}--}}
{{--                </a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li class="active"><a class="menu-item" href="#"--}}
{{--                                          data-i18n="nav.dash.ecommerce">{{__('admin/sidebar.Show All')}} </a>--}}
{{--                    </li>--}}
{{--                    <li><a class="menu-item" href="#" data-i18n="nav.dash.crypto">{{__('admin/sidebar.Add store')}}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            {{--End Stores--}}

            {{--Start Product--}}
{{--            <i class="fa-brands fa-product-hunt"></i>--}}
            <li class="nav-item"><a href=""><i class="fa-brands fa-product-hunt"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/index.Products') }}  </span>

                </a>
                <ul class="menu-content">
{{--                    <li class="active"><a class="menu-item" href="#"--}}
{{--                                          data-i18n="nav.dash.ecommerce">{{__('admin/sidebar.Show All')}} </a>--}}
{{--                    </li>--}}
                    <li><a class="menu-item" href="{{route('products-general-info')}}" data-i18n="nav.dash.crypto">{{__('admin/index.Add Product')}}</a>
                    </li>
                </ul>
            </li>
            {{--End Product--}}

            {{--Settings--}}
            <li class=" nav-item"><a href="#"><i class="la la-bars"></i> <span class="menu-title"
                                                                               data-i18n="nav.templates.main">{{__('admin/sidebar.Settings')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.templates.vert.main">{{__('admin/sidebar.Shipping Methods')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('shipping','free')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{__('admin/sidebar.Free Shipping')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{route('shipping','local')}}"
                                   data-i18n="nav.templates.vert.content_menu">{{__('admin/sidebar.Local Shipping')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{route('shipping','outer')}}"
                                   data-i18n="nav.templates.vert.overlay_menu">{{__('admin/sidebar.Outer Shipping')}}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title"
                                                                                 data-i18n="nav.page_layouts.main">Page layouts</span><span
                        class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1
                            column</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2
                            columns</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-left-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">Content Det.
                            Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-detached-left-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached
                                    sticky left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached
                                    sticky right sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar">Fixed
                            navbar</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navigation.html"
                           data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navbar-navigation.html"
                           data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navbar-footer.html"
                           data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout">Fixed
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout">Boxed
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-static.html" data-i18n="nav.page_layouts.static_layout">Static
                            layout</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-light.html" data-i18n="nav.page_layouts.light_layout">Light
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout">Dark
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout">Semi
                            dark layout</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title"
                                                                                 data-i18n="nav.navbars.main">Navbars</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>
                    </li>
                    <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>
                    </li>
                    <li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi
                            Dark</a>
                    </li>
                    <li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand
                            Center</a>
                    </li>
                    <li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed
                            Top</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="navbar-hide-on-scroll-top.html"
                                   data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll
                                    Top</a>
                            </li>
                            <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html"
                                   data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll
                                    Bottom</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar
                            Components</a>
                    </li>
                    <li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar
                            Styling</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title"
                                                                                  data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation
                            Types</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../vertical-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical
                                    Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-modern-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical
                                    Modern Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-overlay-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical
                                    Overlay</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-compact-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical
                                    Compact</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-content-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical
                                    Content</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-fixed.html"
                           data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-static.html"
                           data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-light.html"
                           data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-dark.html"
                           data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-accordion.html"
                           data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-collapsible.html"
                           data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-flipped.html"
                           data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-native-scroll.html"
                           data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-right-side-icon.html"
                           data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-bordered.html"
                           data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-disabled-link.html"
                           data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-styling.html"
                           data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-tags-pills.html"
                           data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
                                                                                  data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation
                            Types</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../horizontal-menu-template"
                                   data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left
                                    Icon Navigation</a>
                            </li>
                            <li><a class="menu-item" href="../horizontal-menu-template-nav"
                                   data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top
                                    Icon Navigation</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                                                                                data-i18n="nav.page_headers.main">Page Headers</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="headers-breadcrumbs-basic.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-top.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-bottom.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with
                            desc</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-button.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button
                            2</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with
                            buttons</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-description.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs
                            with desc</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-search.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with
                            search</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with
                            stats</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title"
                                                                                  data-i18n="nav.footers.main">Footers</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer
                            Light</a>
                    </li>
                    <li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>
                    </li>
                    <li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer
                            Transparent</a>
                    </li>
                    <li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer
                            Fixed</a>
                    </li>
                    <li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer
                            Components</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.general">General</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="General"></i>

        </ul>
    </div>
</div>
