<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> </title>
  <link rel="stylesheet" type="text/css" href="style.css">

  
 </head>
 <body>
 <?php 
session_start();
header('Content-type:text/html;charset=utf-8');  
if (isset($_POST["button"])) 
{
$name=($_POST["name"]);
$Email=($_POST["Email"]);
$masage=($_POST["masage"]);
$kapcha=($_POST["kapcha"]);


if (strlen($masage)<10) {   
  $result =1; 


}  
else {
$masage=($_POST["masage"]);
  
}
 

if (filter_var($Email, FILTER_VALIDATE_EMAIL))
{   
   $Email=($_POST["Email"]);

  
}
else {
  $bag=3;
}
if ($kapcha==$_SESSION["code_rand"]){
  $k=1;
}
else{
  $b=2;
}

if (!isset($result ) &&  (!isset($bag))&& (!isset($b))){
    $subject="Masage in my syte";
    $headers="From: $Email\r\nContent-type:text/plain;charset=utf-8";
    mail("nikitoss.9@yandex.ua", $subject, $masage,$headers);
    $not_error =1;
}
     
  }

  
$answer='';


if ($result==1){
  $answer='Корткое ';
}
if ($not_error ==1){  
$go = ' Письмо отправлено ';
}
if($bag==3)
  {$and ='Ошибка Email';
}
if($b==2)
{ $a='Ошибка капчи';

}


    
  
?>    
       
<table >
    <tr  >
        <td class="aa" > 
    <form  id="fforms" method="post"> 
    <h2 > Форма обратной связи </h2> 
    <h4>Напишите нам свое сообщение </h4> 
<table class="as"   >
   <tr> 
       <td  class="td">Имя</td> 
       <td><input type="text" name="name" required  placeholder ="Ваcя" class="pole"> </td> 
   </tr>
    <tr>   
    <td class="td" >Email </td> 
    <td> <input type="email" name="Email"  size = "50" required placeholder ="email@dog.com " class="pole"></td><td class="vivod"><?php echo $and; ?> </td> 
        </tr>  
       <tr>
        <td class="td" >Сообщение</td>
        <td><textarea name ="masage" class="pole11" placeholder ="Тра-ля-ля" ></textarea></td><td class="vivod"><?php echo $answer;?></td>
        </tr>   
        <tr><td></td>
        <td><img  src="capcha.php" > </td>
        </tr>
        <tr>
          <td class="td">Введите код</td>   
        <td><input type="text" name = "kapcha"  class="pole" ></td><td class="vivod"><?php echo $a;?> </td>
         </tr>
         <tr><td></td>   
    <td  ><input type="submit"  name ="button" value ="Отправить" class = "subm" >
        </td> 
        </tr> 
        <tr><td></td> <td class="vivod"> <?php echo $go;  ?> </td></tr>
 </table>   
            </form> </td> 
            
        </tr><div>
</table>     
  


  




 </body>
</html>       