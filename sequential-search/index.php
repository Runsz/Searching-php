<?php
    function sequentialSearch($arr, $key){
        $save = [];
        for ($i=0; $i < count($arr); $i++) {
            if (strtolower($arr[$i]) == strtolower($key)) {
                array_push($save, $arr[$i]);
            }
        }
        if (count($save) != 0) {
            return $save;
        }
        else{
            return false;
        }
    }

    $arr = ["arun","putra","rozi","Inggil","ilyas","inggil"];
    $key = "inggil";

    $result = sequentialSearch($arr, $key);

    echo 'kata kunci : '.$key.'<br>';
    echo 'Hasil Search : <br>';
    if ($result != false) {
        for ($i=0; $i < count($result); $i++) {
            echo "-".$result[$i]."<br>";
        }
    }
    else{
        echo 'data tidak ditemukan';
    }
?>