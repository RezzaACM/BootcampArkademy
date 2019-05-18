<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <?php

        $data = file_get_contents('biodata.json');
        $biodata = json_decode($data, true);

        var_dump($biodata);


    ?>

        <h1 class="text-center">My Biodata</h1>
        <table>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    :
                </td>
                <td>
                    <?php echo $biodata ["nama"] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $biodata ["address"] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Hobbies
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $biodata ["hobbies"][1] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Status
                </td>
                <td>
                    :
                </td>
                <td>
                <?php 

                if ($biodata ["is_married"] == false){
                    echo "Single";
                }else{
                    echo "Married";
                }
                
                ?>
                </td>
            </tr>
            <tr>
                <td>
                    School
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $biodata ["school"]["highschool"] ?>
                </td>
            </tr>
            <tr>
                <td>
                    University
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $biodata ["school"]["university"] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Skills
                </td>
                <td>
                    :
                </td>
                <td>
                <?php echo $biodata ["skills"]["0"]["name"] ?>
                </td>
            </tr>
       
         </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>