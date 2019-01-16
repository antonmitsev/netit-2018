<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo @$params['html_title'];?></title>
    <meta name="description" content="<?php echo @$params['html_description']; ?>"/>
</head>
<body>
    <ul>
<?php foreach($params['menus_1'] as $item): ?>
        <li><a href="<?php echo Helpers::menuItemFormat($base_folder , $item['url']); ?>"><?php echo $item['menu_text']; ?></a></li>
<?php endforeach; ?>
    </ul>
<?php echo @$params['page_content']; ?>
</body>
</html>
    