<?php

    echo "รหัสนักศึกษา : ".$sin = $_REQUEST['sid'];
    echo "<br>";
    echo "ชื่อ : ".$fname = $_REQUEST['fname'];
    echo "<br>";
    echo "นามสกุล : ".$lname = $_REQUEST['lname'];
    echo "<br>";
    echo "สาขาวิชา : ".$program = $_REQUEST['program'];
    echo "<br>";
    echo "คณะ : ".$facilty = $_REQUEST['facilty'];
    echo "<br>";
    echo "ปีศึกษา : ".$sid_year = $_REQUEST['sid_year'];
    echo "<br>";
    echo "ชื่อโครงงาน ภาษาไทย : ".$prj_name_th = $_REQUEST['prj_name_th'];
    echo "<br>";
    echo "ชื่อโครงงาน ภาษาอังกฤษ : ".$prj_name_en = $_REQUEST['prj_name_en'];
    echo "<br>";
    echo "ประเภทโครงงาน : ".$prj_type = $_REQUEST['prj_type'];
    echo "<br>";
    $prj_tool = $_REQUEST['prj_tool'];
    echo "เครื่องมือ : ".$show_tool = implode(", ",$prj_tool);
    echo "<br>";
    echo "อาจารย์ที่ปรึกษา : ".$prj_advisor = $_REQUEST['prj_advisor'];
    echo "<br>";