<?php 
include 'header.php';
include '../user/connection.php';
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add New Purchase</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Purchase</h5>
        </div>
        <div class="widget-content nopadding">
          <form name = "form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="Product name" name = "productname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Unit :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="Unit" name = "unit"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Supplier</label>
              <div class="controls">
                <input type="text"  class="span10" placeholder="Supplier" name = "supplier" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name = "submit1" class="btn btn-success">Save</button>
            </div>
            <div class="alert alert-success" id="success" style = "display:none">
            Purchase inserted successfully!
            </div>
          </form>
        </div>


      </div>
    </div>
    </div>
</div>
</div>
</div>

<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $res=mysqli_query($conn, "SELECT * FROM products_tbl WHERE product_name= '$_POST[productname]'");
    $count=mysqli_num_rows($res);
    if ($count>0)
    {
        ?>
        <script type = "text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("error").style.display="block";
        </script> 
        <?php
}
else
{
    mysqli_query($conn, "insert into products_tbl values(NULL,'$_POST[productname]', '$_POST[unit]', '$_POST[supplier]')");

    ?>
    <script type = "text/javascript">
        document.getElementById("error").style.display="none";
        document.getElementById("success").style.display="block";
        setTimeout(function(){
              window.location.href=window.location.href;
            },3000);
    </script> 
    <?php
}
}

?>
      

<?php
include 'footer.php';
?>