<code>composer install</code><br><br>

создать таблицы в БД:<br>
<code>vendor/bin/doctrine orm:schema-tool:create</code><br>
обновить таблицы в БД:<br>
<code>vendor/bin/doctrine orm:schema-tool:update --force</code><br><br>

опции полей, примеры ищи в коде<br>
+ object - конвертирует объект в строку и заносит в БД и наоборот
+ array - тоже самое, ток массив
+ simple_array - если выше для разбиения использовалась сериализация, тот тут только запятая
+ json_array - для разбиения используется json
+ boolean
+ date
+ datetime
+ smallint - Малое целое число. Диапазон со знаком от -32768 до 32767. Диапазон без знака от 0 до 65535.
+ decimal - дробное число<br>
  precision - длина числа<br>
  scale - длина дроби (после запятой)
+ unsigned - только положительные числа
+ default - значение по умолчанию
+ comment - комментарий для текущего поля