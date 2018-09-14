<?php

    $id = $_POST["IdRegion"];
    $cone = mysqli_connect("localhost", "root", "", "misperris");
    $reg = mysqli_query($cone, "select * from ciudad where region_idregion=$id");
    while ($row = mysqli_fetch_array($reg)) {
        echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
    }