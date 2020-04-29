<?php
$db = mysqli_connect("localhost", "root", "9832", "Joke");
$data = file_get_contents('https://sv443.net/jokeapi/v2/joke/Programming?type=single');



$decodeData = json_decode($data, true);

print_r($decodeData->joke);

$joke = $decodeData['joke'];

$sql = "Insert into joke(joke) VALUES('$joke')";

if(mysqli_query($db, $sql))
{
    die('Error : query not executed. please fix the issue !' );
}
else{
    echo "Data insert successfully !!!";
}

?>

