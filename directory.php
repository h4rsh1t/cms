<?php

    class RD{

        public function directory($dir){
            $this->directory_children($dir);
        }
        public function directory_children($dir){
            $cleanPath = realpath($dir) . DIRECTORY_SEPARATOR;
            $scanDir = scandir($cleanPath);
            $options = "";

            echo "<ul>";
                foreach($scanDir as $file){
                    if ($file == "." || $file == "..") {
                        continue;
                    }

                    echo "<li>";
                    echo  '<a href="download.php?file='.$file.'">'.$file.'</a>';
                    if(is_dir($cleanPath . $file) && is_readable($cleanPath . $file)){
                        $this->directory_children($cleanPath . $file);

                    }
                    echo "</li>";
                }
                echo "</ul>";
        }


    }

    $RD = new RD();
    $RD->directory("notes");



?>

