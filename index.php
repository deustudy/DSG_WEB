<?php
    require_once("view/head.php");
?>

    <section class="wrapper site-min-height">
        <?php
        $page = $_GET["page"];
        if(isset($_GET["err"])) {
            echo "<script>alert('잘못된 로그인 시도');</script>";
        }

        if (!isset($page)) {
            require("carousel.php");
            echo '
            <hr>
            <h3><i class="fa fa-money"></i> Donation</h3>
            <div class="row mt">
                <div class="col-lg-4">
                    <h4>총 합계</h4>
                    <i class="fa fa-won"></i> 25,650
                </div>
            </div>';
        }
        else {
            require($page.".html");
        }
        ?>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

<?php require_once("view/footer.php");?>