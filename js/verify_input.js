(function(){
    let user_name = document.getElementById('user_name');
    let user_warn = document.getElementById('user_warn');
    let password = document.getElementById('password');
    let password_warn = document.getElementById('password_warn');
    let password_confirm = document.getElementById('password_confirm');
    let confirm_warn = document.getElementById('confirm_warn');
    user_name.onblur = ()=>{
        if(!/^\w{6,12}$/.test(user_name.value)){
            user_warn.innerText="格式错误，用户名长度6-12";
            user_warn.style.color = 'red';
        }
        else{
            user_warn.innerText = '输入正确';
            user_warn.style.color = "rgb(7, 109, 122)";
        }
    }
    password.onblur = ()=>{
        if(!/^[0-9a-zA-Z]{6,12}$/.test(password.value)){
            password_warn.innerText="格式错误，密码长度6-12，字母和数字的组合";
            password_warn.style.color = 'red';
        }
        else{
            password_warn.innerText="输入正确";
            password_warn.style.color = 'rgb(7, 109, 122)';
        }
    }
    password_confirm.onblur = ()=>{
        if(password.value!=password_confirm.value){
            confirm_warn.innerText="两次密码输入不一致";
            confirm_warn.style.color = 'red';
        }
        else{
            confirm_warn.innerText = '输入正确';
            confirm_warn.style.color = "rgb(7, 109, 122)";
        }
    }

})()
