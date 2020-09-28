<html>

<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 == "" || $num2 == "")
        echo "this field can't be empty";
    else
        $operator = $_POST['operation'];

    echo "The result is: ";
    if ($operator == "addition") {
        echo $num1 + $num2;
    } else if ($operator == "subtraction") {
        echo $num1 - $num2;
    } else if ($operator == "multiplication") {
        echo $num1 * $num2;
    } else if ($operator == "division") {
        if ($num2 == 0)
            echo "! division by zero Exception";
        else
            echo $num1 / $num2;
    }
    ?>
</body>

</html>