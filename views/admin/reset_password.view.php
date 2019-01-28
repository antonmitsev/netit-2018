<form method="post" action="">
    <input type="email" placeholder="Email" name="email" required/>
 
    <input type="tel" name="captcha" placeholder="Код от изображението" required/>
    <?php echo $content; ?>

    <input type="submit" name="submitter" value="Регистрация"/>
</form>