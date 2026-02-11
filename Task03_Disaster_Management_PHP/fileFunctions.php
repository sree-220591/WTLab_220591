<?php

echo "READ OPERATION FROM FILE". "</br>";
echo "</br>";
$file = fopen("text.txt", "r");
$content = fread($file, filesize("text.txt"));
echo $content;

echo "</br>";
echo "</br>";
echo "WRITING OPERATION TO FILE". "</br>";
$file1 = fopen("text.txt", "w");

if ($file1) {
    echo "File opened successfully for writing."."</br>";
    fwrite($file1,"This is a new line added to the file.")."</br>";
} else {
    echo "Error opening file for writing. cannot write to the file."."</br>";
}


$file = fopen("places.txt",'r');
$file_content = file_get_contents("places.txt");
echo "</br>";
echo "READING PLACES FROM FILE". "</br>";
echo "</br>";
echo $file_content;

$file_content = file_put_contents("places.txt", "Kathmandu, Pokhara, Chitwan, Biratnagar");
echo "</br>";
echo "WRITING PLACES TO FILE". "</br>";
echo "</br>";
echo "New content written to places.txt: Kathmandu, Pokhara, Chitwan, Biratnagar";  
echo $file_content;


$content = file("places.txt");
echo "</br>";
echo "READING PLACES AS ARRAY". "</br>";
echo "</br>";
foreach($content as $line){
    echo $line . "</br>";
}

$undha = file_exists("undha.txt");
echo "</br>";
if($undha){
    echo "File undha.txt exists.";
} else {
    echo "file ledhu!!";
}
$undhi = file_exists("places.txt");
echo "</br>";
if($undhi){
    echo "places.txt : unna ley bro ekkadiki potha nuvvu delete cheyakunda!!";
} else {
    echo "file ledhu!!";
}

echo "</br>";
echo "FILE GURINCHI TELUSKUNDHAM.....";
echo "</br>";
$entha = filesize("places.txt");
echo "</br>";
echo "File size of places.txt: " . $entha . " bytes";   

$type = filetype("places.txt");
echo "</br>";
echo "File type of places.txt: " . $type;
echo "</br>";

echo "File access time of places.txt: " . date("F d Y H:i:s.", fileatime("places.txt"));
echo "</br>";
echo "File modification time of places.txt: " . date("F d Y H:i:s.", filemtime("places.txt"));
echo "</br>";   
echo "File creation time of places.txt: " . date("F d Y H:i:s.", filectime("places.txt"));

fileperms("places.txt");
echo "</br>";
echo "File permissions of places.txt: ". fileperms("places.txt");
echo "</br>";
echo "File owner of places.txt: " . fileowner("places.txt");
echo "</br>";
echo "File group of places.txt: " . filegroup("places.txt");
echo "</br>";
echo "Inode: " . fileinode("places.txt")."</br>";

$file_copy = copy("places.txt", "places_backup.txt");
if($file_copy){
    echo "File copied successfully to places_backup.txt";  
} else {
    echo "Error copying file.";
}

$new = rename("places1.txt","places_renamed.txt");
echo "</br>";
echo $new;
echo "Lets check whether the renamed file exists or not: ". file_exists("places_renamed.txt") ? "File exists." : "File does not exist.";

unlink("places_backup.txt");
echo "</br>";
echo "places_backup.txt file deleted successfully.";

mkdir("new_directory");
echo "</br>";
echo "Directory 'new_directory' created successfully.";

echo chdir("new_directory") ? "Changed to new_directory successfully." : "Failed to change directory.";

is_file("places_renamed.txt") ? "places_renamed.txt is a file." : "places_renamed.txt is not a file.";
is_dir("new_directory") ? "new_directory is a directory." : "new_directory is not a directory.";
echo "</br>";
echo "Current working directory: " . getcwd();

$files = scandir("/opt/lampp/htdocs/WTLab_220591/Task03_Disaster_Management_PHP");
echo "</br>";
print_r($files);

opendir("/opt/lampp/htdocs/WTLab_220591/Task03_Disaster_Management_PHP");
echo "</br>";
echo "Directory opened successfully.";

echo "Reading directory contents: ". readdir(opendir("/opt/lampp/htdocs/WTLab_220591/Task03_Disaster_Management_PHP"));

closedir(opendir("/opt/lampp/htdocs/WTLab_220591/Task03_Disaster_Management_PHP"));
echo "</br>";
echo "Directory closed successfully.";

chdir("..") ? "Changed to parent directory successfully." : "Failed to change directory.";

flock($file, LOCK_EX) ? "File locked successfully." : "Failed to lock file.";
fwrite($file, "This line is added while the file is locked.") ? "Data written to file successfully." : "Failed to write to file.";
flock($file, LOCK_UN) ? "File unlocked successfully." : "Failed to unlock file.";

fclose($file);
fclose($file1);

?>