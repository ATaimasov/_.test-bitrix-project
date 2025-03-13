# Битрикс: работа с инфоблоками

## Введение

- задание выполнено на демо-версии «1С-Битрикс «Управление сайтом», редакции Старт.
- сервер был поднят через Docker (<a href="https://github.com/bitrixdock">bitrixdock</a>)
- ядро битрикса не запушено
- сделаны бэкапы БД и файлов в папке backup.

#### Верстка

- резиновая верстка
- некомпилированные файлы фронтенда находятся в папке html. вынесены отдельно (финальный результат интегрирован в битрикс).
- верстку можно посмотреть через деплой на vercel (ссылка прикреплена в github)
- изображения "Виды окон" в html верстке отличаются от того, что в битриксе (в битриксе реализована работа с инфоблоком)

### Задание 1: Изменение шаблона страницы и добавление кастомного меню

#### Цель: Добавить кастомное меню на страницу сайта и изменить её шаблон.

#### Требования к реализации:

- Изменить стандартный шаблон страницы в папке /local/templates.
- Добавить на страницу пользовательское меню с произвольными ссылками.
- Оформить меню с использованием базовых стилей (например, список ссылок в боковой панели или верхнем блоке).
- Настроить меню таким образом, чтобы его можно было изменять через административную панель.

### Задание 2: Адаптивная верстка и работа с инфоблоками

#### Цель: Создать адаптивный блок, который будет выводиться на сайте через инфоблок. Необходимо реализовать возможность редактирования блока через административную панель Битрикс.

#### Требования к реализации:

- Сверстать адаптивный блок по макету.
- Разместить блок в инфоблоке в Битрикс.
- Сделать возможность редактировать контент блока через административную панель Битрикс (через редактирование в инфоблоке).
- Реализовать возможность изменения данных (например, текста, изображений) через административную панель.
- Создать компонент, который будет выводить блок на фронтенде сайта.
- Все элементы в блоке должны быть адаптивными и корректно отображаться на различных устройствах.
- <a href="https://www.figma.com/design/IHs1WVI3gmZGBDi1T6HHOj/Тестовое?node-id=1-199">Ссылка на макет для верстки</a>
