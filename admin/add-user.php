<?php 
include 'header.php';
include '../user/connection.php';
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add New User</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New User</h5>
        </div>
        <div class="widget-content nopadding">
          <form name = "form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="First name" name = "firstname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="Last name" name = "lastname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text"  class="span10" placeholder="Username" name = "username" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password:</label>
              <div class="controls">
                <input type="password" class="span10" placeholder="Enter Password" name = "password"/>
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
              <div class="alert alert-danger" id="error" style = "display:none">
            This username already exists. Please try another.
            </div>
            <div class="form-actions">
              <button type="submit" name = "submit1" class="btn btn-success">Save</button>
            </div>
            <div class="alert alert-success" id="success" style = "display:none">
            Record inserted successfully!
            </div>
          </form>
        </div>


      </div>


      <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>User Name</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

              <?php
              $res=mysqli_query($conn, "SELECT * FROM user_registration");
              while($row=mysqli_fetch_array($res))
              {
                ?>
                <tr>
                  <td><?php echo $row["firstname"]; ?></td>
                  <td><?php echo $row["lastname"]; ?></td>
                  <td><?php echo $row["username"]; ?></td>
                  <td><?php echo $row["role"]; ?></td>
                  <td><?php echo $row["status"]; ?></td>
                  <td><a href="edit-user.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                  <td><a href="delete-user.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
                <?php

              }

              ?>
                
              </tbody>
            </table>
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
    $res=mysqli_query($conn, "SELECT * FROM user_registration WHERE username= '$_POST[username]'");
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
    mysqli_query($conn, "insert into user_registration values(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[role]', 'Active')");

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