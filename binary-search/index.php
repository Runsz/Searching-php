<?php   
    function binarySearch($arr, $x) 
    {
        if (count($arr) === 0) return false;

        $low = 0;
        $high = count($arr) - 1; //4

        $save = [];
        
        while ($low <= $high) { 
            $mid = floor(($low + $high) / 2); // 5

            if($arr[$mid] == $x) {
                array_push($save, $arr[$mid]);
            }
            if ($x < $arr[$mid]) {
                $high = $mid -1; 
            }
            else {
                $low = $mid + 1; 
            }
        }
        if (count($save) != 0) {
            return $save;
        }
        else{
            return false;
        }
    } 
    
    $arr = array(3,2,5,4,1,9,7,8,5,7,3,5); 
    sort($arr);//urutkan dulu
    var_dump($arr);
    $key = 5;

    $result = binarySearch($arr, $key);

    if( $result != false) { 
        for ($i=0; $i < count($result); $i++) { 
            echo "-".$result[$i]."<br>";
        }
    }
    else {
        echo $key." tidak ditemukan"; 
    } 
?> 