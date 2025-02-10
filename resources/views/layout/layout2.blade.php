<!DOCTYPE html>
<html lang="en">

<x-head headTitle='{{ $headTitle }}' css='{!! isset($css) ? $css : "" !!}'/>

<body class="custom-cursor <?php echo (isset($bodyClass) ? $bodyClass   : '')?>">

    <x-customCursor />

    <x-preloader />
    

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
    <x-script />

</body>

</html>