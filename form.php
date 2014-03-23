<html>
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<form action="soru.php" method="POST">
    Lütfen bir soru kategorisi seçiniz.
    <br>
    <select name="kategori_id">
            <option value="1">Tarih</option>
            <option value="2">Genel Kültür</option>
            <option value="3">Felsefe</option>
            <option value="4">Matematik</option>
    </select>
    <br>
    <br>
    Zorluk Seviyesi:
    <br>
    <input id="seviye1" type="radio" name="seviye" value="1"/>
    <label for="seviye1">Kolay</label>

    <input id="seviye2" type="radio" name="seviye" value="2" checked="checked"/>
    <label for="seviye2">Orta</label>

    <input id="seviye3" type="radio" name="seviye" value="3"/>
    <label for="seviye3">Zor</label>
    <br>
    <br>
    Paylaşım seçenekleri:
    <br>
    <input id="feysbuk" type="checkbox" name="sosyal[]" value="1"/>
    <label for="feysbuk">facebook</label>

    <input id="tvitır" type="checkbox" name="sosyal[]" value="2"/>
    <label for="tvitır">Twitter</label>

    <input id="gugıl+"type="checkbox" name="sosyal[]" value="3"/>
    <label for="gugıl+">Google+</label>


    <br>
    <br>
    <button name="btnGonder">Sor Bana</button>


</form>

</body>
</html>