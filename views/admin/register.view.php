<form method="post" action="">
    <input type="email" placeholder="Email" name="email" value="<?php echo @$_POST['email'];?>" required/>
    <input type="password" placeholder="Парола" name="password" value="<?php echo @$_POST['password'];?>" required/>
    <input type="password" placeholder="Парола повторно" name="password_repeat" value="<?php echo @$_POST['password_repeat'];?>" required/>    

    <input type="tel" name="captcha" placeholder="Код от изображението" required/>
    <?php echo $content; ?>



    <input type="submit" name="submitter" value="Регистрация"/>
</form>
