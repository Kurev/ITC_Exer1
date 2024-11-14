<?php
    // Sanitize inputs
    $name = $_POST['custname'];
    $address = $_POST['custadd'];
    $phone = $_POST['custphone'];
    $email = $_POST['custemail'];
    $password = $_POST['custpassword'];

   
    $file = 'customers.csv';
    $fileHandle = fopen($file, 'a');
    if ($fileHandle !== false) {
        fputcsv($fileHandle, array($name, $address, $phone, $email, $password));
        fclose($fileHandle);
        echo "Data saved successfully.";
    } else {
        echo "Error opening the file.";
    }
?>
