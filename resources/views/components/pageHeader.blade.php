<section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo (asset($img)); ?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('index') }}"><?php echo (isset($title) ? $title   : '')?></a></li>
                        <li><span>/</span></li>
                        <li class="active"><?php echo (isset($title2) ? $title2   : '')?></li>
                    </ul>
                    <h2><?php echo (isset($subTitle) ? $subTitle   : '')?></h2>
                </div>
            </div>
        </section>