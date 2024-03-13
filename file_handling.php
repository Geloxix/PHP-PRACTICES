<!-- file handling is the ability to read and write files on the server -->
<!-- PHP has a built in function for readind and writing files -->

<?php
    $file = 'utils/credentials.text';

    if (file_exists($file)) {
        //it will read a file it's so obvious
        // echo readfile($file);

        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $contents = 'Marc'. PHP_EOL . 'John'. PHP_EOL .'Jane'. PHP_EOL .'JAMES'. PHP_EOL .'Jasmine'. PHP_EOL;
        fwrite($handle, $contents);
        fclose($handle);
    }
?> 
