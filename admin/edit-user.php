<?php
include 'header.php';
include '../users/connection.php';

$id=$_GET["id"];
$firstname="";
$lastname="";
$username="";
$password="";
$status="";
$role="";
$res=mysqli_query($conn, "SELECT * FROM user_registration WHERE id = $id");
while($row=mysqli_fetch_array($res))
{
  $firstname=$row["firstname"];
  $lastname=$row["lasttname"];
  $username=$row["username"];
  $status=$row["status"];
  $role=$row["role"];
}
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit User</h5>
        </div>
        <div class="widget-content nopadding">
          <form name = "form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="First name" name = "firstname" value = <?php echo $firstname; ?>/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="Last name" name = "lastname"value = <?php echo $lastname; ?>/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text"  class="span10" placeholder="Username" name = "username" readonly value = <?php echo $username; ?>/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password:</label>
              <div class="controls">
                <input type="password" class="span10" placeholder="Enter Password" name = "password" value = <?php echo $password; ?>/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Select Role :</label>
              <div class="controls">
              <select name = "role" class = "span10">
                    <option>Admin</option>
                    <option>User</option>
                </select>  
              </div>
              <div class="control-group">
              <label class="control-label">Select Status :</label>
              <div class="controls">
              <select name = "role" class = "span10">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>  
              </div>
            <div class="form-actions">
              <button type="submit" name = "submit1" class="btn btn-success">Update</button>
            </div>
            <div class="alert alert-success" id="success" style = "display:none">
            Record updated successfully!
            </div>
          </form>
        </div>
        </div>


        </div>
        </div>
    </div>
    </div>

    </div>
</div>

<!--end-main-container-part-->

<?php
include 'footer.php';
?>