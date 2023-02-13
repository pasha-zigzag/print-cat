# Рисовальщик котиков

Умеет рисовать разных котиков

## Требования

- PHP 7.1

## Установка

```bash
$ composer require pasha-zigzag/print-cat
```

## Использование

```php
<?php
$processor = new PrintCat();
echo $processor->printRandom();
```