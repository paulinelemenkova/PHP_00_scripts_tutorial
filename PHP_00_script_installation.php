# Установка Apache, PHP, MySQL в macOS
# Пошаговые упражнения из http://macnotes.ru/post/apache-php-mysql-macos
# мы выполняем утилиту apachectl с правами суперпользователя (так как перед командной мы вводим sudo) и передаем утилите опцию start.
sudo apachectl start
# Теперь можно проверить, что Apache запущен и работает. Для этого откройте браузер и перейдите на страницу: http://localhost. (точка на конце) Откроется страница с надписью «It works!».
http://localhost.
# Файлы localhost'а лежат в директории /Library/WebServer/Documents.
# Установка PHP. Нужно включить его поддержку веб-сервером. Для этого необходимо отредактировать файл конфигурации Apache: /etc/apache2/httpd.conf Для редактирования мы воспользуемся консольным редактором nano.
# В файле необходимо раскомментировать строку, которая отвечает за загрузку модуля php5_module: LoadModule php5_module libexec/apache2/libphp5.so Найдите эту строку в файле и удалите перед строкой символ #. Теперь закройте и сохраните файл. Для этого нажмите Ctr^X, затем Y, затем Enter.
# Так как конфигурация сервера изменилась, необходимо перезапустить сервер, чтобы новые параметры вступили в силу. Для перезапуска Apache выполните в терминале команду:
sudo apachectl restart
# установка MySQL из dmg файла: http://dev.mysql.com/downloads/mysql/
# после установки MySQL:
sudo mkdir /var/mysql
sudo ln -s /tmp/mysql.sock /var/mysql/mysql.sock
sudo apachectl restart
sudo /usr/local/mysql/support-files/mysql.server start
# Мы можем для проверки создать PHP файл, в котором выполним функцию phpinfo(). Для этого можно воспользоваться терминалом. Создадим файл /Library/WebServer/Documents/testfile.php и добавим в него вызов функции phpinfo():
sudo echo "<?php phpinfo();" | sudo tee /Library/WebServer/Documents/testfile.php > /dev/null
#
# Теперь можно открыть файл в браузере, перейдя по адресу: http://localhost/testfile.php
#
# Чтобы проверить, что MySQL сервер работает, и мы можем выполнять действия с базами данных, можно воспользоваться утилитой mysql. Выполните в терминале:
/usr/local/mysql/bin/mysql -u root -p
