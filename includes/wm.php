<?php
    session_start();

    $id = $_GET['id'];
    $title = $_GET['title'];

    if(isset($_SESSION['wm'])) {
        array_push($_SESSION['wm'], $id);
        array_push($_SESSION['wm'], $title);
    } else {
        $_SESSION['wm'] = array();
        array_push($_SESSION['wm'], $id);
        array_push($_SESSION['wm'], $title);
    }
    echo "Dit is WM: ";
    print_r($_SESSION);
    echo "<br /><br />";


    $menuitems = array(
                        0=>array('id'=>1, 'title'=>"broodje kaas"),
                        1=>array('id'=>34, 'title'=>"kroket")
    );

    foreach($menuitems as $key => $row) {
        print_r($row['id']);

        echo $row['title'];
        echo "<a href='wm.php?id=" . $row['id'] . "&title=" . $row['title'] . "'> VOEG TOE </a>";
        echo "<br />";
    }

    foreach($_SESSION['wm'] as $key => $value) {
        print_r($value);
        $sql = "SELECT * FROM tb_menuitems WHERE id=$value";
        print $sql;
        echo "<br />"

;    }