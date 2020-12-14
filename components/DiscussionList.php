<?php


include "Model/db_config.php";

$stmt = $conn->prepare("SELECT * FROM `discussion`");
$stmt->execute();
$result = $stmt->get_result();
while ($row = mysqli_fetch_assoc($result)) {
    echo ('
    <div class="col-11">
      <div class="media my-2">
        <img src="..." class="mr-3" alt="..." />
        <div class="media-body">
        <a  href="discussion.php?id='.htmlspecialchars($row['id']).'&slug=' .htmlspecialchars($row['slug']). '"> 
          <h5 class="mt-0">'.htmlspecialchars($row['title']). '</h5>
         </a>
          '.htmlspecialchars($row['content']).'
          <br />
          <small className="text-muted">Posted By: ' .$row['created_by'].'</small>
       
        </div>
        
        
      </div>
    </div>
    
    ');


}

?>


