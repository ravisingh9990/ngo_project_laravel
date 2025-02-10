<!DOCTYPE html>
<html lang="en">

<x-head headTitle='{{ $headTitle }}' css='{!! isset($css) ? $css : "" !!}'/>

<body class="custom-cursor <?php echo (isset($bodyClass) ? $bodyClass   : '')?>">

    <x-customCursor />

    <x-preloader />

    <!-- /.preloader -->

    <div class="page-wrapper">

        <x-header />

        <x-stickyHeader />
        <!-- /.stricky-header -->

        <!--Page Header Start-->
        <?php 
            if (isset($subTitle)) {

            ?>
                <x-pageHeader img='{{ isset($img) ? $img : "" }}' title='{{ isset($title) ? $title : "" }}' title2='{{ isset($title2) ? $title2 : "" }}' title3='{{ isset($title3) ? $title3 : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}'/>
                <?php
            }
        ?>
        <!--Page Header End-->

        @yield('content')

        <?php 

        if (isset($brandOne) && $brandOne === 'true') {
            ?>
            <x-brandOne />
            <?php
        }
        ?>

        <!--Site Footer Start-->
        <x-footer />
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <x-mobileNav />
    <!-- /.mobile-nav__wrapper -->

    <x-searchPopup />
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
    <x-script  script='{!! isset($script) ? $script : "" !!}' />

</body>

</html>