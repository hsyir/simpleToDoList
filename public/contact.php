<?php

require("../loader.php");

loadModel("Message");

$message = new Message;

if(isset($_POST["action"]) and $_POST["action"]=="insert" )
{
    $message->insert();
    redirect("/contact.php");
}
$messages = $message->getAll();
pageHeader("تماس با ما");
?>
    <form action="/contact.php" method="post">
        <input type="hidden" name="action" value="insert">
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <br>
        <input type="text" name="sender" >
        <br>
        <button type="submit">ارسال</button>
    </form>
    
<table border="1" width="100%">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($messages)) {?>
            <tr>
                <td><?php echo $row["sender"] ?></td>
                <td><?php echo $row["text"] ?></td>
            </tr>
            <?php } ?>
    </tbody>
</table>


<?php


pageFooter();
