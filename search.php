<?php include "components/Navbar.php" ?>


<body>
<?php

if (isset($_GET['submit'])) {
    $searchQuery = $_GET['query'];
    include './Model/db_config.php';
    $searchQuery = mysqli_escape_string($conn,$searchQuery);
    $sqlQuery = "SELECT * FROM `discussion` WHERE `content` LIKE '%$searchQuery%' OR `title` LIKE  '%$searchQuery%' ";
    $result = mysqli_query($conn,$sqlQuery);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo('
                        <div class="jumbotron m-3">
                        <a href="discussion.php?id='.$row['id'].'&slug='.$row['slug'].' ">
                        <h2 class="display-4">' .$row['title']. '</h2>
                        
                        </a>

                        
                            <p class="lead">' .$row['content'].'</p>
                            <hr class="my-4">
                            <p>Posted by: '.$row["created_by"].' on ' .$row['created_on'].'</p>
                           
                        </div>
                        
            
            ');

        }
    }else{
    
    }

}

?>

</body>

<?php include "components/Footer.php" ?>



