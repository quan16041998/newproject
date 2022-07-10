<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">

    <div class="logo">
        <a target="_blank" href="" class="simple-text logo-normal">
            {{ __('QTK Manager  ') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
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
