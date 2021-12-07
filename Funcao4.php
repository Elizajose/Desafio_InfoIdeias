<?php
function SequenciaCrescente(array $arr){
	$status = 0;

    for($i=0; $i<count($arr)-1; $i++)
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j]> $arr[$j+1]){
                $temp= $arr[$j+1];
                $arr[$j+1]= $arr[$j];
                $arr[$j]= $temp;
                $status += $j;
            }
        }
    }
    if($status <= 1){
    	return 'true';
    }else{
    	return 'false';
    }
}

echo SequenciaCrescente(array(1, 3, 2, 1));
echo SequenciaCrescente(array(1, 3, 2));
echo SequenciaCrescente(array(1, 2, 1, 2));
echo SequenciaCrescente(array(1, 3, 2, 1));
echo SequenciaCrescente(array(3, 6, 5, 8, 10, 20, 15));
echo SequenciaCrescente(array(1, 1, 2, 3, 4, 4));
echo SequenciaCrescente(array(1, 4, 10, 4, 2));
echo SequenciaCrescente(array(10, 1, 2, 3, 4, 5));
echo SequenciaCrescente(array(1, 1, 1, 2, 3));
echo SequenciaCrescente(array(0, -2, 5, 6));
echo SequenciaCrescente(array(1, 2, 3, 4, 5, 3, 5, 6));
echo SequenciaCrescente(array(40, 50, 60, 10, 20, 30));
echo SequenciaCrescente(array(1, 1));
echo SequenciaCrescente(array(1, 2, 5, 3, 5));
echo SequenciaCrescente(array(1, 2, 5, 5, 5));
echo SequenciaCrescente(array(10, 1, 2, 3, 4, 5, 6, 1));
echo SequenciaCrescente(array(1, 2, 3, 4, 3, 6));
echo SequenciaCrescente(array(1, 2, 3, 4, 99, 5, 6));
echo SequenciaCrescente(array(123, -17, -5, 1, 2, 3, 12, 43, 45));
echo SequenciaCrescente(array(3, 5, 67, 98, 3));
//[1, 3, 2, 1]  false
//[1, 3, 2]  true
//[1, 2, 1, 2]  false
//[3, 6, 5, 8, 10, 20, 15] false
//[1, 1, 2, 3, 4, 4] false
//[1, 4, 10, 4, 2] false
//[10, 1, 2, 3, 4, 5] true
//[1, 1, 1, 2, 3] false
//[0, -2, 5, 6] true
//[1, 2, 3, 4, 5, 3, 5, 6] false
//[40, 50, 60, 10, 20, 30] false
//[1, 1] true
//[1, 2, 5, 3, 5] true
//[1, 2, 5, 5, 5] false
//[10, 1, 2, 3, 4, 5, 6, 1] false
//[1, 2, 3, 4, 3, 6] true
//[1, 2, 3, 4, 99, 5, 6] true
//[123, -17, -5, 1, 2, 3, 12, 43, 45] true
//[3, 5, 67, 98, 3] true