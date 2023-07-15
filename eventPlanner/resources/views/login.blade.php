<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <div class="form-box">
                <h1 style="text-align=center; color:#fff;">Enter your Data</h1> 
                     <form id="login" class="input-group-login" method="POST" action="/store">
                         @csrf
                        <input type="email" name="email" class="input-feild" placeholder="Email ID" required>
                        <input type="password"  name="password" class="input-feild" placeholder="Enter Password" required>
                        <input type="checkbox" name="checkbox" class="check-box"><span>Remember Password</span>
                        <input type="submit" name="login" class="submit-btn" value="Login">
                      </form>
            </div>
</body>
<style>
    .form-box{
      width:380px;
      height: 480px;  
      position:relative;
      margin:2% auto;
      background:#233047;
      padding: 10px;
      overflow: hidden;
    }
    .button-box{
      width: 220px;
      margin:35px auto;
      position:relative;
      box-shadow: 0 0 20px 9px #6efdc41f;
      border-radius: 30px;
    }
    #btn{
      top:0;
      left:0;
      position:absolute;
      width:110px;
      height:100%;
      background:#3BBA9C;
      border-radius: 30px;
      transition: 0.5s;
    }
    .input-group-login{
      top:150px;
      position:absolute;
      width:280px;
      transition: .5s;
    }
    .input-group-register{
      top:120px;
      position:absolute;
      width:280px;
      transition: .5s;
    }
    .input-feild{
      width:100%;
      padding:10px 0px;
      margin:5px 0;
      border-left:0;
      border-top:0;
      border-right:0;
      border-bottom:1px solid #999;
      outline:none;
      background:transparent;
    }
    .submit-btn
    {
      width:85%;
      padding: 10px 30px;
      cursor: pointer;
      display:block;
      margin: auto;
      background:#3BBA9C;
      border:0;
      outline:none;
      border-radius: 30px;
    }
    .check-box
    {
      margin:30px 10px 34px 0px;
    
    }
    .form-text{
      color:rgb(195, 195, 195);
      font-size:12px ;
      /*bottom:auto;*/
      margin-top: 29px;
      position:absolute;
    }
    #login{
      left:50px;
    }
    #login input{
      color:white;
      font-size: 15;
    }


</style>
</html>