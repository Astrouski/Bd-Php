<?php
$login = $_GET ['login'];
$agree = $_GET ['agree'];
$delivery = $_GET ['delivery'];
$pay = $_GET ['pay'];
if ($_GET ['mode']==='edit'|| ['mode']==='new'){
?>
<!DOCTYPE html>
<html>
    <head
</html>
<body>
    <h1>EDIT</h1>
    <form action="">
       <input type ='text' name=login'value='<?php $login;?>
              <input type="checkbox" name='agree'><?php if (!empty($_GET['agree'])){ echo "checked";}?>
       >
       <input type="radio"name="delivery"value='home'<?php if($delivery==='home'){
     echo 'checked';?>
           >
       <input type="radio"name="delivery"value='home'><?php if($delivery==='office'){
     echo 'checked';?>
       <select name="play">
           <option value="1">
               <?php if($pay==='1'){
     echo 'select';?>
               card</option>
            <option value="2"
                    <?php if($pay==='2'){
     echo 'select';?>
                    >cash</option>
       </select>
       <input  type="hidden"name='mode' value="new">
       <input type ='submit' name='sub'value='sent'>
  <  
        
    </form>
</body>
</html>
<?php
} else {   
}
?>
<!DOCTYPE html>
<html>
    <head
</html>
<body>
    <h1>new</h1>
    <form action="">
       <input type ='text' name=login'
       <input type="checkbox" name='agree'>
       <input type="radio"name="delivery"value='home'>
       <input type="radio"name="delivery"value='home'>
       <select name="play">
           <option value="1">card</option>
            <option value="2">card</option>
       </select>
       <input  type="hidden"name='secret' value="12">
       <input type ='submit' name='sub'value='sent'>
  <  
        
    </form>
</body>
 <?php }?>
<a href="form2.pgp?mode=new'>new</a>
<a href="form2.pgp?mode=edit>edit</a>