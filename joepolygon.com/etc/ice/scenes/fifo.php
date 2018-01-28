<?php
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && substr($file, strrpos($file, ".") + 1) == "scn") {
            #$page_name=substr($file, 0, strpos($file, "."));
			$page_name=$file;
            echo "<a href='$page_name'>$page_name</a><br>";
        }
    }
}
closedir($handle);
?>
