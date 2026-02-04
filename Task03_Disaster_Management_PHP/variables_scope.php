<?php
echo "<h2>PART A: Variables and Variables Scope task</h2>";

echo "<h3>Task A2: Datatypes </h3>";

$string_var = "Hands in Need Foundation";
$int_var = 220591;
$float_var = 99.99;
$bool_var = false;
$array_var = array('Disastre Relief','Volunteers','Fundraising');

echo "String Variable: " . $string_var . "<br>";
echo gettype($string_var) . "<br>";
echo var_dump($string_var) . "<br>";

echo "Integer Variable: " . $int_var . "<br>";
echo "Type of Integer Variable: " . gettype($int_var) . "<br>";
echo var_dump($int_var)."<br>";

echo "Float Variable: " . $float_var . "<br>";
echo "Type of Float Variable: " . gettype($float_var) . "<br>";
echo var_dump($float_var)."<br>";

echo "Boolean Variable: " . ($bool_var ? 'true' : 'false') . "<br>";
echo "Type of Boolean Variable: " . gettype($bool_var) . "<br>";

echo "Array Variable : ".$array_var."<br>";
echo "Type of Array Variable: ".gettype($array_var)."<br>";

print_r($array_var);
echo "<br>";

echo "<h3>Task A3: Variable Scope </h3>";   

/* Local Scope */
echo "<h4>Local Scope Example:</h4>";

function pakkalocal() {
    $local_var = "Nenu Pakka Local !";
    echo $local_var . "<br>";
}

pakkalocal();

echo "Trying to access local variable outside function: ";
echo isset($local_var) ? $local_var : "Undefined variable 'local_var' in this scope.<br>";

/* Global Scope */
echo "<h4>Global Scope Example:</h4>";

$global_var = "Nenu Global ";

function global_function() {
    global $global_var;
    echo $global_var . "Is accessed inside function.<br>";
}
global_function();
echo $global_var . "Is accessed outside function.<br>";

/* Static Scope */
echo "<h4>Static Scope Example:</h4>";

function jing_tai() {
    static $count = 0;
    $count++;
    echo "Function called " . $count . " times.<br>";
}
jing_tai();
jing_tai();
jing_tai();

/* difference between global and static variables */
$lekka =  0;

function difference_example() {
    global $lekka;
    static $static_lekka = 0;
    $lekka++;
    $static_lekka++;
    echo "Global lekka: " . $lekka . ", Static lekka: " . $static_lekka . "<br>";
}
difference_example();
difference_example();
difference_example();
?>




