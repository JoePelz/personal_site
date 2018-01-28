<br /><hr /><br />
<?php
$listing = "";
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && (substr($file, strrpos($file, ".") + 1) == "xsicompound" || substr($file, strrpos($file, ".") + 1) == "zip" || substr($file, strrpos($file, ".") + 1) == "xsirtcompound") ) {
            #$page_name=substr($file, 0, strpos($file, "."));
			$page_name=$file;
			$listing = "<a class='pLink' href='$page_name'>$page_name</a><br />" . $listing;
        }
    }
	echo $listing;
}
closedir($handle);
?>
<br />&nbsp;<hr />&nbsp;<br />