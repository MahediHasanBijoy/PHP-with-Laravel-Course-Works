
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Name</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <h1>Search Fruits by Name</h1>
        </div>
        <div>
            <form action="index.php" method="get">
                <label for="name">Search by title:</label>
                <input type="text" name="fruit_name">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="output">
<?php
    // database of fruits
    $fruits = ['apple', 'banana', 'mango', 'pineapple', 'grape', 'dates','strawberry', 'lichi', 'jackfruit', 'watermelon', 'blueberry', 'peache', 'dragonfruit'];
    
    // search fruits from database fruits
    function searchFruit($fruit_name, $fruits){
        return array_search($fruit_name, $fruits);
    }

    if(isset($_GET['fruit_name']) && !empty($_GET['fruit_name'])){
        $fruit_name = strtolower(trim($_GET['fruit_name']));
        echo "<p>You have searched for {$fruit_name} </p>";
        // index of fruit in fruits database if found
        $result = searchFruit($fruit_name, $fruits);

        if($result !== false){
            echo "<p style='color:green;'>We have {$fruit_name} in our database in index number {$result}</p>";
        }else{
            echo "<p style='color:red;'>Sorry! your searched fruit {$fruit_name} is not in our database currently.</p>";
        }
    }else{
        echo "<p style='color:blue;'>Please search for your favorite fruit.</p>";
    }

?>
        </div>
    </div>
</body>
</html>