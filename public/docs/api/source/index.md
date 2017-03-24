---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://download-todo.dev.matijaboban.com/docs/api/collection.json)
<!-- END_INFO -->

#Permissions

TBD
<!-- START_12c77c0afe8dfd7d5653b62a33eb1954 -->
## Index of all Model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/permissions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 11,
    "per_page": 25,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 11,
    "data": [
        {
            "id": 1,
            "name": "canListUsers",
            "label": "List users",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "canManageUsers",
            "label": "Manage users",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "canManageOwnProfile",
            "label": "Manage own user profile",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "canListPermissions",
            "label": "List Permissions",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "canManagePermissions",
            "label": "Manage Permissions",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "canListRoles",
            "label": "List Roles",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "canManageRoles",
            "label": "Manage Roles",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "canListRequests",
            "label": "List requests",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "canManageRequests",
            "label": "Manage requests",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "canListOwnRequests",
            "label": "List own requests",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "canManageOwnRequests",
            "label": "Manage own requests",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/permissions`

`HEAD api/v1/permissions`


<!-- END_12c77c0afe8dfd7d5653b62a33eb1954 -->

<!-- START_defb597dbd6eb21dee1f472ef6340873 -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/permissions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/permissions`


<!-- END_defb597dbd6eb21dee1f472ef6340873 -->

<!-- START_6291a2f857713d80d2c6aa285d889c6c -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "canListUsers",
    "label": "List users",
    "created_at": "2017-02-20 14:29:20",
    "updated_at": "2017-02-20 14:29:20",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/permissions/{permission}`

`HEAD api/v1/permissions/{permission}`


<!-- END_6291a2f857713d80d2c6aa285d889c6c -->

<!-- START_102bcc89441658cf73bc3c85f82009fe -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/permissions/{permission}`

`PATCH api/v1/permissions/{permission}`


<!-- END_102bcc89441658cf73bc3c85f82009fe -->

<!-- START_a76ff06df82f5e7b38639608624548fe -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/permissions/{permission}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/permissions/{permission}`


<!-- END_a76ff06df82f5e7b38639608624548fe -->

#Request status

TBD
<!-- START_c4308b036e58b085548ec069c8240aa3 -->
## Included traits

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/requests/status" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"Resource currently not implemented."
```

### HTTP Request
`GET api/v1/requests/status`

`HEAD api/v1/requests/status`


<!-- END_c4308b036e58b085548ec069c8240aa3 -->

<!-- START_1c0a13c87714f12e7dbffa8d6e744ab5 -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/requests/status" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/requests/status`


<!-- END_1c0a13c87714f12e7dbffa8d6e744ab5 -->

<!-- START_6fc895e4bbc160cec45cfec85810996f -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "request_id": 1,
    "status_id": 5,
    "note": "March Hare and his buttons, and turns out his toes.'.",
    "created_at": "2017-02-20 14:29:24",
    "updated_at": "2017-02-20 14:29:24",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/requests/status/{status}`

`HEAD api/v1/requests/status/{status}`


<!-- END_6fc895e4bbc160cec45cfec85810996f -->

<!-- START_d6be5d9d09aa83f67bd0414e6e50ee41 -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/requests/status/{status}`

`PATCH api/v1/requests/status/{status}`


<!-- END_d6be5d9d09aa83f67bd0414e6e50ee41 -->

<!-- START_ec4a73f4d75ac97424e80dbadd1c7ae6 -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status/{status}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/requests/status/{status}`


<!-- END_ec4a73f4d75ac97424e80dbadd1c7ae6 -->

<!-- START_38e4ce1908e66b2a1a3aae9d39594c05 -->
## api/v1/requests/status/log/{id}

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/requests/status/log/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/status/log/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "status_id": 5,
        "note": "March Hare and his buttons, and turns out his toes.'.",
        "updated_at": {
            "date": "2017-02-20 14:29:24.000000",
            "timezone_type": 3,
            "timezone": "America\/Vancouver"
        }
    },
    {
        "status_id": 1,
        "note": "Initial request",
        "updated_at": {
            "date": "2017-02-20 14:29:23.000000",
            "timezone_type": 3,
            "timezone": "America\/Vancouver"
        }
    }
]
```

### HTTP Request
`GET api/v1/requests/status/log/{id}`

`HEAD api/v1/requests/status/log/{id}`


<!-- END_38e4ce1908e66b2a1a3aae9d39594c05 -->

#Roles

TBD
<!-- START_d97fba8dbd0d0033960fdc6a25fca8d9 -->
## Index of all Model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/roles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 2,
    "per_page": 25,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 2,
    "data": [
        {
            "id": 1,
            "name": "admin",
            "label": "Admin",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "user",
            "label": "User",
            "created_at": "2017-02-20 14:29:20",
            "updated_at": "2017-02-20 14:29:20",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/roles`

`HEAD api/v1/roles`


<!-- END_d97fba8dbd0d0033960fdc6a25fca8d9 -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/roles",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/roles`


<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_f47a034257a009b731160db044157715 -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "admin",
    "label": "Admin",
    "created_at": "2017-02-20 14:29:20",
    "updated_at": "2017-02-20 14:29:20",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/roles/{role}`

`HEAD api/v1/roles/{role}`


<!-- END_f47a034257a009b731160db044157715 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`


<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/roles/{role}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

#Statuses

TBD
<!-- START_11414f449ae40808a84c5d604434d487 -->
## Index of all Model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/statuses" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/statuses",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "requested",
        "label": "Requested",
        "note": "A requested has been submitted",
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 2,
        "name": "in-progress",
        "label": "In Progress",
        "note": "The request is being fulfilled.",
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 3,
        "name": "unavailable",
        "label": "Unavailable",
        "note": "The requested item is currently unavailable.",
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 4,
        "name": "paused",
        "label": "Paused",
        "note": "The requested fulfilled is paused.",
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 5,
        "name": "completed",
        "label": "Completed",
        "note": "The request is fulfilled and available via appropriate access path.",
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    }
]
```

### HTTP Request
`GET api/v1/statuses`

`HEAD api/v1/statuses`


<!-- END_11414f449ae40808a84c5d604434d487 -->

<!-- START_a7ada8c4f6e927f36d1b35bcad64309f -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/statuses" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/statuses",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/statuses`


<!-- END_a7ada8c4f6e927f36d1b35bcad64309f -->

<!-- START_e568b1d682dbe876ec2706fbc27119ac -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "requested",
    "label": "Requested",
    "note": "A requested has been submitted",
    "created_at": "2017-02-20 14:29:20",
    "updated_at": "2017-02-20 14:29:20",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/statuses/{status}`

`HEAD api/v1/statuses/{status}`


<!-- END_e568b1d682dbe876ec2706fbc27119ac -->

<!-- START_0898bd606cefca670cfa33547d02e52d -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/statuses/{status}`

`PATCH api/v1/statuses/{status}`


<!-- END_0898bd606cefca670cfa33547d02e52d -->

<!-- START_2d91e3a86a0ac5ddfd01b6ca66016715 -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/statuses/{status}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/statuses/{status}`


<!-- END_2d91e3a86a0ac5ddfd01b6ca66016715 -->

#Types

TBD
<!-- START_5d2ebe3c7cda8b51f50de933e9019175 -->
## Index of all Model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/types",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "album",
        "label": "Album",
        "note": "A full audio album.",
        "fields": [
            {
                "name": "artist",
                "label": "Artist",
                "note": "The artist name. If this is a compilation album, enter %22various artists%22.",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Artist name is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 120,
                        "initial": "off",
                        "message": "Artist name must be less then 120 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "Artist name must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "Artist name"
                },
                "field_type_id": 14
            },
            {
                "name": "album",
                "label": "Album",
                "note": "The album name",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Album name is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 300,
                        "initial": "off",
                        "message": "Album name must be less then 300 characters."
                    },
                    "minlength": {
                        "rule": 2,
                        "initial": "off",
                        "message": "Album name must be longer then 2 character."
                    }
                },
                "type": 14,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Album name"
                },
                "field_type_id": 14
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 2,
        "name": "song",
        "label": "Song",
        "note": "A single song.",
        "fields": [
            {
                "name": "artist",
                "label": "Artist",
                "note": "The artist name",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Artist name is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 120,
                        "initial": "off",
                        "message": "Artist name must be less then 120 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "Artist name must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "Artist name"
                },
                "field_type_id": 14
            },
            {
                "name": "title",
                "label": "Song title",
                "note": "The song title",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Song title is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 300,
                        "initial": "off",
                        "message": "Song title must be less then 300 characters."
                    },
                    "minlength": {
                        "rule": 2,
                        "initial": "off",
                        "message": "Song title must be longer then 2 character."
                    }
                },
                "type": 14,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Song title"
                },
                "field_type_id": 14
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 3,
        "name": "book",
        "label": "Book",
        "note": "An eBook.",
        "fields": [
            {
                "name": "author",
                "label": "Author",
                "note": "The author name",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Author name is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 120,
                        "initial": "off",
                        "message": "Author name must be less then 120 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "Author name must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "Author name"
                },
                "field_type_id": 14
            },
            {
                "name": "title",
                "label": "Book title",
                "note": "The book title",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Book title is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 400,
                        "initial": "off",
                        "message": "Book title must be less then 400 characters."
                    },
                    "minlength": {
                        "rule": 2,
                        "initial": "off",
                        "message": "Book title must be longer then 2 character."
                    }
                },
                "type": 14,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Book title"
                },
                "field_type_id": 14
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 4,
        "name": "movie",
        "label": "Movie",
        "note": "A feature-length movie.",
        "fields": [
            {
                "name": "title",
                "label": "Movie title",
                "note": "The movie title",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Movie title is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 200,
                        "initial": "off",
                        "message": "movie title must be less then 200 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "Movie title must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "Movie title"
                },
                "field_type_id": 14
            },
            {
                "name": "year",
                "label": "Movie Year",
                "note": "The year of release",
                "attributes": [],
                "validation": {
                    "required": {
                        "rule": false,
                        "message": "Value is required"
                    },
                    "digits_between": {
                        "max": 100,
                        "min": 1,
                        "message": "Value must be between 1 and 100."
                    },
                    "maxlength": {
                        "rule": 4,
                        "initial": "off",
                        "message": "Year of release must be 4 character."
                    },
                    "minlength": {
                        "rule": 4,
                        "initial": "off",
                        "message": "Year of release must be 4 character."
                    }
                },
                "type": 9,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Year of release"
                },
                "field_type_id": 9
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 5,
        "name": "documentary",
        "label": "Documentary",
        "note": "A feature-length documentary.",
        "fields": [
            {
                "name": "title",
                "label": "Documentary title",
                "note": "The documentary title",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "Documentary title is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 200,
                        "initial": "off",
                        "message": "Documentary title must be less then 200 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "Documentary title must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "Documentary title"
                },
                "field_type_id": 14
            },
            {
                "name": "year",
                "label": "Documentary Year",
                "note": "The year of release",
                "attributes": [],
                "validation": {
                    "required": {
                        "rule": false,
                        "message": "Value is required"
                    },
                    "digits_between": {
                        "max": 100,
                        "min": 1,
                        "message": "Value must be between 1 and 100."
                    },
                    "maxlength": {
                        "rule": 4,
                        "initial": "off",
                        "message": "Year of release must be 4 character."
                    },
                    "minlength": {
                        "rule": 4,
                        "initial": "off",
                        "message": "Year of release must be 4 character."
                    }
                },
                "type": 9,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Year of release"
                },
                "field_type_id": 9
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 6,
        "name": "tv-show",
        "label": "TV Show",
        "note": "A TV-show or a serialised documentary.",
        "fields": [
            {
                "name": "title",
                "label": "TV Show title",
                "note": "The TV Show title",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "TV Show title is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 200,
                        "initial": "off",
                        "message": "TV Show title must be less then 200 characters."
                    },
                    "minlength": {
                        "rule": 1,
                        "initial": "off",
                        "message": "TV Show title must be longer then 1 character."
                    }
                },
                "type": 14,
                "field_id": 1,
                "atributes": {
                    "placeholder": "TV Show title"
                },
                "field_type_id": 14
            },
            {
                "name": "requested-season",
                "label": "Requested season",
                "note": "The requested TV Show season. Use this field if only a certain season is required. Separate multiple seasons with a comma. Leave this field blank if the entire TV Show run is requested",
                "attributes": {
                    "placeholder": "&label value"
                },
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": false,
                        "message": "&label is required"
                    },
                    "maxlength": {
                        "rule": 60,
                        "initial": "off",
                        "message": "Requested TV Show season input must contain less then 60 character."
                    }
                },
                "type": 14,
                "field_id": 2,
                "atributes": {
                    "placeholder": "Season"
                },
                "field_type_id": 14
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    },
    {
        "id": 7,
        "name": "playlist",
        "label": "Playlist",
        "note": "A music playlist from Google Play.",
        "fields": [
            {
                "name": "playlist-url",
                "label": "On-Line Playlist URL",
                "note": "The On-Line Playlist URL",
                "attributes": [],
                "validation": {
                    "max": {
                        "rule": 120,
                        "message": "&label must be less then &rule characters."
                    },
                    "min": {
                        "rule": 1,
                        "message": "&label must be longer then &rule character."
                    },
                    "required": {
                        "rule": true,
                        "message": "On-Line Playlist URL is required",
                        "initial": "off"
                    },
                    "maxlength": {
                        "rule": 500,
                        "initial": "off",
                        "message": "Playlist URL must be less then 500 character."
                    }
                },
                "type": 15,
                "field_id": 1,
                "atributes": {
                    "placeholder": "On-Line Playlist URL"
                },
                "field_type_id": 15
            }
        ],
        "created_at": "2017-02-20 14:29:20",
        "updated_at": "2017-02-20 14:29:20",
        "deleted_at": null
    }
]
```

### HTTP Request
`GET api/v1/types`

`HEAD api/v1/types`


<!-- END_5d2ebe3c7cda8b51f50de933e9019175 -->

<!-- START_4c3debe116eeaffe26c8e69d80a59122 -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/types",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/types`


<!-- END_4c3debe116eeaffe26c8e69d80a59122 -->

<!-- START_06b279ea07e890addb59624b6822c039 -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/types/{type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/types/{type}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "album",
    "label": "Album",
    "note": "A full audio album.",
    "fields": [
        {
            "name": "artist",
            "label": "Artist",
            "note": "The artist name. If this is a compilation album, enter %22various artists%22.",
            "attributes": {
                "placeholder": "&label value"
            },
            "validation": {
                "max": {
                    "rule": 120,
                    "message": "&label must be less then &rule characters."
                },
                "min": {
                    "rule": 1,
                    "message": "&label must be longer then &rule character."
                },
                "required": {
                    "rule": true,
                    "message": "Artist name is required",
                    "initial": "off"
                },
                "maxlength": {
                    "rule": 120,
                    "initial": "off",
                    "message": "Artist name must be less then 120 characters."
                },
                "minlength": {
                    "rule": 1,
                    "initial": "off",
                    "message": "Artist name must be longer then 1 character."
                }
            },
            "type": 14,
            "field_id": 1,
            "atributes": {
                "placeholder": "Artist name"
            },
            "field_type_id": 14
        },
        {
            "name": "album",
            "label": "Album",
            "note": "The album name",
            "attributes": {
                "placeholder": "&label value"
            },
            "validation": {
                "max": {
                    "rule": 120,
                    "message": "&label must be less then &rule characters."
                },
                "min": {
                    "rule": 1,
                    "message": "&label must be longer then &rule character."
                },
                "required": {
                    "rule": true,
                    "message": "Album name is required",
                    "initial": "off"
                },
                "maxlength": {
                    "rule": 300,
                    "initial": "off",
                    "message": "Album name must be less then 300 characters."
                },
                "minlength": {
                    "rule": 2,
                    "initial": "off",
                    "message": "Album name must be longer then 2 character."
                }
            },
            "type": 14,
            "field_id": 2,
            "atributes": {
                "placeholder": "Album name"
            },
            "field_type_id": 14
        }
    ],
    "created_at": "2017-02-20 14:29:20",
    "updated_at": "2017-02-20 14:29:20",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/types/{type}`

`HEAD api/v1/types/{type}`


<!-- END_06b279ea07e890addb59624b6822c039 -->

<!-- START_f701423a75ef29a277571086a945d00e -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/types/{type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/types/{type}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/types/{type}`

`PATCH api/v1/types/{type}`


<!-- END_f701423a75ef29a277571086a945d00e -->

<!-- START_27962bb762ac86f55fad81c4f5b04e2b -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/types/{type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/types/{type}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/types/{type}`


<!-- END_27962bb762ac86f55fad81c4f5b04e2b -->

#User Requests

TBD
<!-- START_5dab227a87aa435b729da2ee44793e57 -->
## Index

Retrieve Users Requests

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/requests" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 5,
    "per_page": 25,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 5,
    "data": [
        {
            "id": 1,
            "user_id": 6,
            "request_type": 1,
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 15:33:29",
            "deleted_at": "2017-02-20 15:33:29",
            "status": 5,
            "request_inputs": {
                "artist": "Alice to herself, as she could remember about ravens and writing-desks, which wasn't much. The Hatter was the White Rabbit as he wore his crown over the fire, licking her paws and washing her.",
                "album": "Hatter went on, taking first one side and then keep tight hold of its little eyes, but it was indeed: she was exactly one a-piece all round. (It was this last remark. 'Of course twinkling begins."
            }
        },
        {
            "id": 2,
            "user_id": 1,
            "request_type": 5,
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null,
            "status": 1,
            "request_inputs": {
                "title": "Mouse, who seemed ready to sink into the air, I'm afraid, sir' said Alice, 'I've often seen them so shiny?' Alice looked all round the court with a table in the face. 'I'll put a stop to this,' she.",
                "year": "Alice had been all the jurymen are back in a trembling voice, '--and I hadn't to bring but one; Bill's got the other--Bill! fetch it here, lad!--Here, put 'em up at the other, and making quite a."
            }
        },
        {
            "id": 3,
            "user_id": 4,
            "request_type": 2,
            "created_at": "2017-02-20 14:36:52",
            "updated_at": "2017-02-20 14:36:52",
            "deleted_at": null,
            "status": null,
            "request_inputs": []
        },
        {
            "id": 4,
            "user_id": 4,
            "request_type": 1,
            "created_at": "2017-02-20 14:37:20",
            "updated_at": "2017-02-20 14:37:20",
            "deleted_at": null,
            "status": null,
            "request_inputs": []
        },
        {
            "id": 5,
            "user_id": 4,
            "request_type": 1,
            "created_at": "2017-02-20 14:37:53",
            "updated_at": "2017-02-20 14:37:53",
            "deleted_at": null,
            "status": 2,
            "request_inputs": {
                "artist": "test",
                "album": "test"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/requests`

`HEAD api/v1/requests`


<!-- END_5dab227a87aa435b729da2ee44793e57 -->

<!-- START_5234f5abf5d5ed5dd1eb1776490c88a6 -->
## Create.

Create new users request.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/requests" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/requests`


<!-- END_5234f5abf5d5ed5dd1eb1776490c88a6 -->

<!-- START_05b2a7849e0dfcebdb1234efba9d51d1 -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "user_id": 6,
    "request_type": 1,
    "request_input": {
        "artist": "Alice to herself, as she could remember about ravens and writing-desks, which wasn't much. The Hatter was the White Rabbit as he wore his crown over the fire, licking her paws and washing her.",
        "album": "Hatter went on, taking first one side and then keep tight hold of its little eyes, but it was indeed: she was exactly one a-piece all round. (It was this last remark. 'Of course twinkling begins."
    },
    "status": 5,
    "status_log": [
        {
            "status_id": 5,
            "note": "March Hare and his buttons, and turns out his toes.'.",
            "updated_at": {
                "date": "2017-02-20 14:29:24.000000",
                "timezone_type": 3,
                "timezone": "America\/Vancouver"
            }
        },
        {
            "status_id": 1,
            "note": "Initial request",
            "updated_at": {
                "date": "2017-02-20 14:29:23.000000",
                "timezone_type": 3,
                "timezone": "America\/Vancouver"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/requests/{request}`

`HEAD api/v1/requests/{request}`


<!-- END_05b2a7849e0dfcebdb1234efba9d51d1 -->

<!-- START_2e678574ef346132697ad84f6f04a812 -->
## Update

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/requests/{request}`

`PATCH api/v1/requests/{request}`


<!-- END_2e678574ef346132697ad84f6f04a812 -->

<!-- START_9e35107b00fce3d7dc25a2039560d0e4 -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/requests/{request}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/requests/{request}`


<!-- END_9e35107b00fce3d7dc25a2039560d0e4 -->

#Users

TBD
<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## Index of all Model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 15,
    "per_page": 25,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 15,
    "data": [
        {
            "id": 1,
            "name": "admin",
            "email": "admin@this-system-email.internal",
            "created_at": "2017-02-20 14:29:21",
            "updated_at": "2017-02-20 14:29:21",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Liza Johnson",
            "email": "otis.skiles@example.com",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Skye Legros DDS",
            "email": "rubie37@example.com",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Mr. Mallory Kovacek",
            "email": "sophia.schmeler@example.com",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Dr. Art Marks DVM",
            "email": "ike88@example.org",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Americo Tillman",
            "email": "abshire.euna@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Ms. Anjali Ryan MD",
            "email": "bdouglas@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Aditya Leffler",
            "email": "madeline91@example.org",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Julia Romaguera",
            "email": "jamel.smith@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "Josie Herman",
            "email": "ansel.mitchell@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "Karianne Balistreri",
            "email": "aschaden@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "Casey Kohler IV",
            "email": "gmckenzie@example.com",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 13,
            "name": "Lizzie Denesik",
            "email": "edythe81@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 14,
            "name": "Sim Swaniawski",
            "email": "herman.judd@example.net",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        },
        {
            "id": 15,
            "name": "Ms. Madge Lynch DDS",
            "email": "breanna83@example.org",
            "created_at": "2017-02-20 14:29:22",
            "updated_at": "2017-02-20 14:29:22",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store new.

> Example request:

```bash
curl -X POST "http://download-todo.dev.matijaboban.com/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/users",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_b4ea58dd963da91362c51d4088d0d4f4 -->
## Single model data.

> Example request:

```bash
curl -X GET "http://download-todo.dev.matijaboban.com/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "admin",
    "email": "admin@this-system-email.internal",
    "created_at": "2017-02-20 14:29:21",
    "updated_at": "2017-02-20 14:29:21",
    "deleted_at": null
}
```

### HTTP Request
`GET api/v1/users/{user}`

`HEAD api/v1/users/{user}`


<!-- END_b4ea58dd963da91362c51d4088d0d4f4 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## Update.

> Example request:

```bash
curl -X PUT "http://download-todo.dev.matijaboban.com/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/users/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`


<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## Delete.

> Example request:

```bash
curl -X DELETE "http://download-todo.dev.matijaboban.com/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://download-todo.dev.matijaboban.com/api/v1/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

