## Test



## API methods

`` GET /api/jobs `` get list of jobs

Additional params:
- status
- limit
- offset

`` GET /api/jobs/{id} `` get job by id

`` POST /api/jobs `` create new job

`` PUT /api/jobs/{id} `` update job by id

`` DELETE /api/jobs/{id} `` delete job by id

### Example of API response

```
{
    "data": [
        {
            "id": 1,
            "name": "6",
            "url": "http://someurl.com/test/vieo.jpeg4",
            "status": "New",
            "updated_at": "2019-02-21 09:33:06",
            "created_at": "2019-02-21 09:33:06"
        }
    ]
}
```

## Console methods

`` php artisan jobs:list {status?} {limit?} {offset?} `` get list of jobs

`` php artisan jobs:create {url} {name?} `` create new job

`` php artisan jobs:delete {id} `` delete job by id
