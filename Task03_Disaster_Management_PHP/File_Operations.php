
<?php
echo "<h2>File ni chaduvudham padandii(Read only mode)</h2>". "</br>";
echo "<p> Using this we can only read the content of the file, we cannot make any changes to the file. </p>". "</br>";

$file = fopen("text.txt", "r");
$content = fread($file, filesize("text.txt"));

echo $content;

echo "<h2>File lo raddham padandii(Write mode)</h2>". "</br>";
$file = fopen("text.txt", "w");


echo "<h2> Append only mode</h2>". "</br>";
$file = fopen("text.txt", "a");
if ($file) {
    echo "File opened successfully for appending."."</br>";
    fwrite($file,"This is a new line appended to the file.")."</br>";
} else {
    echo "Error opening file for appending. cannot append to the file."."</br>";
}

$file = fopen("text1.txt", "x");
if ($file) {
    echo "File created successfully."."</br>";
    fwrite($file,"This is a new file created using fopen with 'x' mode.")."</br>";
} else {
    echo "Error creating file. file already exists or cannot create the file."."</br>";
}
$file = fopen("places.txt", "r+");

fclose($file);

?>