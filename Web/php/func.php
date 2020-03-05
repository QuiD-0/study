<?php function print_list()
{
    $list = scandir('./data');
    $i = 0;
    while ($i < count($list)) {
        if ($list[$i] != '.'&&$list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
        $i +=1;
    }
}

function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    }
}
function print_description()
{
    if (isset($_GET['id'])&&$_GET['id']!='') {
        echo htmlspecialchars(file_get_contents("data/".$_GET['id']));
        echo("<br><br>");
    } else {
        echo file_get_contents("./welcom");
    }
}