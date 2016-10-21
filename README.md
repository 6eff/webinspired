# webinspired
##### *использовалось:*
- Postgres sql
- Php
- Easyui

##### *для работы:*
- создать бд `webinspired_test` c полями id, name, category, description, price
- клонировать репо
- перейти в клонированную папку
- `php S` чтобы запустить сервер

#### формат базы (первое задание) для продуктов в категориях и с вложениями:


id| name |parent_id
:---:|:---:|:---:
1 | cat1 |NULL
2|cat2|NULL
3|cat3|NULL
4|sub1|1
5|sub2|2
6|sub3|3
7|subsub1|4
8|subsub2|5
9|subsub3|6
10|item1|7
11|item2|8
12|item3|9

