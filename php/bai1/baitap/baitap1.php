<html>
<body>
    <form method="post">
        <input type="text" name="read" placeholder="Nhập số cần đọc"/>
        <input type = "submit" id = "submit" value = "đọc"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $searchSo = $_POST["read"];
        if ( $searchSo < 10 && $searchSo > 0) {
            $hangDonVi= $searchSo;
            switch ($hangDonVi) {
                case 1:
                echo "one";
                break;
                case 2:
                echo "two";
                break;
                case 3:
                echo "three";
                break;
                case 4:
                echo "four";
                break;
                case 5:
                echo "five";
                break;
                case 6:
                echo "six";
                break;
                case 7:
                echo "seven";
                break;
                case 8:
                echo "eight";
                break;
                case 9:
                echo "nine";
                break;
            }
        }
        if ($searchSo < 20 && $searchSo >= 10) {
            switch ($searchSo){
                case 10:
                echo "ten";
                break;
                case 11:
                echo "eleven";
                break;
                case 12:
                echo "twelve";
                break;
                case 13:
                echo "thirdteen";
                break;
                case 14:
                echo "fourtteen";
                break;
                case 15:
                echo "fifteen";
                break;
                case 16:
                echo "sixteen";
                break;
                case 17:
                echo "seventeen";
                break;
                case 18:
                echo "eightteen";
                break;
                case 19:
                echo "nineteen";
                break;
            }            
        }
        /*if ($searchSo >= 20 && $searchSo < 100) {
            $hangChuc= substr($searchSo,2,1);
            $hangDonVi= substr($searchSo,1);
            switch ($hangChuc,$hangDonVi) {
                case 2:
                echo "twenty"."one";
                break;
                case 3:
                echo "thirdty";
                break;
                case 4:
                echo "forty";
                break;
                case 5:
                echo "fifty";
                break;
                case 6:
                echo "sixty";
                break;
                case 7:
                echo "seventy";
                break;
                case 8:
                echo "eighty";
                break;
                case 9:
                echo "ninety";
                break;
            }
            switch ($hangDonVi) {
                case 1:
                echo "one";
                break;
                case 2:
                echo "two";
                break;
                case 3:
                echo "three";
                break;
                case 4:
                echo "four";
                break;
                case 5:
                echo "five";
                break;
                case 6:
                echo "six";
                break;
                case 7:
                echo "seven";
                break;
                case 8:
                echo "eight";
                break;
                case 9:
                echo "nine";
                break;
            }
        }*/
    }
    ?>
</body>
</html>