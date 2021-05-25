<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: rgb(7, 109, 122);
            background-color: #D9AFD9;
            background-image: linear-gradient(90deg, #D9AFD9 0%, #97D9E1 100%);
        }

        select,
        textarea,
        input {
            background-color: transparent;
            text-shadow: none;
            border: 0.5px solid #000;
        }

        h2 {
            text-align: center;
        }

        .center_wrap {
            width: 700px;
            margin: 0 auto;
        }

        form p span:first-child {
            display: inline-block;
            width: 80px;
        }

        form p span:nth-child(2) {
            display: inline-block;
            width: 250px;
        }
    </style>
</head>

<body>
    <?php
    $right_color = "red";
    $nameErr = "用户名长度6-12";
    $passwordErr = "请输入密码，长度6-12，字母和数字的组合";
    $confirmErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["user_name"])){
            if (!preg_match("/^\w{6,12}$/", $_POST["user_name"])) {
                $nameErr = "用户名格式错误（长度6-12）";
            } else {
                $nameErr = "用户名输入正确";
            }
            if (!preg_match("/^[0-9a-zA-Z]{6,12}$/", $_POST["password"])) {
                $passwordErr = "密码格式错误（长度6-12，字母和数字的组合）";
            } else {
                $passwordErr = "密码输入正确";
            }
            if(!empty($_POST["password_confirm"])){
                if ($_POST["password"] != $_POST["password_confirm"]) {
                    $confirmErr = "密码两次输入不一致";
                } else {
                    $confirmErr = "输入正确";
                }
            }
        }
    }
    ?>


    <h2>用户注册</h2>
    <div class="center_wrap page-body">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>
                <span>用户名</span>
                <span><input type="text" id="user_name" name="user_name"></span>
                <span id="user_warn"><?php echo $nameErr; ?></span>
            </p>
            <p>
                <span>密码</span>
                <span><input type="password" id="password" name="password"></span>
                <span id="password_warn"><?php echo $passwordErr; ?></span>
            </p>
            <p>
                <span>确认密码</span>
                <span><input type="password" id="password_confirm" name="password_confirm"></span>
                <span id="confirm_warn"><?php echo $confirmErr; ?></span>
            </p>
            <p>
                <span>出生日期</span>
                <span><select name="year" id="year">
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                    </select>
                    <select name="month" id="month">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="date" id="date">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select></span>
                <span></span>
            </p>
            <p>
                <span>性别</span>
                <span><label>
                        <input type="radio" name="sex" value="male">男
                    </label>
                    <label>
                        <input type="radio" name="sex" value="female">女
                    </label></span>
                <span></span>
            </p>
            <p>
                <span>爱好</span>
                <span><label>
                        <input type="checkbox" name="hobby" value="reading">读书
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="music">音乐
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="sports">运动
                    </label></span>
                <span></span>
            </p>
            <p>
                <span>籍贯<i style="color: red;">*</i></span>
                <span><select name="born" id="born">
                        <option value="0" disabled selected>请选择所在的省份</option>
                        <option value="江苏">江苏</option>
                        <option value="浙江">浙江</option>
                        <option value="北京">北京</option>
                    </select></span>
                <span>
                    <select name="city" id="city">
                        <option value="0" disabled selected>请选择所在的城市</option>
                        <option value="苏州">苏州</option>
                        <option value="南京">南京</option>
                        <option value="北京">北京</option>
                    </select>
                </span>
            </p>
            <p>
            <p>
                <span>学历</span>
                <span><select name="edu" id="edu">
                        <option value="大专" selected>大专</option>
                        <option value="本科">本科</option>
                        <option value="硕士">硕士</option>
                        <option value="博士">博士</option>
                    </select></span>
                <span></span>
            </p>
            <p>
                <span>个人简历</span>
                <span><textarea name="CV" id="CV" cols="20" rows="2"></textarea></span>
                <span></span>
            </p>
            <p>
                <span>邮箱：</span>
                <span><input type="text"></span>
                <span>
                    <select name="email_domain" id="email_domain">
                        <option value="163" selected>@163.com网易</option>
                    </select>
                </span>
            </p>
            <p style="text-align: center;">
                <input type="submit" value="提交">
                <input type="reset" value="重置">
            </p>
            </p>
        </form>
    </div>
    <script>
        let user_warn = document.getElementById("user_warn");
        if (user_warn.innerText == "用户名格式错误（长度6-12）") {
            user_warn.style.color = "red";
        } else {
            user_warn.style.color = "rgb(7, 109, 122)";
        }

        let password_warn = document.getElementById("password_warn");
        if (password_warn.innerText == "密码格式错误（长度6-12，字母和数字的组合）") {
            password_warn.style.color = "red";
        } else {
            password_warn.style.color = "rgb(7, 109, 122)";
        }

        let confirm_warn = document.getElementById("confirm_warn");
        if(confirm_warn.innerText == "密码两次输入不一致"){
            confirm_warn.style.color = "red";
        }else{
            confirm_warn.style.color = "rgb(7, 109, 122)";
        }
    </script>
</body>

</html>！