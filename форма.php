<html>
<head>
<style>
.tableheader {
    background-color: #CCC;
    color:white;
    font-weight:bold;

}
.tablerow {
    background-color: #f9f9f9;
    color: #333;
}
.message {
    color: #FF0000;
    font-weight: bold;
    text-align: center;
    width: 100%;
    padding: 10;
}

</style>
</head>
<body dir="rtl">
<div align="center" class="message"><?php if(isset($message)) echo $message; ?></div>
<form name="registrationform" method="post" action="" style="direction: ltr">

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Registration Form</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="input1" value="<?php if(isset($_POST['input1'])) echo $_POST['input1']; ?>"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="input2" value="<?php if(isset($_POST['input2'])) echo $_POST['input2']; ?>"></td>
</tr>


<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>