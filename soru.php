<html>
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php
if(isset($_POST['btnGonder'])){
    switch($_POST['kategori_id']) {
        case 1:
            if($_POST['seviye']==1){
                echo 'Osmanlı devlet kurucusu kimdir?';
            }
            if($_POST['seviye']==2){
                echo 'Osmanlı devlet kurucusunun oglu kimdir?';
            }
            if($_POST['seviye']==3){
                echo 'Osmanlı devlet kurucusu torunu kimdir?';
            }
            break;

        case 2;
            if($_POST['seviye']==1){
                echo 'Meb başkanı kimdir';
            }
            if($_POST['seviye']==2){
                echo 'Kant nerede doğmuştur';
            }
            if($_POST['seviye']==3){
                echo 'Kant doktorasını nerede yapmıştır';
            }



            break;

        case 3;
            if($_POST['seviye']==1){
                echo 'Kant kaç yılında doğmuşutur';
            }
            if($_POST['seviye']==2){
                echo 'Kant nerede doğmuştur';
            }
            if($_POST['seviye']==3){
                echo 'Kant doktorasını nerede yapmıştır';
            }
            break;

        case 4;
            echo 'Hata teoreminin fonksiyonel modeli nedir';
            break;

        default;

    }

    echo '<br><br>';


    $platformlar = isset($_POST['sosyal']) ? $_POST['sosyal']: null;
    if(count($platformlar)>0) {
        echo 'Aşağıdaki platformlarda paylaşımı seçtiniz: <br>';

        foreach ($platformlar as $platform) {
            if($platform == 1){
                echo "<br>"."Facebook";
            }
            if($platform == 2){
                echo "<br>"."Twitter";
            }
            if($platform == 3){
                echo "<br>"."Google+";
            }
        }
    }
    if(!isset($_POST['sosyal'])) {
         echo 'Bir paylaşım platform u seçilmemiş.';
    }

}



?>

</body>
</html>