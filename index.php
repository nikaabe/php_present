<?php

$text = "hello!          how are you?     nice to meet you!<br> my   name is nick, the    pleasure of meeting    you is mine.";
$text = trim($text);

while (strpos($text, "  ") !== false) {
    $text = str_replace("  ", " ", $text);
}

echo $text;


// $string = "name,age,city\nJohn,25,New York\nJane,30,Los Angeles\nDoe,28,Chicago";

// $rows = explode("\n", $string);
// $headers = explode(",", array_shift($rows));
// $records = [];
// foreach ($rows as $row) {
//     if (empty($row)) continue;
//     $data = explode(",", $row);
//     $records[] = array_combine($headers, $data);
// }

// foreach ($records as &$record) {
//     if ($record['name'] === 'Jane') {
//         $record['age'] = 35;
//     }
// }

// $csvArray = [];
// $csvArray[] = implode(",", $headers);
// foreach ($records as $record) {
//     $csvArray[] = implode(",", $record);
// }
// $csvOutput = implode("\n", $csvArray);

// echo $csvOutput;
?>

