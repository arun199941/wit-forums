<?php
include "components/Navbar.php" ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $category_name =$_POST['category_name'];
    $user= "Admin";
    $content = $_POST['content'];
    $title = $_POST['title'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));

    if (!empty($category_name) || !empty($user) || !empty($content)) {
        include "Model/db_config.php";
        $stmt = $conn->prepare("INSERT INTO `discussion` (`title`, `category`, `content`, `slug`, `created_by`) VALUES (?, ?, ?, ?,?);");
        $stmt->bind_param("sssss", $title,$category_name,$content,$slug,$user);
        $stmt->execute();
        $result = $stmt->get_result();

        header("location:index.php?add_discussion=success");

    }

}

?>


<body>
<form method="POST">
    <div class="container my-3">
        <div class="row">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="category_name" >
            <option selected required>Choose...</option>
                <?php 
                  include "Model/db_config.php" ;
                  $stmt = $conn->prepare("SELECT * FROM `category`");
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while($row = mysqli_fetch_assoc($result)){
                      echo('
                      <option value="' . htmlspecialchars($row['name']). '">'.htmlspecialchars($row['name']).'</option>
                      ');



                  }
                ?>

             
                
                
            </select>
            
            <input  class="form-control my-2" required placeholder="Title" name="title"/>
            <br />
            <textarea class="form-control " required name="content"></textarea>

            <button class="btn btn-primary m-2" type="submit">Submit</button>
            <br />
            <button class="btn btn-secondary m-2">Draft</button>


        </div>

    </div>
</form>

</body>

<?php include "components/Footer.php" ?>