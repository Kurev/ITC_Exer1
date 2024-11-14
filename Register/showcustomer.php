<?php 

$file = 'customers.csv';
if (file_exists($file)) {
    $fileHandle = fopen($file, 'r'); // Remove quotes around $file
    print '<table>';
    while (($data = fgetcsv($fileHandle)) !== false) {
        print '<tr>';
        foreach ($data as $cell) {
            print '<td>' . $cell . '</td>'; // Corrected closing </td> tag
        }
        print '</tr>';
    }
    print '</table>'; // Close table after the loop
    fclose($fileHandle);
} else {
    print 'Error opening the file.';
}

?>
