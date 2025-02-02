<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <title>Welcome to ResQue - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    
    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/photo1.jpg" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/photo2.jpg" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/photo3.jpg" height="600px" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Category cantainer start here -->
    <div class="conatiner text-center my-3" id="ques">
        <h2>
            ResQue-browse categories
        </h2>

        <div class="container text-center">
            <div class="row">
                <!-- Fetch all the category -->
                <?php
            $sql="SELECT * FROM `categories`";
            $result=mysqli_query($conn ,$sql);
            //  ilterate using for loop 
            while($row=mysqli_fetch_assoc($result)){
                // echo $row['category_id'];
                // echo $row['category_name'];
                $cat= $row['category_name'];
                $id= $row['category_id'];
                $desc= $row['category_description'];
            
                echo '<div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/seed/{' .$cat. ',coding,programmer}picsum/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="./explore.php?catid=' .$id. '">' .$cat. '</a></h5>
                            <p class="card-text">' .substr($desc,0,50) .'...</p>
                            <a href="./explore.php?catid=' .$id. '" class="btn btn-primary">explore more</a>
                        </div>
                    </div>
                </div>';
            }

            ?>
              
              
            </div>
        </div>
    </div>
    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>