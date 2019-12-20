<html>
    <title>Form oop</title>
    <body>
        <div style="text-align: center;color:#CD5C5C">
        <form method="GET">
            MyForm<input value="" type="text"name="name"size="22">
            <br>
            Chexbox<input type="checkbox" name='agree'>
            <br>
           login<input value="" type="text"name="login">
            <br>
            вывести <input type="submit"value="send">
            <br>
            <input type="reset" value="clear" onclick="clearform()">
            <br>
        </form>
    </body>
</html>
<?php
class MyForm1 extends text {
    public function MyForm(){
        if (isset($_GET['name'])){
            echo "<h1>---".($_GET['name'])."---</h1>";
               $this->login();
        }
    }
}

class text{
  public function login(){
        if (isset($_GET['login'])){
            echo "<h2>".($_GET['login'])."</h2>";
        }
    }
}
class Checkbox{
  public function checkbox(){
        if (isset($_GET['agree'])){
            echo "<h3>".($_GET['agree'])."</h3>";
        }
    }
}
class close{
  public function clearform(){
     echo '</form>';
  }
}

$class = new MyForm1();
$class->MyForm();
$a = new Checkbox();
$a->checkbox();
$class->login();
?>