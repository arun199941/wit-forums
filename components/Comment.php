<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $id =$_POST['id'];
   $comment = $_POST['comment'];
   $user = "Admin";
   if (!empty($id) || !empty($comment) || !empty($user_id)) {
       include "Model/db_config.php";
       $stmt = $conn->prepare("INSERT INTO `comment` ( `user`, `content`, `discussion_id`) VALUES (?, ?, ?);");
       $stmt->bind_param("ssi", $user,$comment,$id);
       $stmt->execute();
       $result = $stmt->get_result();
    
      
     
   }
}


?>
<?php 
if (isset($_SESSION['userName'])) {
  echo('
  <form action="" method="POST">
<div class="container">
    <div class="row">

            <input  type="hidden" value="' . $id .'" name="id" />
            <div class="col-lg-10">
                <textarea class="form-control" required name="comment" id="comment" ></textarea>
                <br />
                <button class="btn btn-primary">Submit</button>
            </div>


    </div>
</div>
</form>
  
  
  ');

}else{
    echo('
    <div class="container my-2">
    <div class="row justify-content-center>
     <h6 class="text text-warning>Login to Comment</h6>
    
    </div>
    
    
    </div>
    
    ');
}


?>
