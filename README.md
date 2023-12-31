# Construction Company CMS & API

## Installation

```bash
composer require moonshine/moonshine

php artisan migrate:fresh

php artisan moonshine:user
```
# API
### Получить категории домов
```http request
GET /api/get-category
```
### Ответ 
```
{  "data": [
        {
            "id": 1,
            "name": "Дома из бруса",
            "imgSrc": "images/category/jX4XlcyOAmaBUFDpSdktLfwmQqAVh951SchWTwEX.png"
        },
        {
            "id": 2,
            "name": "Бани из бруса",
            "imgSrc": "images/category/jdWCBk2H6aGPrhVVVtelMWpE5WWQXzBuSEMUGXTH.png"
        },
        {
            "id": 3,
            "name": "Каркасные дома",
            "imgSrc": "images/category/vq8L2hwZnDR6IGdXo2DKybUGFJJQRRIrDQLjtTPm.png"
        },
        {
            "id": 4,
            "name": "Перевозные бани",
            "imgSrc": "images/category/YXBjUQHt8nVVXtQhVYmU0IMMuH9rMJbJ1RAMMpUB.png"
        }
    ]
}
```
### Получить проекты в конкретной категории
```http request
GET /api/project/{id_category}
```
### Ответ
```
{
    "data": [
        {
            "id": 1,
            "idCategory": 1,
            "projectName": "R-1",
            "imgSrc": "images/houses/UcsRGTN2CBkG2QGrW3A4Z7kVuihRvN9Q4TqBv497.jpg",
            "s": 115,
            "size": {
                "width": 10,
                "height": 13
            },
            "bedroom": 2,
            "bathroom": 1,
            "minprice": "4995000.00"
        },
        {
            "id": 2,
            "idCategory": 1,
            "projectName": "R-12",
            "imgSrc": "images/houses/yX4XpOox1PXOySrS3U8KWjrbWtON3Gx3kJ5MjBYR.jpg",
            "s": 24,
            "size": {
                "width": 10,
                "height": 13
            },
            "bedroom": 1,
            "bathroom": 1,
            "minprice": "4995000.00"
        }
    ]
}
```

