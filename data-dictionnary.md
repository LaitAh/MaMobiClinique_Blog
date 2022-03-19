# Data dictionnary

## Authors (`author`)

|Field|Type|Specificities|Description|
|-|-|-|-|
|id|int|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|The author id|
|name|varchar(64)|NOT NULL|The name of the author|
|firstname|varchar(64)|NULL|The firstname of the author|
|email|varchar(255)|NOT NULL, UNIQUE|The email of the author|

## Categories (`category`)

|Field|Type|Specificities|Description|
|-|-|-|-|
|id|int|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|The category id|
|name|varchar(32)|NOT NULL|The name of the category|

## Posts (`post`)

|Field|Type|Specificities|Description|
|-|-|-|-|
|id|int|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|The post id|
|title|varchar(64)|NOT NULL|The title of the post|
|resume|varchar(255)|NOT NULL|The summary of the post|
|content|text|NOT NULL|The content of the post|
|published_date|datetime|NOT NULL, DEFAULT CURRENT_TIMESTAMP|The date of publication of the post|