<?php
 function kelulusan($_nilai) {
    if ($_nilai > 150 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
    
        function grade($_nilai) {
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 49) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = 49.  <br> Keterangan = NANGIS KAU NANGIS. ';
            } else if ($nilai1 >= 50 && $nilai1 <= 59) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = 59.  <br> Keterangan = SAKIT TAPI TAK BERDARAH. ';
            } else if ($nilai1 >= 60 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = 69.  <br> Keterangan = PAS-PASAN TEROS. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = 79.  <br> Keterangan = MAYAN LAH. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = 100.  <br> Keterangan = MANTAP KALI KAU. ';
            } 
    }
        function predikat($_grade)
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 49) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E.  <br> Keterangan = NANGIS KAU NANGIS. ';
            } else if ($nilai1 >= 50 && $nilai1 <= 59) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> Keterangan = SAKIT TAPI TAK BERDARAH. ';
            } else if ($nilai1 >= 60 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = PAS-PASAN TEROS. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = MAYAN LAH. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = MANTAP KALI KAU. ';
            } 
    {
    
    }
}



