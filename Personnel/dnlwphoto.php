<?php 
require '../Curl/configuration/curlconf.php';

if (isset($_POST['submit'])) {
    
    $get_data = callAPI('GET', 'localhost:3000/photo/liste', false);
    $response = json_decode($get_data, true);

    if ($response["message"] == "Liste des photos visibles") {

        # create new zip object
        $zip = new ZipArchive();

        # create a temp file & open it
        $tmp_file = tempnam('.', '');
        $zip->open($tmp_file, ZipArchive::CREATE);

        for($i = 0; $i<count($response['photos']); $i++){
            # define file array
            $files = array(
                $response['photos'][$i]['URL'],
            );
            # loop through each file
            foreach ($files as $file) {
                # download file
                $download_file = file_get_contents($file);

                #add it to the zip
                $zip->addFromString(basename($file), $download_file);
            }
        }

        # close zip
        $zip->close();

        # send the file to the browser as a download
        header('Content-disposition: attachment; filename="my file.zip"');
        header('Content-type: application/zip');
        readfile($tmp_file);
        unlink($tmp_file);

    }
}
