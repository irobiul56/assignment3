<?php
require_once ('./functions.php');
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
    <form action="" method="POST">

    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 my-3 ">
            <div class="card">
                <div class="card-body shadow-sm p-3 mb-5 bg-body rounded">
                    <h2>Area Calculator</h2>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="type">Type</label>
                          
                            <select name="type" id="type" class="form-control" >
                                <option value="Rectangle">Rectangle</option>
                                <option value="Triangle">Triangle</option>
                                <option value="Circle">Circle</option>
                                <option value="Square">Square</option>

                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Number 1</label>
                            <input name="number1" type="text" class="form-control">
                            
                        </div>
                        <div class="my-3">
                            <label for="">Number 2</label>
                            <input name="number2" type="text" class="form-control">
                            
                        </div>
                        <div class="my-3">
                            <label for="" class="form-label">Submit</label>
                            <input class="form-control" name="submit" type="submit" value="Calculate">
                            
                        </div>
                    </form>
                    <?php
                                
                             if (isset($_POST['submit'])) {
                                //get form value 
                                $type = $_POST['type'];
                                $number1 = $_POST['number1'];
                                $number2 = $_POST['number2'] ?? '';

                                
                                
                                //for form validation

                                if (empty( $type) || empty($number1)) {
                                    echo "<p class=\"alert-warning d-flex justify-content-between\">Number 1 and Number 2 Field is requered <button class = \"btn-close\" data-bs-dismiss = \"alert\"></button></p>";
                                }else{
                                    //check function
                                    echo getarea($type, $number1, $number2);
                                }

                             }
                                   
                            ?>
                </div>
            </div>
        </div>
    </div>
</div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>