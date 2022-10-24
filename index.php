<style>
    body {
        /*background: #f5f6f8;*/
        background: #dddddd;
    }
    pre {
        display: block;
        padding: 9.5px;
        margin: 5px 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>
<body>
<div style="padding: 50px">

    создать таблицы в БД:
    <pre>vendor/bin/doctrine orm:schema-tool:create</pre>
    обновить таблицы в БД:
    <pre>vendor/bin/doctrine orm:schema-tool:update --force</pre>

    <br><br>

    <a href="/actions/create_user.php">create user</a><br><br>
    <a href="/actions/create_book.php">create book</a> - не забудь, что поле <em>title</em> должно быть уникально<br><br>
    <a href="/actions/native_query.php">native query</a> - выборка из БД методом native query и DQL<br><br>
    <a href="/actions/entity.php">entity</a> - выборка методами самой Doctrine ORM<br><br>
    <a href="/actions/query_builder.php">query_builder</a> - составной запрос<br><br>

    <br><br><hr><br><br>
    <a href="/actions/ds_files_view.php">ds_files_view</a><br><br>
    <a href="/actions/ds_files_create.php">ds_files_create</a><br><br>
    <a href="/actions/ds_ip_add.php">ds_ip_add</a><br><br>
    <a href="/actions/ds_ip.php">ds_ip</a><br><br>

</div>
</body>