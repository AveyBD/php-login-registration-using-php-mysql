Lab Prject

#php Login Signup using mysql

Simple php registration & signin project with mysql.  The  index files is in client folder. I have put those in client server and javascript folder because my faculty told us to follow the structure :/ 
You can simply change it and make is standard . 

Screenshot
![ScreenshotOfIndex](https://raw.githubusercontent.com/AveyBD/php-login-registration-using-php-mysql/master/Screenshot_2019-04-03%20Welcome.png)

#Database
Create a database in phpmyadmin and run the code in SQL. Done
Change config in server/classess/db.php file

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

```
#Demo
Netlify: [Simple Web Project Login Registration With mySQL](https://gallant-blackwell-9e98df.netlify.com/client/ "Simple Web Project Login Registration With mySQL")
