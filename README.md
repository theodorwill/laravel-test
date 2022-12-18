# Setup

## Install
```
npm install
```

```
php artisan serve
```

## seed
```
php artisan migrate:fresh --seed
```
## Only run from cache
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
example of response:
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
/api/items - get all API data

/api/item/{id} - get specific data based on id

sample response data: ^

## DELETE 
/api/deleteItem/{id} - delete item from db based on id
