<?php
$TRANSLATIONS = array(
"Feed contains invalid XML" => "Стрічка містить недійсний XML",
"Could not find a feed" => "Не вдалося знайти стрічку",
"Detected feed format is not supported" => "Формат знайденої стрічки не підтримується",
"SSL Certificate is invalid" => "SSL Сертифікат не вірний",
"Website not found" => "Сайт не знайдено",
"More redirects than allowed, aborting" => "Більше перенаправлень ніж дозволено, відміна",
"Bigger than maximum allowed size" => "Більший ніж максимальний розмір",
"Request timed out" => "Вичерпано час на запит",
"Request failed, network connection unavailable!" => "Запит не вдався, немає мережевого з'єднання!",
"Request unauthorized. Are you logged in?" => "Запит не авторизований. Ви увійшли в систему?",
"Request forbidden. Are you an admin?" => "Запит заборонений. Ви дійсно адміністратор?",
"Token expired or app not enabled! Reload the page!" => "Термін дії токена закінчився або програма не задіяна! Перезагрузіть сторінку!",
"Internal server error! Please check your " => "Внутрішня помилка сервера. Будь ласка, перевірте",
"Request failed, ownCloud is in currently " => "Запит не вдався, ownCloud зараз",
"Can not add feed: Exists already" => "Неможливо додати стрічку: вона вже існує",
"Articles without feed" => "Статті без стрічки",
"Can not add folder: Exists already" => "Неможливо додати теку: вона вже існує",
"Use ownCloud cron for updates" => "Використовуйте ownCloud cron для оновлень",
"Disable this if you run a custom updater such as the Python updater included in the app" => "Вимкніть, якщо збираєтеся використовувати інший механізм оновлень, наприклад, Python updater, включений в поставку цього додатка",
"Purge interval" => "Очистити оновлення",
"Minimum amount of seconds after deleted feeds and folders are removed from the database; values below 60 seconds are ignored" => "Мінімальна кількість секунд, після чого видалені стрічки й каталоги будуть видалені з бази даних; значення менш ніж 60 секунд будуе проігноровано",
"Maximum read count per feed" => "Максимальна кількість статей для стрічки",
"Defines the maximum amount of articles that can be read per feed which won't be deleted by the cleanup job; if old articles reappear after being read, increase this value; negative values such as -1 will turn this feature off completely" => "Максимальна кількість статей для кожної стрічки, які не будуть видалені при очищенні; якщо старі статті з'являються знову після прочитання, то збільште це значення; негативні значення, наприклад, -1, повністю вимикають цю функцію.",
"Maximum redirects" => "Максимум перенаправлень",
"How many redirects the feed fetcher should follow" => "Скільки перенаправлень повинен обробляти завантажувач стрічки",
"Maximum feed page size" => "Максимальний розмір сторінки для стрічки",
"Maximum feed size in bytes. If the RSS/Atom page is bigger than this value, the update will be aborted" => "Максимальний розмір стрічки в байтах. Якщо розмір сторінки RSS/Atom більше цього значення, оновлення буде скасовано",
"Feed fetcher timeout" => "Час очікування для завантажувача стрічки",
"Maximum number of seconds to wait for an RSS or Atom feed to load; if it takes longer the update will be aborted" => "Максимальна кількість секунд очікування завантаження стрічки RSS або Atom; якщо оновлення займає більше часу, то воно буде скасовано",
"Explore Service URL" => "URL сервісу дослідження",
"If given, this service's URL will be queried for displaying the feeds in the explore feed section. To fall back to the built in explore service, leave this input empty" => "Якщо зазначено, то URL сервісу опитуватиметься з метою відображення стрічок в секції дослідження. Для повернення до вбудованого сервісу, залиште поле порожнім.",
"Saved" => "Збереженно",
"Ajax cron mode detected! Your feeds will not be updated correctly. It is recommended to either use the operating system cron or a custom updater." => "Виявлена настройка синхронізації по Ajax cron! Ваші новинні стрічки не будуть коректно оновлюватися. Рекомендується використовувати cron операційної системи або власний механізм оновлення.",
"How to set up the operating system cron" => "Як налаштувати cron операційної системи",
"How to set up a custom updater (faster and no possible deadlock) " => "Як налаштувати інший спосіб оновлення (швидше і без ризику взаємного блокування)",
"Subscribe" => "Підписатися",
"Refresh" => "Оновити",
"No articles available" => "Немає доступних статей",
"No unread articles available" => "Немає непрочитаних записів",
"Open website" => "Відкрити веб-сайт",
"Star article" => "Позначити статтю",
"Unstar article" => "Зняти позначку статті",
"Keep article unread" => "Залишити статтю непрочитаною",
"Remove keep article unread" => "Позначити статтю як прочитану",
"by" => "по",
"from" => "З",
"Browser can not play media type" => "Браузер не може відтворити цей тип медіафайлу",
"Download" => "Завантажити",
"Keyboard shortcut" => "Сполучення клавіш",
"Description" => "Опис",
"right" => "праворуч",
"Jump to next article" => "Наступна стаття",
"left" => "лыворуч",
"Jump to previous article" => "Попередня стаття",
"Toggle star article" => "Позначити статтю",
"Star article and jump to next one" => "Позначити статтю та перейти до наступної",
"Toggle keep current article unread" => "Залишити статтю непрочитаною",
"Open article in new tab" => "Відкрити статтю в новій вкладці",
"Toggle expand article in compact view" => "Переключити статтю в компактний режим",
"Load next feed" => "Завантажити наступну стрічку",
"Load previous feed" => "Завантажити попередню стрічку",
"Load next folder" => "Завантажити наступну теку",
"Load previous folder" => "Завантажити попередню теку",
"Scroll to active navigation entry" => "Перехід до обраного елементу",
"Web address" => "Веб адреса",
"Feed exists already!" => "Стрічка вже існує !",
"Folder" => "Папка",
"No folder" => "Немає теки",
"New folder" => "Нова тека",
"Folder name" => "Ім'я теки",
"Go back" => "Повернутися назад",
"Folder exists already!" => "Тека вже існує !",
"New Folder" => "Нова тека",
"Create" => "Створити",
"Explore" => "Дослідити",
"Deleted feed" => "Видалена стрічка",
"Undo delete feed" => "Відмінити видалення стрічки",
"Rename" => "Перейменувати",
"Menu" => "Меню",
"No feed ordering" => "Не вказанио порядок новинних стрічок",
"Reversed feed ordering" => "Зворотний порядок новинної стрічки",
"Normal feed ordering" => "Звичайний порядок новинної стрічки",
"Rename feed" => "Перейменувати стрічку",
"Delete feed" => "Видалити стрічку",
"Mark all articles read" => "Помітити всі статті як прочитані",
"Dismiss" => "Припинити",
"Collapse" => "Згорнути",
"Deleted folder" => "Видалені теки",
"Undo delete folder" => "Відмінити видалення теки",
"Rename folder" => "Переіменувати теку",
"Delete folder" => "Видалити теку",
"Starred" => "Помічені зірочкою",
"Unread articles" => "Непрочитані статті",
"All articles" => "Всі статті",
"Settings" => "Налаштування",
"Keyboard shortcuts" => "Сполучення клавіш",
"Compact view" => "Компактний вигляд",
"Expand articles in compact view when navigating with keyboard shortcuts" => "Відкривати статті в компактному режимі при навігації клавіатурою.",
"Show all articles" => "Показати всі статті",
"Reverse ordering (oldest on top)" => "Зворотний порядок (найстаріші зверху)",
"Disable mark read through scrolling" => "Вимкнути читання поміток при прокрутці",
"Subscriptions (OPML)" => "Підписки (OPML)",
"Import" => "Імпорт",
"Export" => "Експорт",
"Error when importing: file does not contain valid OPML" => "Помилка при імпорті: файл не містить дійсний OPML",
"Unread/Starred Articles" => "Непрочитані/Вибрані статті",
"Error when importing: file does not contain valid JSON" => "Помилка при імпорті: файл не містить дійсний JSON"
);
$PLURAL_FORMS = "nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);";
