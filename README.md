# Endpoints

## POST /api/sku - post data to the API
req.body 
```
{
    "sku": "123456",
}
```

## GET /api/items - get all API data
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

## GET /api/item/{id} - get specific data based on id

## DELETE /api/deleteItem/:id - delete item from db based on id
