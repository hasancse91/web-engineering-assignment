Find Fahrenheit to Celsius and vice varsa using PHP<br><br>

<?php
    
    function fahrenheit_to_celsius($value)
    {
        $celsius=5/9*($value-32);
        return $celsius ;
    }

    function celsius_to_fahrenheit($value)
    {
        $fahrenheit=$value*9/5+32;
        return $fahrenheit ;
    }

    $celsiusValue = 150;
    $fahrenheitValue = 450;

    echo "Fahrenheit of ".$celsiusValue." is ".celsius_to_fahrenheit($celsiusValue)."<br>";

    echo "Celsius of ".$fahrenheitValue." is ".fahrenheit_to_celsius($fahrenheitValue);


?>