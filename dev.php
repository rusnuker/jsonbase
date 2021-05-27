<html>
<head>
<style>
::-webkit-scrollbar-button {
background-image:url('');
background-repeat:no-repeat;
width:6px;
height:0px
}

::-webkit-scrollbar-track {
background-color:#32312e;
box-shadow:0px 0px 3px #000 inset;
}

::-webkit-scrollbar-thumb {
-webkit-border-radius: 5px;
border-radius: 2px;
background-color:gray;
box-shadow:0px 1px 1px #fff inset;
background-image:url('https://yraaa.ru/_pu/24/59610063.png');
background-position:center;
background-repeat:no-repeat;
}

::-webkit-resizer{
background-image:url('');
background-repeat:no-repeat;
width:7px;
height:0px
}

::-webkit-scrollbar{
width: 11px;
}
</style>
<title> Документация JSONBase Chat API </title>
<meta charset = 'utf-8' />
</head>
<body>
<div style = 'width:250px; height:100%; overflow:auto; background-color:gray; border-radius:10px; border:2px solid black; font-weight:bold; color:#ffe4e1;' >
Отправка сообщения (send.messages)<br>

Данный метод позволяет отправлять сообщение в беседу<br>

Пример:https://jsonbase.tk/send.messages?name=username&chat=own_chat&message=text<br>

Где:<br>

name-ваше имя (имя пользователя);<br>

chat-имя беседы.<br>
message-текст анкеты <br>

Получение сообщений (get.messages)<br>

Позволяет получить сообщения из беседы<br>

Пример:https://jsonbase.tk/get.messages?chat=own_chat<br>

Где:<br>

chat-имя беседы.<br>

Получение списка диалогов (get.dialog)<br>

Данный метод создает колонну списка диалогов<br>

Пример: https://jsonbase.tk/get.dialog?name=username<br>

Где:<br>

name- ваше имя (имя пользователя)<br>

Создание беседы (create.conversation)<br>

Данный метод используется для создания новой беседы<br>

Пример:https://jsonbase.tk/create.conversation?name=username&chat=new_chat<br>

Где:<br>

name-ваше имя (обязательно для создания списка диалогов)<br>
Создание анкеты (create-anket)<br>
Метод создает анкету пользователя (если она уже есть,то редактирует)<br>
Пример:https://jsonbase.tk/create-anket?name=username&anket=it my first text in bot
<br>
Где: <br>
name- Ваше имя (имя пользователя)
anket- Текст анкеты
Получение случайной анкеты (get-anket)
Метод получает случайную анкету из базы данных
(метод без использование get)
</div>
<br>

<a href = 'index'>В главное меню</a><br>
<a href = 'https://vk.com/jsonbase'>Мы в ВК</a>