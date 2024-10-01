<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
include 'header.php';
include '../user/connection.php';
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="dashboard.php" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="">
            <div class="card" style="width:10rem; border-style: solid; border-width: 1px; border-radius: 10px; float: left">
                <div class="card-body">
                    <h3 class="card-title text-center">No of Products</h3>
                    <h1 class="card-title text-center">
                        <?php
                        

                    </h1>  
                </div>
            </div>
        </div>

    </div>
</div>

<!--end-main-container-part-->

<?php
include 'footer.php';
?>