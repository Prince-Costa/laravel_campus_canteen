@php
$navItemsInJson = file_get_contents('data_source/side_nav.json');
$navItems = json_decode($navItemsInJson);
@endphp

<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		@foreach ($navItems as $navItem)
			<li class="nav-item <?= isset($navItem->subnav) ? 'nav-item-submenu' : '' ?>">
				<a href="<?= isset($navItem->url) ? route($navItem->url) : '' ?>" class="nav-link legitRipple"><i
						class="<?= $navItem->icon ?>"></i> <span>
						<?= $navItem->name ?>
					</span></a>

				@if (isset($navItem->subnav))
					<ul class="nav nav-group-sub" data-submenu-title="<?= $navItem->name ?>" style="display: none;">
						@foreach($navItem->subnav as $submenu)
						<li class="nav-item"><a href="{{ route($submenu->url) }}"
								class="nav-link legitRipple"><?=$submenu->name?></a></li>
						@endforeach
					</ul>
				@endif
			</li>
		@endforeach
	</ul>
</div>
