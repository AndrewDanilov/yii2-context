Yii2 context ad
===================
Widgets for context advertising

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-context "~1.0.0"
```

or add

```
"andrewdanilov/yii2-context": "~1.0.0"
```

to the `require` section of your `composer.json` file.


Usage
=====

Google Adsense
-----

Create ad blocks in google adsense control panel. Get data-ad-client and data-ad-slot from block code for each block.
Call widget in your View.

```php
<?= \andrewdanilov\context\adsense\Adsense::widget([
	'client' => 'ca-pub-1234567890123456',
	'slot' => 1234567890,
	'format' => 'auto', // optional, default is 'auto'
	'layout' => 'in-article', // optional
	'fullWidthResponsive' => true, // optional
]); ?>
```

Property `client` is usually the same for all ad blocks. To set it once for all widget instances, you can define
it in DI container config.

```php
return [
	// ...
	'container' => [
		'definitions' => [
			'andrewdanilov\context\adsense\Adsense' => [
				'client' => 'ca-pub-1234567890123456',
			],
		],
	],
	// ...
];
```

Yandex Partner
-----

Call widget in your view

```php
<?= \andrewdanilov\context\yandexpartner\YandexPartner::widget(['set' => 'set1']) ?>
```

Before it can work you need to define sets of ad block codes in DI container definition.

```php
return [
	// ...
	'container' => [
		'definitions' => [
			'frontend\widgets\yandexpartner\YandexPartner' => [
				'blocks' => [
					'set1' => ['R-A-123456-1', 'R-A-123456-2', 'R-A-123456-3'],
					'set2' => ['R-A-111111-2', 'R-A-111111-3'],
					'set3' => ['R-A-111111-1'],
				],
			],
		],
		'singletons' => [
			'YandexPartnerStore' => [
				'class' => 'frontend\widgets\yandexpartner\YandexPartnerStore'
			],
		],
	],
];
```

Where `set1`, `set2`, `set3` is sets of blocks, from which widget will be randomly pick block IDs to render
corresponded block code. Once used block from set will never be used again on the same page, to avoid doubles. So you
can just point the particular set and block will be choosed automatically. That's usefull when you need to out ad blocks
with cycle code.

Singleton `YandexPartnerStore` needs to store information about already used block codes. You should not use it in your
project direcly, just configure it.