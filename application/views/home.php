<style>
.login-page {
width: 360px;
padding: 10% 0 0;
margin: auto;
}
.form {
position: relative;
z-index: 1;
background: #FFFFFF;
max-width: 360px;
margin: 0 auto 100px;
padding: 45px;
text-align: center;
border-radius: 15px;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
    font-family: sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    border-radius: 15px;
}
.form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #e64415;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #fff;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    border-radius: 15px;
    font-weight: bold;
}
.form button:hover, .form button:active, .form button:focus {
    background: #0a0301;
    font-weight: bold;
}
.form .message {
margin: 15px 0 0;
color: #b3b3b3;
font-size: 12px;
}
.form .message a {
color: #4CAF50;
text-decoration: none;
}
.form .register-form {
display: none;
}
.container {
position: relative;
z-index: 1;
max-width: 300px;
margin: 0 auto;
}
.container:before, .container:after {
content: "";
display: block;
clear: both;
}
.container .info {
margin: 50px auto;
text-align: center;
}
.container .info h1 {
margin: 0 0 15px;
padding: 0;
font-size: 36px;
font-weight: 300;
color: #1a1a1a;
}
.container .info span {
color: #4d4d4d;
font-size: 12px;
}
.container .info span a {
color: #000000;
text-decoration: none;
}
.container .info span .fa {
color: #EF3B3A;
}


</style>

<div class="login-page">
<div class="form">
<form class="register-form" id="register">
  <input type="text" placeholder="user" name="user" required/>
  <input type="password" placeholder="password" name="password" required/>
  <input type="email" placeholder="email address" name="email" required/>
  <button>create</button>
  <p class="message">Already registered? <a href="#">Sign In</a></p>
</form>
<form class="login-form">
  <input type="text" placeholder="username"/>
  <input type="password" placeholder="password"/>
  <button>login</button>
  <p class="message">Not registered? <a href="#">Create an account</a></p>
</form>
</div>
</div>

<script>

$(document).ready(function(){
    //evento em relaçao ao cambio de registro ou logIn
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });


    $(document).on('submit','#register',function(e){
        e.preventDefault();
        var dataRegistro =  $(this).serialize();
        // 
        alert(dataRegistro);
       
       $.ajax({
         url: BASE_URL + 'users/saveUser',
         data: dataRegistro,
         type:'post',
         dataType: 'json',
         async: true,
         success: function(response){
            if(response){
              alert('response IN');
            }
           alert('response out');
         }
       })
    });

})
</script>

