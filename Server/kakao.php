<?php

$row = 1;
$z=0;
$data1[][] = "";
$data2[][] = "";
$n=0;#test 에 관한 함수
$q=0;#test2에 관한 함수
$test = $_GET["test"];
#$test ="강희중교수님";
echo $tsst;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
           $data1[$n][$c] =  $data[$c];
        #   echo $data[$n][$c] . "<br />\n";
        #       $z++     
    }

        $n++;
        }
 fclose($handle);
}


#$test = $_GET['test'];

#$test = "";
#for($i=0; $i<=$z;$i++){
#       if($test==$data[$i][1]){
#       echo $data[$i][1];
#       }
#
#}


if($test =="비서실"){
        echo $data2[2][1];
}
if($test =="학사지원팀"){
        echo $data2[6][1];
}
if($test =="입학관리팀"){
        echo $data2[1][1];
}

if($test =="강희중교수님"){
        echo  "(전화번호)@@",$data1[1][1],"@@(이메일)@@",$data1[1][2],"@@(홈페이지)@@",$data1[1][3];
}

if($test =="계희원교수님"){
         echo  "(전화번호)@@",$data1[2][1],"@@(이메일)@@",$data1[2][2],"@@(홈페이지)@@",$data1[2][3];
}

if($test =="권영미교수님"){
         echo  "(전화번호)@@",$data1[3][1],"@@(이메일)@@",$data1[3][2],"@@(홈페이지)@@",$data1[3][3];
}

if($test =="김남윤교수님"){
         echo  "(전화번호)@@",$data1[4][1],"@@(이메일)@@",$data1[1][2],"@@(홈페이지)@@",$data1[4][3];
}
if($test =="김선동교수님"){
         echo  "(전화번호)@@",$data1[5][1],"@@(이메일)@@",$data1[1][2],"@@(홈페이지)@@",$data1[5][3];
}

if($test =="김영웅교수님"){
         echo  "(전화번호)@@",$data1[6][1],"@@(이메일)@@",$data1[6][2],"@@(홈페이지)@@",$data1[6][3];
}

if($test =="김진환교수님"){
         echo  "(전화번호)@@",$data1[7][1],"@@(이메일)@@",$data1[7][2],"@@(홈페이지)@@미등록";
}

if($test =="엄종석교수님"){
         echo  "(전화번호)@@",$data1[8][1],"@@(이메일)@@",$data1[8][2],"@@(홈페이지)@@",$data1[8][3];
}

if($test =="이석기교수님"){
         echo  "(전화번호)@@",$data1[9][1],"@@(이메일)@@",$data1[9][2],"@@(홈페이지)@@미등록";
}

if($test =="이재문교수님"){
         echo  "(전화번호)@@",$data1[10][1],"@@(이메일)@@",$data1[10][2],"@@(홈페이지)@@",$data1[10][3];
}

if($test =="이항찬교수님"){
         echo  "(전화번호)@@",$data1[11][1],"@@(이메일)@@",$data1[11][2],"@@(홈페이지)@@미등록";
}

if($test =="장재영교수님"){
         echo  "(전화번호)@@",$data1[12][1],"@@(이메일)@@",$data1[12][2],"@@(홈페이지)@@",$data1[12][3];
}

if($test =="정인상교수님"){
         echo  "(전화번호)@@",$data1[13][1],"@@(이메일)@@",$data1[13][2],"@@(홈페이지)@@",$data1[13][3];
}

if($test =="정인환교수님"){
         echo  "(전화번호)@@",$data1[14][1],"@@(이메일)@@",$data1[14][2],"@@(홈페이지)@@",$data1[14][3];
}

if($test =="조세홍교수님"){
         echo  "(전화번호)@@",$data1[15][1],"@@(이메일)@@",$data1[15][2],"@@(홈페이지)@@미등록";
}

if($test =="최병수교수님"){
         echo  "(전화번호)@@",$data1[16][1],"@@(이메일)@@",$data1[16][2],"@@(홈페이지)@@",$data1[16][3];
}
if($test =="허준영교수님"){
         echo  "(전화번호)@@",$data1[17][1],"@@(이메일)@@",$data1[17][2],"@@(홈페이지)@@",$data1[17][3];
}

if($test =="황기태교수님"){
         echo  "(전화번호)@@",$data1[18][1],"@@(이메일)@@",$data1[18][2],"@@(홈페이지)@@",$data1[18][3];
}

if($test =="황호영교수님"){
         echo  "(전화번호)@@",$data1[19][1],"@@(이메일)@@",$data1[19][2],"@@(홈페이지)@@미등록";
}






if($test =="강희중교수님e"){
        echo  $data1[1][2];
}

if($test =="계희원교수님e"){
        echo  $data1[2][2];
}

if($test =="권영미교수님e"){
        echo  $data1[3][2];
}

if($test =="김남윤교수님e"){
        echo  $data1[4][2];
}
if($test =="김선동교수님e"){
        echo  $data1[5][2];
}

if($test =="김영웅교수님e"){
        echo  $data1[6][2];
}

if($test =="김진환교수님e"){
        echo  $data1[7][2];
}

if($test =="엄종석교수님e"){
        echo  $data1[8][2];
}

if($test =="이석기교수님e"){
        echo  $data1[9][2];
}

if($test =="이재문교수님e"){
        echo  $data1[10][2];
}

if($test =="이항찬교수님e"){
        echo  $data1[11][2];
}

if($test =="장재영교수님e"){
        echo  $data1[12][2];
}

if($test =="정인상교수님e"){
        echo  $data1[13][2];
}

if($test =="정인환교수님e"){
        echo  $data1[14][2];
}

if($test =="조세홍교수님e"){
        echo  $data1[15][2];
}
if($test =="최병수교수님e"){
        echo  $data1[16][2];
}

if($test =="허준영교수님e"){
        echo  $data1[17][2];
}

if($test =="황기태교수님e"){
        echo  $data1[18][2];
}

if($test =="황호영교수님e"){
        echo  $data1[19][2];
}









?>
