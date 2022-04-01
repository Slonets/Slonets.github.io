<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">    
    <title>Сайт Web-студії "web-DECO" </title>
<script src="js/clock1.js"></script>    
<script type="text/javascript">
function send()
{
    var valid=true;
    var elems=document.forms[0].elements;
    for (var i=0; i<document.forms[0].length;i++)
    {
        if(elems[i].getAttribute('type')=='text' ||
        elems[i].getAttribute('type')=='password' ||
        elems[i].getAttribute('type')=='email')
        {
            if(elems[i].value=='')
            {
                elems[i].style.border='2px solid red';
                valid=false; 
            }
        }
    }
    if(!valid)
    {
        alert('Заповніть всі поля!!!');
        return false;
    }
}
</script>
    <style>
 .shadowtext {
     text-shadow: 1px 2px 3px white, 0 0 1em red;
     color: #210042;
     front-size: 2em;
 }
    </style>
<script>
window.onload=function()
{
    setInterval(clockPainting,1000);
}    
</script>    
</head>
<body background="images/bg.jpd">     
<table border="1" align="center" cellpadding="10">
    <tr>
    <td background="images/bg-3.jpg" colspan="2" height="150" align="right"><front size="5"><h1><class="shadowtext">Сайт web-студії "Web-DECO"</h1></front>
    </tr><tr>
    <td colspan="2"><front size="4"><b>
        <a href="#">Головна</a>&nbsp;&nbsp;
        <a href="#">Фотогалерея</a>&nbsp;&nbsp;
        <a href="#">Телефони</a>&nbsp;&nbsp;
        <a href="#">Статистика</a>&nbsp;&nbsp;
        <a href="#">Зареєстровані</a>&nbsp;&nbsp;
        </b></front>
    </td>
    </tr>
    <tr>
    <td width="30%" valign="top" >
    <center><canvas id="canvas" height="120" width="120"></canvas></center>
    <hr>    
    <front size="5" color="navy"><h2>Новини</h2></front>    
    <front size="5">        
    <ul>
        <li><a href="#">Сайт будівельної компанії </a></li>
        <li><a href="#">Сайт ТМ "Нова школа" </a></li>
        <li><a href="#">Редизайн сайту classno.com.ua </a></li>
        <li><a href="#">Розробка CMS для Metro Cash&Carry </a></li>
        <li><a href="#">Сайт візитка дизайнера інтерфейсів </a></li><br>
        <p aligh="right"<a href="#">інші...</a></p>
       </ul>
    </front>
    <hr>
    <H1 align="center"><front color="green">Реєстрація</front> </H1>
    <form action="forma.php" method="post" onsubmit="return send();">
    <TABLE align="center" bgcolor="#ccc">
    <TR>
    <TD><front color="green"> Прізвище</front>: </TD>
    <TD><input type="text" size="10" maxlength="20" name="name2"></TD>
    </TR>
    <TR>
    <TD><front color="green"> Ім'я </front>: </TD>
    <TD><input type="text" size="10" maxlength="20" name="name1"></TD> 
    </TR>
    <TR>
    <TD><front color="green"> E-mail</front>: </TD>
    <TD><input type="email" size="10" maxlength="20" name="email"></TD>       
    </TR>
    <TR>
    <TD><front color="green"> Пароль </front>: </TD>
    <TD><input type="password" size="10" maxlength="20" name="password"></TD>
    </TR>
    </TABLE>
    <p align="center">
    <input type="submit" value="Зареєструватись"> 
    <input type="reset" value="Очистити"> 
    </p>
    </form>  
    <hr>
    </td>
    <td width="70%">      
    </td>
        </tr>
    <tr>
    <td colspan="2" valign="middle" height="90">
         <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90"> 
     <front size="4">Сайт розробив "Богдан Слонець"</front>   
    </td>
    </tr>
    </table>
 </body>
</html>
