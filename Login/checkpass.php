<?php
$name = $_POST['uname'];
$password = $_POST['pwd'];
$pass = false;
$suname = false;
$file = __DIR__ . '/../Register/customers.csv';

if (file_exists($file)) {
    $fileHandle = fopen($file, 'r');
    if ($fileHandle) {
        while (($data = fgetcsv($fileHandle)) !== false) {
            foreach ($data as $cell) {
                if ($cell == $name) {
                    $suname = true;
                }
                if ($cell == $password) {
                    $pass = true;
                }
            }
        }
        fclose($fileHandle);
    }
} else {
    print "Error opening the file.";
}

if ($suname && $pass) {
    print "<meta http-equiv='refresh' content='0;url=../Index/index.html'>";
} else {
    // Handle failed login or provide a message here
    print "<meta http-equiv='refresh' content='0;url=../Register/register.html'>";
}
?>
