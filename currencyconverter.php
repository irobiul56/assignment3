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
                    <h2>Marrraige Calculator</h2>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Ammount</label>
                            <input type="text" name="amount" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="type">Type</label>
                          
                            <select name="type" id="type">
                                <option value="dollar">Dollar</option>
                                <option value="euro">Euro</option>
                                <option value="pound">Pound</option>
                                <option value="riyal">Riyal</option>
                                <option value="omaniriyal">Omani Riyal</option>
                                <option value="arubanflorin">Aruban Florin</option>
                                <option value="bahrainidinar">Bahraini Dinar</option>
                                <option value="bermudandollar">Bermudan Dollar</option>
                                <option value="bolivianboliviano">Bolivian Boliviano</option>
                                <option value="bruneidollar">Brunei Dollar</option>
                            
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">Submit</label>
                            <input name="submit" type="submit" class="form-control" value="Calculate">
                            
                        </div>
                    </form>
                    <?php
                                
                             if (isset($_POST['submit'])) {
                                //get form value 
                                $amounts = $_POST['amount'];
                                $types = $_POST['type'];

                                //for form validation

                                if (empty($amounts) || empty($types)) {
                                    echo "<p class=\"alert-warning d-flex justify-content-between\">All field is requered <button class = \"btn-close\" data-bs-dismiss = \"alert\"></button></p>";
                                }else{
                                    //check function
                                    echo currencycon($amounts, $types);
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