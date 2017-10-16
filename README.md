# PROJECT SETUP PROCESS 

1. login to your phpmyadmin
2. go to sql
3. paste the bellow code to create the data table
```sql

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `current_subject` varchar(50) NOT NULL,
  `current_level` int(1) NOT NULL,
  `current_tearm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  `depertment` varchar(60) NOT NULL,
  `level` int(2) NOT NULL,
  `tearm` int(2) NOT NULL,
  `courseCode` varchar(40) NOT NULL,
  `courseName` varchar(150) NOT NULL,
  `courseCredit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE IF NOT EXISTS `depertments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  `depertment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE IF NOT EXISTS `universitys` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

```
4. download project file and unzip it into your server root directory (htdocs Or www)
5. go to include/
6. Open db_config.php file and edit as your serve host,user,password and database name
7. You are Done.

## Go to your browser and enter your website . You Will Find yourself Live.

# Thanks for using this project.

### If you need any help then feel free to contact with me at

Facebook 	: www.facebook.com/mdmortuza.hossain/
Email 		: mortuzahossain1997@gmail.com

I would love to help you if i can.