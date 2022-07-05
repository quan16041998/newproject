<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('QTK Manager  ') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.adminindex')}}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Admin') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.collectionindex')}}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Collection') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.stylistindex')}}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Stylist') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.productindex')}}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Product') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.customerindex')}}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Customer') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
