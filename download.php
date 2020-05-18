

<?php
  //echo $serialize_user_arr;  
  $file_name = 'users.csv';
  
  $export_data = unserialize($_POST['export_data']);
                $file = fopen($file_name, "w");

                foreach($export_data as $line){
                    fputcsv($file, $line);
                }
                fclose($file);
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename =" .$file_name);
                header("Content-Type: text/csv; ");
               // header("Pragma: no-cache");
                // header("Expires: 0");

                readfile($file_name);
                unlink($file_name);
              //  echo "Exiting";
                exit();    
 ?>               