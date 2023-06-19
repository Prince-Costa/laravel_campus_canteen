{{-- @php
$navItemsInJson = file_get_contents('data_source/side_nav.json');
$navItems = json_decode($navItemsInJson);
@endphp


<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		@foreach ($navItems as $navItem)
			<li class="nav-item isset($navItem->subnav) ? 'nav-item-submenu' : '' ">
				<a href="isset($navItem->url) ? route($navItem->url): '' " class="nav-link legitRipple">
                    <i class="{{ $navItem->icon}}"></i> <span> {{ $navItem->name }}</span></a>

				@if (isset($navItem->subnav))
					<ul class="nav nav-group-sub" data-submenu-title="{{$navItem->name}}" style="display: none;">
						@foreach ($navItem->subnav as $submenu)
						<li class="nav-item"><a href="{{ route($submenu->url) }}"
								class="nav-link legitRipple">{{ $submenu->name }}</a></li>
						@endforeach
					</ul>
				@endif
			</li>
		@endforeach
	</ul>
</div> --}}

<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
        <li class="nav-item">
            <a href="index.html" class="nav-link active">
                <i class="icon-home4"></i>
                <span>
                    Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
                <li class="nav-item"><a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Layout 2</a></li>
                <li class="nav-item"><a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Layout 3</a></li>
                <li class="nav-item"><a href="../../../../layout_4/LTR/material/full/index.html" class="nav-link">Layout 4</a></li>
                <li class="nav-item"><a href="../../../../layout_5/LTR/material/full/index.html" class="nav-link">Layout 5</a></li>
                <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
            </ul>
        </li>
        <!-- /page kits -->

    </ul>
</div>
<!-- /main navigation -->
