<?php
$content = $contentobj->getContent($_GET['page']);
if($_GET['page']==4)
{
    pifagor(9,9);
}
else{
    echo $content['content'];
}
