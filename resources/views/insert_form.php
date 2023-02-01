<!DOCTYPE html>
<head>
   <title>HSC MARKS</title>
</head>

<body>
    <form action ="/create" method = "post">
        <input type ="hidden" name = "_token" value = "<?php echo csr_token();?>">
        <table>
    <tr>
        <td>SubName</td>
        <td><input type ='text' name ='subject_name'/></td>
    </tr>
    <tr>
</tr>
</table>
</form>
</body>
</html>

