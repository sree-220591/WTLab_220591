
<?php
echo "<h2> PART B: STRING FUNCTIONS TASK </h2>";
echo "<hr>";

// A hardcoded string is a fixed value embedded directly in the code,
// while a user input string is obtained from external sources like forms.

$hardcodedString = "Pani chusko!";
$userInputString = "<script>prompt('Enter your name: ');</script>";

echo "Hardcoded String: ".$hardcodedString."<br>";
echo "User Input String: ".$userInputString."<br>";

echo "<hr>";
echo "<h3> Task B3:Mandatroy String Functions List </h3>";
echo "<hr>";

echo "<h4> Basic String Functions </h4>";
$string = "Bon Voyage !";
echo "Original String: " . $string . "<br>";
echo "Length of the String : ".strlen($string)."<br>";
echo "Word Count of the String : ".str_word_count($string)."<br>";

$string1 = "abacadaefaga emachalakk";
echo "<h4>Case Conversion</h4>";
echo "Upper Case :".strtoupper($string)."<br>";
echo "Lower Case :".strtolower($string)."<br>";
echo "First letter Capitalised :".ucfirst($string1)."<br>";
echo "First letter of each word capitalised :".ucwords($string1)."<br>";

echo "<h4> Search and Replace </h4>";
$searchString = "Voyage";
$replaceString = "Journey";
$email = "n220591@rguktn.ac.in";
$pos = "@";

echo "Finding the postion of @ in the email : ".strpos($email,$pos)."<br>";
echo "Replacing the word Voyage with Journey : ".str_replace($searchString,$replaceString,$string)."<br>";

echo "<h4> Substring and Trimming </h4>";
$trimstring = "    Hell0 World!    ";

echo "Substring : ".substr($string,0,4)."<br>";
echo "Trimmed String : ".trim($trimstring)." <br>";
echo "Left Trimmed String : ".ltrim($trimstring)." <br>";
echo "Right Trimmed String : ".rtrim($trimstring)." <br>";

echo "<h4 style='color:Blue;'> String Comparison </h4>";
$str1 = "Deepti";
$str2 = "Deepti";
$str3 = "deepti";

// Case sensitive comparison
echo "Comparing str1 and str2 : ".strcmp($str1,$str2)."<br>";
echo "Comparing str2 and str3 : ".strcmp($str2,$str3)."<br>";

// Case insensitive comparisom
echo "Comparing str1 and str2 : ".strcasecmp($str1,$str2)."<br>";
echo "Comparing str2 and str3 : ".strcasecmp($str2,$str3)."<br>";

echo "<h4> Special Characters and Security </h4>";
$specialCharString = "<script>alert('Hacked!');</script>";
echo "Original String with special characters: " . $specialCharString . "<br>";
echo "After applying htmlspecialchars(): ".htmlspecialchars($specialCharString)."<br>";

$quoteString = "It's a wonderful day!";
echo "Original String with quotes: " . $quoteString . "<br>";
echo "After applying addslashes(): ".addslashes($quoteString)."<br>";



