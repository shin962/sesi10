<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js 1</title>
</head>
<body>
    

    <form name="latihan1" onsubmit="return checkform(this)">
        <div> <h3>NIM: </h3><br>
            <input type="text" name="txNIM">
        </div>
        <div> <h3>Jenis Kelamin: </h3><br>
            <input type="radio" name="txJK" value="L">Laki Laki<br>
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div> <h3>Jurusan</h3><br>
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
            </select>
        </div>
        <div> <h3>Hobi: </h3><br>
            <input type="checkbox" name="txGAME" value="1"> Game<br>
            <input type="checkbox" name="txBACA" value="2"> Membaca<br>
            <input type="checkbox" name="txMASAK" value="3"> Memasak
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script type="text/javascript">
        function checkform(frm){
            let form = frm.elements;
            let NIM = form.namedItem("txNIM").value;
            let jk = form.namedItem("txJK").value;
            let jurusan = form.namedItem("txJURUSAN").value;
            let hobi = [
                form.namedItem("txGAME").checked,
                form.namedItem("txBACA").checked,
                form.namedItem("txMASAK").checked

            ];

            console.log("NIM: "+NIM);
            console.log("Jenis Kelamin: "+jk);
            console.log("jurusan: "+jurusan);
            console.log("Hobi: "+hobi);

            return false;

            
        }
    </script>

</body>
</html>