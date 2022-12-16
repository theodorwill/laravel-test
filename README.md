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

# Endpoints

## POST 
/api/sku
req.body 
```
{
    "sku": "123456",
}
```

## GET 
/api/items - get all API data

/api/item/{id} - get specific data based on id

sample response data:
```
[
	{
		"id": 1,
		"sku": 751944,
		"created_at": "2022-12-16T02:41:14.000000Z",
		"updated_at": "2022-12-16T02:41:14.000000Z"
	},
	{
		"id": 2,
		"sku": 813511,
		"created_at": "2022-12-16T02:41:14.000000Z",
		"updated_at": "2022-12-16T02:41:14.000000Z"
	},
 ]  
```
## DELETE 
/api/deleteItem/{id} - delete item from db based on id
