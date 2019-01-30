<?php
$data='data.txt';
if(file_exists($data))
{
echo file_get_Contents($data);
}
else
{
echo "file does not exists";
}
?>