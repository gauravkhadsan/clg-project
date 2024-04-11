<?php
//user login and logout system with same index page...!
           if(isset($_SESSION['user_name'])){
           $user=$_SESSION['user_name'];
           $select=mysqli_query($conn,"SELECT * FROM `user-form` WHERE name='$user'");
           $row=mysqli_fetch_array($select);
           $id=$row['id'];
           ?>
          </ul>
          <?php
          if(isset($id)){
          ?>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <div class="btn btn-primary"><?php  echo $_SESSION['user_name']; ?> </div>
          </div>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <div class="btn btn-primary"><a class="nav-link" href="logout.php">logout</a> </div>
          </div> 
          <?php }
        }else{?>
           <div class="d-lg-flex col-lg-3 justify-content-lg-end">
             <div class="btn btn-primary"><a class="nav-link" href="login.php">login</a> </div>

           </div>
           <?php }?>




           