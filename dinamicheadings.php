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
                    <h2>Dynamic Hading</h2>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Enter Your Title</label></label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="type">Heading Type </label>
                            <select name="type" id="" class="form-control">
                                <option value="h1">H1</option>
                                <option value="h2">H2</option>
                                <option value="h3">H3</option>
                                <option value="h4">H4</option>
                                <option value="h5">H5</option>
                                <option value="h6">H6</option>
                            </select>

                        </div>
                        <div class="my-3">
                            <label for="">align</label></label>
                            <input type="text" name="align" class="form-control">
                        </div>

                        <div class="my-3">
                            <label for="">Font Famely</label>
                            <input type="text" name="ff" class="form-control">
                        </div>

                        <div class="my-3">
                            <label for="">Font Color</label>
                            <input type="text" name="color" class="form-control">
                        </div>

                        <div class="my-3">
                            <label for="">Font Case</label>
                            <input type="text" name="upperlower" class="form-control">
                        </div>

                        <div class="my-3">
                            <label for="">margin</label>
                            <input type="text" name="margin" class="form-control">
                        </div>

                        <div class="my-3">
                            <label for="">Submit</label>
                            <input name="submit" type="submit" class="form-control" value="Calculate">
                            
                        </div>
                    </form>
                    <?php
                                
                             if (isset($_POST['submit'])) {
                                //get form value 

                                $title = $_POST['title'];
                                $type = $_POST['type'];
                                $align = $_POST['align'];
                                $ff = $_POST['ff'];
                                $color = $_POST['color'];
                                $upperlower = $_POST['upperlower'];
                                $margin = $_POST['margin'];


                                //for form validation

                                if (empty($title) || empty($type) || empty($align) || empty($ff) || empty($Color) || empty($upperlower) || empty($margin)) {
                                    echo "<p class=\"alert-warning d-flex justify-content-between\">All field is requered <button class = \"btn-close\" data-bs-dismiss = \"alert\"></button></p>";
                                }else{
                                    //check function
                                    echo dinamichead ($title, $type, $align, $ff, $color, $upperlower, $margin);
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