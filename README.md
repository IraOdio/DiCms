### <p align="center"> Техническое задание приложения - "DiCms - Example app for study" </p>

#### <p align="center"> Пользовательская история </p>

Я как "Заказчик" хочу:
- На публичной части:
  - Страницы:
    - Главная по маршруту - "/"
      - на главной разместить функционал новостной ленты
    - Список элементов - "/list_elements"
      - С фильтрами по разным свойствам
      - Возможность добавлять элемент в корзину
      - Момент
    - Карточка элемента - "/list_elements/id_element"
    - Корзина элементов - "/my_elements"
    - О нас - "/about"
    - Профиль - "/profile"
    - Авторизация - "/auth"
    - Регистрация - "/register"
    - Интерактивная страница с чатом - "/interactive"
  - Функционал:
    - Чат
    - Авторизация
    - Регистрация
    - Новости
    - Подписки
  - Функционал:
- На приватной части:
  - Административную панель - "/pv/admin"
    - Функционал:
      - Добавление новостей
      - Добавление элементов в список
      - Просмотр зарегистрированных пользователей за заданный промежуток времени
      - Просмотр авторизированных пользователей за заданный промежуток времени
      - Просмотр посещений за заданный промежуток времени
    - Функционал:
  - Административную панель
- Пункт 3
- Пункт Н


Я как "Пользователь" хочу:
- Пункт 1
- Пункт 2
- Пункт 2
- Пункт 3



Я как "Разработчик" хочу:
- Архитектура чата следующим образом:
  - Вебсокеты на nodejs
  - Бэк на nodejs должен использоваться исключительно в роли транспорта, т.е. отображения сообщении в реал-тайме
  - Отправка сообщении из браузера, история сообщении должна обрабатываться бэком на пхп
  - При отправке сообщения из браузера на бэк пхп, сам бэк пхп должен пинать ноду для отображения сообщения в чате
  - Пункт
- Архитектура бизнес-слоя "BusinessLayout"
  - ZeroLayout - является ядром бизнес-слоя,сильно отличается от любого другого слоя и имеет другие правила, в своем наличии имеет:
    - Абстрактный класс компонента
  - SomeLayout (любой другой слой) - каждый слой имеет в своем наличии:
    - Класс-компонент являющийся наследником абстрактного класса компонента, является фасадом всего слоя, через который идет общеение со всем слоем
    - Класс-компонент являющийся наследником абстрактного класса компонента
- Пункт 2


#### <p align="center"> Структура проекта </p>

