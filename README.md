# Net IT Web dev project - 2018

## DataBase setup
> CREATE USER 'wd_2018u'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';

> GRANT USAGE ON *.* TO 'wd_2018u'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

> GRANT SELECT, INSERT, UPDATE, DELETE ON `wd\_2018`.* TO 'wd_2018u'@'localhost';

### `user` - User table
- user_id
> CREATE TABLE `wd_2018`.`user` ( `user_id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(64) NOT NULL , `rights` INT NOT NULL DEFAULT '0' , `active` INT NOT NULL DEFAULT '0' , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
- email
- password
- rights
- active

### `page` - Pages table
- page_id
- lang_id
- uri
- html_title
- html_description
- html_keywords
- heading
- content
- active

### `menu` - Menus table
- menu_id
- menu_text
- lang_id
- url
- cat_id
- position
- active

### `lang` - Language table
- lang_id
- slug
- name
- active

## PHP Boilerplate (low level)

### Routing
- .htaccess setup
- Get base folder
- Get URI
- Autoloader
- MVC?

Example:
**address1/address2** (C: default, A: default)
**admin/page_edit** (C: admin, action: page_edit)
**ajax/page_name** (C: ajax, action: page_name)


### Template system

### DataBase management
- Connect
- Escape
- Execute
- Insert -> get insert id

## Project high level

### 
TODO!!! - $title and $description functionalization

### Base functionalities
### Admin part
#### Login
#### Menus
#### Pages

### Backend API (Services)

## Mobile application


