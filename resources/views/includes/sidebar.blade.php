<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <!-- Logo -->
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <!--/. Logo -->

    <!-- Sidebar Nav -->
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="c-sidebar-nav-icon cil-speedometer"></i> Dashboard
                <span class="badge badge-info">NEW</span>
            </a>
        </li>

        <li class="c-sidebar-nav-title">Theme</li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="colors.html">
                <i class="c-sidebar-nav-icon cil-drop"></i> Colors
            </a>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon cil-puzzle"></i>
                Base</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="base/breadcrumb.html">
                        <span class="c-sidebar-nav-icon"></span> Breadcrumb
                    </a>
                </li>
            </ul>
        </li>

        <!-- Bottom buttons -->
        <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
                <i class="c-sidebar-nav-icon cil-cloud-download">
                </i> Download CoreUI</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-layers"></use>
                </svg> Try CoreUI<strong>PRO</strong></a></li>
        <!--/. Bottom buttons -->
    </ul>
    <!--/. Sidebar Nav -->
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
