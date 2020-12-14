<?php include "components/Navbar.php" ?>
<link rel="stylesheet" href="static/discussion.css">
<!-- Render a Specific Discussion Where People Can Comment -->


<body>
    <div class="container">
        <div class="row">
            <?php
                $id = $_GET['id'];
                $slug = $_GET['slug'];
                if (!empty($id) || !empty($slug)) {
                    include "Model/db_config.php";
                    $id = mysqli_real_escape_string($conn, $id);
                    $stmt = $conn->prepare("SELECT * FROM `discussion` WHERE `id`=?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $data = $result->fetch_assoc();
                    if ($data) {
                        echo('
                        <div>
                        
                        
                        </div>
                        <div class="jumbotron m-3">
                            <h1 class="display-4">' .$data['title']. '</h1>
                            <p class="lead">' .$data['content'].'</p>
                            <hr class="my-4">
                            <p>Posted by: '.$data["created_by"].' on ' .$data['created_on'].'</p>
                           
                        </div>
                        
                        ');
                    }
                }
            ?>



        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="comments" id="comments">
                <?php
        
        include "Model/db_config.php";
        $stmt =$conn->prepare("SELECT * FROM `comment` WHERE `discussion_id`=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = mysqli_fetch_assoc($result)){
            echo(' 

            <li class="media my-2">
            <img class="mr-3" src="..." alt=" '.$row['user'].' ">
            <div class="media-body">
            <h5 class="mt-0 mb-1">'.$row['content'].'</h5>
             Posted by: ' .$row['user'].' on ' .$row['created_on'].'
            </div>
            </li>
                
            ');

        }
        
        
        ?>

            </div>

        </div>

    </div>


    <div class="comment-box">
        <?php include "components/Comment.php" ?>

    </div>

</body>



<?php include "components/Footer.php" ?>