### Получить конкретный дом
```http request
GET /api/house/{id_project}
```
### Ответ
```
{
    "data": {
        "id": 1,
        "idCategory": 1,
        "projectName": "R-1",
        "images": [
            "images/houses/UcsRGTN2CBkG2QGrW3A4Z7kVuihRvN9Q4TqBv497.jpg",
            "images/houses/Tb2tA3BnOLMb5zLbYgjumnSKu6Igcmia8tB0QZOE.jpg",
            "images/houses/YoLfovDmOt7bRQq0wEv8IyWqn9XSTECe7OjEfHsY.jpg"
        ],
        "s": 115,
        "size": {
            "width": 10,
            "height": 13
        },
        "bedroom": 2,
        "bathroom": 1,
        "minprice": "4995000.00",
        "promoID": null,
        "mansarda": 1,
        "floor": 1,
        "constructionPeriod": "12-14 дней",
        "sizeOnPlan": "7-8 м.",
        "complects": {
            "fullConstruction": [
                "Высота: 1 этаж 235 м. (17 венцов бруса). Мансардный этаж: 23 м.",
                "Основание: Усиленное — Брус 150х150(h) мм.",
                "Половые лаги: Усиленные — Брус 100х150(h) мм. Шаг лаг 06 м.",
                "Черновой пол: Бруски 40х50 мм. Доска (обрезная) 100х20мм.",
                "Чистовой пол: Шпунтованная доска толщиной 36 мм.",
                "Стены: Профилированный брус 95х145(h) мм. 145х145(h) мм. или 190х145(h) мм. в зависимости от выбранной толщины. Брус атмосферной сушки. Возможен выбор тип бруса: прямой или полуовал.",
                "Перегородки 1-эт.: Профилированный брус 95х145(h) мм. Впиливаются в несущие стены. Брус атмосферной сушки.",
                "Межвенцовый утеплитель: Льноджутовое полотно толщиной 5 мм. Ширина согласно выбранной толщине бруса.",
                "Сборка угла: Тёплый угол.",
                "Сборка сруба: Металлический нагель (гвозди 200 мм).",
                "Утепление: Пол межэтажное перекрытие мансарда утепляются минеральной рулонной ватой «Кнауф» (или его аналог) толщиной в 100 мм.",
                "Пароизоляция: «Изоспан» (или его аналог). Монтируется с двух сторон утеплителя.",
                "Межэтажное перекрытие: Брус 40х150(h) мм. С шагом 06 м.",
                "Каркас мансарды: Брус 40х150(h) мм.",
                "Перегородки 2-эт.: Каркасные. Брус 40х100 мм. ",
                "Внутренняя отделка: Сухая вагонка хвойных пород толщиной 14-16 мм. Плинтус 35-40 мм.– пол потолок и углы стен объекта. Профилированный брус не обшивается т.к. строганный и не требует отделки.",
                "Стропила и обрешетка: Стропила изготавливаются из бруса 40х150(h) мм. Обрешетка: доска (обрезная) 100х20 мм.",
                "Фронтоны углы и поднебесники: Вагонка хвойных пород толщиной 14-16 мм.",
                "Высота конька: 33-35 м.",
                "Кровля: Волнистый лист – ондулин. Цвет по выбору: красный коричневый зеленый.",
                "Окна: деревянные — 10х12(h) м. с двойным остеклением одностворчатые. С фурнитурой.",
                "Двери: Входная: металлическая — 205х08 м. Межкомнатные: деревянные филенчатые — 205х08 м. С фурнитурой.",
                "Лестница: Деревянная с перилами и точёными балясинами. Тетива выполняется из бруса 95х145(h) мм. Ступеньки 200х40 мм. Впиливаются в тетиву. Угол наклона шаг и высота ступеней определяется по месту и согласовывается с Заказчиком.",
                "Внутренняя и наружная отделка выполнена оцинкованными гвоздями."
            ],
            "withoutFinishing": [
                "Высота: 1 этаж 235 м. (17 венцов бруса). Мансардный этаж: 23 м.",
                "Основание: Усиленное — Брус 150х150(h) мм.",
                "Половые лаги: Усиленные — Брус 100х150(h) мм. Шаг лаг 06 м.",
                "Черновой пол: Бруски 40х50 мм. Доска (обрезная) 100х20 мм.",
                "Стены: Профилированный брус 95х145(h) мм. 145х145(h) мм. или 190х145(h) мм. в зависимости от выбранной толщины. Брус атмосферной сушки. Возможен выбор тип бруса: прямой или полуовал.",
                "Перегородки 1-эт.: Профилированный брус 95х145(h) мм. Впиливаются в несущие стены. Брус атмосферной сушки.",
                "Межвенцовый утеплитель: Льноджутовое полотно толщиной 5 мм. Ширина согласно выбранной толщине бруса.",
                "Сборка угла: Тёплый угол.",
                "Сборка сруба: Металлический нагель (гвозди 200 мм).",
                "Межэтажное перекрытие: Брус 40х150(h) мм. С шагом 06 м.",
                "Каркас мансарды: Брус 40х150(h) мм.",
                "Стропила и обрешетка: Стропила изготавливаются из бруса 40х150(h) мм. Обрешетка: доска (обрезная) 100х20мм.",
                "Фронтоны углы и поднебесники: Вагонка хвойных пород толщиной 14-16 мм.",
                "Высота конька: 33-35 м.",
                "Кровля: Волнистый лист – ондулин. Цвет по выбору: красный коричневый зеленый.",
                "Наружная отделка выполнена оцинкованными гвоздями."
            ]
        },
        "prices": {
            "fullConstruction": [
                {
                    "sizeId": 1,
                    "price": 998000
                },
                {
                    "sizeId": 2,
                    "price": 1065000
                },
                {
                    "sizeId": 3,
                    "price": 1164000
                }
            ],
            "withoutFinishing": [
                {
                    "sizeId": 4,
                    "price": 998000
                },
                {
                    "sizeId": 5,
                    "price": 1065000
                },
                {
                    "sizeId": 6,
                    "price": 1164000
                }
            ]
        }
    }
}
```

### Добавить "звонок"
```http request
POST /api/add-call
Content-Type: application/json
   {
     "fio": "Test",
     "email": "test@test.com",
     "phone": "+79111111111",
     "comments": "Comments",
   }


```
### Ответ
```
{
    "fio": "Test",
    "email": "test@test.com",
    "phone": "+79111111111",
    "comments": "Comments",
    "is_processed": null,
    "updated_at": "2023-06-22T18:42:21.000000Z",
    "created_at": "2023-06-22T18:42:21.000000Z",
    "id": 3
}
```
### Добавить заказ
```http request
POST /api/add-order
Content-Type: application/json
   {
     "project_id": 2,
     "fio": "Test",
     "email": "test@test.com",
     "phone": "+79111111111",
     "comments": "Comments",
   }


```
### Ответ
```
{
    "project_id": "2",
    "fio": "Test",
    "email": "test@test.com",
    "phone": "+79111111111",
    "comments": "Comments",
    "is_processed": null,
    "updated_at": "2023-06-22T18:42:21.000000Z",
    "created_at": "2023-06-22T18:42:21.000000Z",
    "id": 3
}
```
