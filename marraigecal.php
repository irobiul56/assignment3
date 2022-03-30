<?php 

require_once('./functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   

</head>
<body>
    
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 my-3">
            <div class="card">
                <div class="card-body">
                    <h2>Marrraige Calculator</h2>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Birth Year</label>
                            <input type="text" name="byear" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Gender</label>
                            <input name="gender" type="radio" value="Male" id="Male"> <label for="Male">Male</label>
                            <input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
                        </div>
                        <div class="my-3">
                            <label for="">Submit</label>
                            <input name="submit" type="submit" class="form-control" value="Create">
                            
                        </div>
                    </form>
                    <?php
                                
                             if (isset($_POST['submit'])) {
                                //get form value 
                                $name = $_POST['name'];
                                $byear = $_POST['byear'];
                                $gender = $_POST['gender'] ?? '';


                                //for form validation

                                if (empty($name) || empty($byear) || empty($gender)) {
                                  echo  "<p class=\"alert-warning d-flex justify-content-between\">All field is requered <button type=\"button\" class = \"btn-close\" data-bs-dismiss = \"alert\"></button></p>";
                                }else{
                                    //check function
                                    echo marriageAgeCal($name, $byear, $gender);
                                }

                             }
                                
                                
                                
                                
                            ?>
                </div>
            </div>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>