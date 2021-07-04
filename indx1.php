<?php require '.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>montors</title>
</head>
<style>
    div {
        background-color: #465070e3;
        border: none;
        color: rgb(23, 23, 29);
        padding: 50px 70px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 50px 450px;
        cursor: pointer;
    }
</style>

<body>
    <form action="connct.php" method="POST">
        <div class="slidecontainer">
            <label>montors</label>
            <hr>
            <label for"myRange">Motor1 </label>
            <input type="range" name="quantity1" min="1" max="180" value="10" class="slider" id="myRange1" />

            <hr>
            <label for"myRange">Motor2 </label>
            <input type="range" name="quantity2" min="1" max="180" value="10" class="slider" id=" myRange2" />

            <hr>
            <label for"myRange">Motor3</label>
            <input type="range" name="quantity3" min="1" max="180" value="10" class="slider" id=" myRange3" />

            <hr>
            <label for"myRange">Motor4 </label>
            <input type="range" name="quantity4" min="1" max="180" value="10" class="slider" id=" myRange4" />
            <hr>
            <label for"myRange">Motor5 </label>
            <input type="range" name="quantity5" min="1" max="180" value="10" class="slider" id="myRange5" />
            <hr>
            <label for"myRange">Motor6 </label>

            <input type="range" name="quantity6" min="1" max="180" value="10" class="slider" id="myRange6" />
            <hr>
            <input type="submit" value="sav" name="sav"
                style="font-size:30px;background-color:blak;border-radius:30px;">
            <input type="submit" value="ran" name="ran"
                style="font-size:30px;background-color:blak;border-radius:30px;">


        </div>

    </form>

    <?php
$servername="localhost";
$username="root";
$pasword="";
$dbname="arm";
//create connection
$conn =mysqli_connect($servername,$username,$pasword,$dbname);
if(isset($_POST['save'])){
$sql="INSET INTO"`motor`(`Motor1`,`Motor2`,`Motor3`,`Motor4`,`Motor5`,`Motor6`)value("$_POST['quantity1'];
$quantity2=$_POST['quantity2'];
$quantity3=$_POST['quantity3'];
$quantity4=$_POST['quantity4'];
$quantity5=$_POST['quantity5'];
$quantity6=$_POST['quantity6'];");
$result=$conn=>query($sql);
}
?>

</body>