<fieldset style="width:50%;margin:auto;">
    <legend>
        忘記密碼
    </legend>

        <table>
            <tr>
                <td>請輸入信箱以查詢密碼</td>
            </tr>
            <tr>
                <td><input type="text" name="email" id="email" style="width: 150%;"></td>
            </tr>
            <tr>
                <td id="result"></td>
            </tr>
            <tr>
                <td>
                    <div>您的密碼:</div>
                    <button onclick="search()">尋找</button>
                </td>
            </tr>
        </table>

</fieldset>
<script>

    function search(){
        let email=$('#email').val();
        $.get("./api/forgot.php",{email},(result)=>{
            $("#result").text(result)
        })
    }
</script>