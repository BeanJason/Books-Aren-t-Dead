<?php
if( isset($_POST['Recommend'] ) )
{
    $txt= $_POST['Recommend']. PHP_EOL; 

    file_put_contents('recommend.txt', $txt, FILE_APPEND);
    echo "Been saved to text file";
}
//*foreach(file('recommend.txt') as $line) {
   //* echo $line. "\n";
 //*}
?>