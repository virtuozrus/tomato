# Запросы для БД

```sql
INSERT INTO clients (fio,date,passport,mobile,address,email,target) VALUES ('Чебуречный автомат', '1999-12-12', '1223 123123', '89993331155', 'поселок Чебуреков, улица бигмаков дом www', 'kopkop@mail.ru', 'client');
```
```sql
ALTER TABLE `greenway_db` . `clients` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
```
```sql
CREATE TABLE clients (id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fio varchar(255), date DATE, passport varchar(255), mobile varchar(255), address varchar(255), email varchar(255), target varchar(255));
```
```bash
cp .env.example .env
```
```bash
sudo mysql -u root -p
```