<fieldset style="width:60%;margin:auto;">
    
    <legend>
        會員註冊
        <div style="color: red;">*請設定您要註冊的帳好及密碼(最長12個字元)</div>
    </legend>
   
        <table>
        <tr>
        
            <td>Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Step4:信箱(忘記密碼使用)</td>
            <td><input type="text" name="email" id="email" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="reg()">註冊</button>
                <button type="button" onclick="$('#acc,$pw,,$pw2,#email').val('')">清除</button>
            </td>
            <td></td> </tr>
            <!-- <td>
                <a href="?do=forgot">忘記密碼</a>
                <a href="?do=reg">尚未註冊</a>
            </td> -->
        </tr>
        </table>
  
</fieldset>
<script>
    function reg(){
        let user={
            'acc':$("#acc").val(),
            'pw':$("#pw").val(),
            'pw2':$("#pw2").val(),
            'email':$("#email").val(),
        }
        if(user.acc=="" || user.pw==""||user.pw2==""|| user.email==""){
        alert("不可空白");
        }else if (user.pw !=user.pw2){
            alert("密碼錯誤");
        }else {
            $.get("api/chk_acc.php",user,(res)=>{
                if(parseInt(res)>0){
                    alert("帳號重複");
                }else{
                    $.post("api/reg.php",user,()=>{
                        alert("註冊成功，歡迎加入")
                           location.href='?do=login'
                    })
                }
            })

        }
    }
</script>