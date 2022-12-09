<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }
    form table{
        width: fit-content;
        margin: auto;
    }
    form td{
        text-align: center;
        padding: 10px;
        border-bottom: 1px solid #EEE;
    }
    form th{
        display: inline-block;
        padding: 10px;
        text-align: left;
        font-weight: normal;
        vertical-align: top;
        width: 100%;
    }
    input.corp ,.q6 ,.q8{
        width: 100%
    }
    textarea{
        width: 100%;
    }
    .buttonwrap{
        text-align:center
    }
    button{
        width: fit-content;
        margin: auto;
        text-align:center
    }
    </style>
</head>

<body>
    <form action="write.php" method="post">
    <table>
        <tr>
            <th class=""><label>企業名</label></th>
            <td><input type="text" name="corp" class="corp"></td>
        </tr>
        <tr>
            <th class=""><label>①今一番困っていること</label></th>
            <td><textarea name="q1" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>②その発生要因〜なぜそれが発生したのか</label></th>
            <td><textarea name="q2" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>③貴社の目指すところ(いつまでにどんな)</label></th>
            <td><textarea name="q3" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>④過去・現在実施していること/その結果</label></th>
            <td><textarea name="q4" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>⑤自社ではやりきれなかった外部人材に依頼したいこと</label></th>
            <td><textarea name="q5" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>⑥いつから解決に着手したいか</label></th>
            <td><input type="text" name="q6" class="q6"></td>
        </tr>
        <tr>
            <th class=""><label>⑦プロのイメージ</label></th>
            <td><textarea name="q7" id="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <th class=""><label>⑧期間/金額</label></th>
            <td><input type="text" name="q8" class="q8"></td>
        </tr>
        </table>
        <div class="buttonwrap">
            <input type="submit" value="送信">
        </div>
    </form>

    <button onclick="cp()">コピー</button>
    
    <script>
        function cp(){
            var txt =document.getElementsByName("q1");
            txt.select();
            document.execCommand("Copy");
        }
    </script>
    
</body>
    
</body>
</html>

