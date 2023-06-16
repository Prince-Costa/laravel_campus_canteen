@php
$navItemsInJson = file_get_contents('data_source/side_nav.json');
$navItems = json_decode($navItemsInJson);
@endphp


<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
		<?php foreach ($navItems as $navItem): ?>
			<li class="nav-item <?= isset($navItem->subnav) ? 'nav-item-submenu' : '' ?>">
				<a href="<?= isset($navItem->url) ? $navItem->url : '' ?>" class="nav-link legitRipple">
                    <i class="<?= $navItem->icon ?>"></i> <span>
						<?= $navItem->name ?>
					</span></a>

				<?php if (isset($navItem->subnav)): ?>
					<ul class="nav nav-group-sub" data-submenu-title="<?= $navItem->name ?>" style="display: none;">
						<?php foreach($navItem->subnav as $submenu):?>
						<li class="nav-item"><a href="{{ $submenu->url }}"
								class="nav-link legitRipple"><?=$submenu->name?></a></li>
						<?php endforeach?>
					</ul>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	</ul>
</div>
