# Setup

## Install
```
npm install
```
## start api on local
```
php artisan serve
```
## ! Important !
Might need to enable php_intl.dll in php.ini, due to NumberFormatter();
Example:
```
;extension=php_intl.dll --> extension=php_intl.dll
```
## seed
```
php artisan migrate:fresh --seed
```
## No Save to DB
comment line 177 in SkuDataController.php "$skuData->save();"

# Endpoints

## POST 
/api/sku - post array of sku (adds to cache and db if record doesn't exist in cache/db).
req.body 
```
{
    "sku": [668902, 476086, 534211]
}
```
example of responses:
```
[
	{
		"id": 1,
		"sku": 668902,
		"vat": 25,
		"priceExcVat": 397,
		"priceIncVat": 496.25,
		"priceExcVatFormatted": "397,00 kr",
		"priceIncVatFormatted": "496,25 kr",
		"created_at": "2022-12-18T15:52:33.000000Z",
		"updated_at": "2022-12-18T18:30:21.000000Z"
	},
	{
		"id": 16,
		"sku": 476086,
		"vat": 25,
		"priceExcVat": 796,
		"priceIncVat": 995,
		"priceExcVatFormatted": "796,00 kr",
		"priceIncVatFormatted": "995,00 kr",
		"created_at": "2022-12-18T15:52:33.000000Z",
		"updated_at": "2022-12-18T18:30:21.000000Z"
	},
	{
		"id": 9,
		"sku": 534211,
		"vat": 25,
		"priceExcVat": 981,
		"priceIncVat": 1226.25,
		"priceExcVatFormatted": "981,00 kr",
		"priceIncVatFormatted": "1 226,25 kr",
		"created_at": "2022-12-18T15:52:33.000000Z",
		"updated_at": "2022-12-18T18:30:21.000000Z"
	}
]
```

## GET 

```/api/customer/{id}```
get a single customer

```/api/customer/{id}/orders```
get all orders from a customer

```/api/customer/{id}/order/{order_id}```
get a single order from a customer

```/api/product/{id}```
get a specific Product

```/api/product/{id}/ver```
get a specific products version data

```/api/product/{id}/lang```
get a specific products active languages

```/api/product/{id}/all```
get all data from a specific product

sample response data:
```
{
	"product": {
		"id": 4,
		"sku": [
			{
				"product_id": 4,
				"sku": 364716,
				"vat": 25,
				"priceExcVat": 411,
				"priceIncVat": 513.75,
				"priceExcVatFormatted": "411,00 kr",
				"priceIncVatFormatted": "513,75 kr",
				"created_at": "2023-01-16T12:49:07.000000Z",
				"updated_at": "2023-01-16T12:49:07.000000Z"
			}
		],
		"created_at": "2023-01-16T12:49:07.000000Z",
		"updated_at": "2023-01-16T12:49:07.000000Z"
	},
	"product_versions": [
		{
			"id": 10,
			"product_id": 4,
			"language_id": 95,
			"version": 2,
			"is_active": 1,
			"created_at": "2023-01-16T12:49:07.000000Z",
			"updated_at": "2023-01-16T12:49:07.000000Z"
		},
		{
			"id": 11,
			"product_id": 4,
			"language_id": 136,
			"version": 3,
			"is_active": 0,
			"created_at": "2023-01-16T12:49:07.000000Z",
			"updated_at": "2023-01-16T12:49:07.000000Z"
		},
		{
			"id": 12,
			"product_id": 4,
			"language_id": 48,
			"version": 1,
			"is_active": 1,
			"created_at": "2023-01-16T12:49:07.000000Z",
			"updated_at": "2023-01-16T12:49:07.000000Z"
		}
	],
	"languages": [
		{
			"id": 95,
			"name": "Thai - ไทย",
			"code": "th"
		},
		{
			"id": 48,
			"name": "Lithuanian - lietuvių",
			"code": "lt"
		}
	]
}
```

## DELETE 
/api/deleteItem/{id} - delete item from db based on id
