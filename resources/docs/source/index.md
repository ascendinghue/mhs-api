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

<!-- END_INFO -->

#Aliases


APIs for managing aliases
<!-- START_cfd537a33df77d89af88a3218de5584e -->
## Browse

Retrieve a list of all available aliases

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 3,
            "name_id": "6",
            "type": "role",
            "family_name": "Jefferson",
            "given_name": null,
            "middle_name": null,
            "maiden_name": null,
            "suffix": null,
            "title": null,
            "role": null,
            "public_notes": null,
            "staff_notes": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/aliases`


<!-- END_cfd537a33df77d89af88a3218de5584e -->

<!-- START_7b56a1d63dd44cd0375d1a340d4f631e -->
## Read

Retrieve a specific alias

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "3",
    "family_name": "Jefferson",
    "type": "role",
    "name_id": 6
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/aliases/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Alias.

<!-- END_7b56a1d63dd44cd0375d1a340d4f631e -->

<!-- START_dcaf040745d3176c01ff334ee050609e -->
## Edit

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name_id":1,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"dolor","public_notes":"maiores","staff_notes":"ex"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_id": 1,
    "type": "role",
    "family_name": "Buren",
    "given_name": "Martin",
    "middle_name": "Van",
    "suffix": "Mr.",
    "title": "President",
    "role": "dolor",
    "public_notes": "maiores",
    "staff_notes": "ex"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/aliases/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Alias.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name_id` | integer |  optional  | optional The id of the name.
        `type` | string |  optional  | optional The type of alias.
        `family_name` | string |  optional  | optional The family name for the alias.
        `given_name` | string |  optional  | optional The given name for the alias.
        `middle_name` | string |  optional  | optional The middle name for the alias.
        `suffix` | string |  optional  | optional The suffix for the alias.
        `title` | string |  optional  | optional The title for the alias.
        `role` | string |  optional  | optional The role for the alias.
        `public_notes` | text |  optional  | optional The public notes for the alias.
        `staff_notes` | text |  optional  | optional The staff notes for the alias.
    
<!-- END_dcaf040745d3176c01ff334ee050609e -->

<!-- START_0e0a5bf73fdd990c73308a946ee2ac06 -->
## Add

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/aliases" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name_id":3,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"velit","public_notes":"reprehenderit","staff_notes":"dolorem"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_id": 3,
    "type": "role",
    "family_name": "Buren",
    "given_name": "Martin",
    "middle_name": "Van",
    "suffix": "Mr.",
    "title": "President",
    "role": "velit",
    "public_notes": "reprehenderit",
    "staff_notes": "dolorem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/aliases`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name_id` | integer |  required  | The id of the name.
        `type` | string |  required  | The type of alias.
        `family_name` | string |  required  | The family name for the alias.
        `given_name` | string |  optional  | optional The given name for the alias.
        `middle_name` | string |  optional  | optional The middle name for the alias.
        `suffix` | string |  optional  | optional The suffix for the alias.
        `title` | string |  optional  | optional The title for the alias.
        `role` | string |  optional  | optional The role for the alias.
        `public_notes` | text |  optional  | optional The public notes for the alias.
        `staff_notes` | text |  optional  | optional The staff notes for the alias.
    
<!-- END_0e0a5bf73fdd990c73308a946ee2ac06 -->

<!-- START_03b79615cdc57d7ec10e04ab8f0d0e25 -->
## Delete

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/aliases/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Alias.

<!-- END_03b79615cdc57d7ec10e04ab8f0d0e25 -->

<!-- START_cd980cb4eac119a960b8fb8e1958a1e7 -->
## Retrieve the name for an Alias

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases/1/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/aliases/1/name"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/aliases/{id}/name`


<!-- END_cd980cb4eac119a960b8fb8e1958a1e7 -->

#Links


APIs for managing links
<!-- START_5abf710e926abfce98a2456aa6b223f5 -->
## Retrieve all for model.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/links" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 5,
            "linkable_id": "4",
            "linkable_type": "Models\\Subject",
            "type": "source",
            "authority": "snac",
            "authority_id": "12345",
            "display_title": "this is a link",
            "url": "www.google.com",
            "notes": "nothing"
        }
    ]
}
```

### HTTP Request
`GET api/v1/links`


<!-- END_5abf710e926abfce98a2456aa6b223f5 -->

<!-- START_61603de006810d4d80d39ef53695ac09 -->
## Retrieve the model for the given ID.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/links/{id}`


<!-- END_61603de006810d4d80d39ef53695ac09 -->

<!-- START_b5208241d490e2668223c8fa6eed60c2 -->
## Update the specified model.

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/links/{id}`


<!-- END_b5208241d490e2668223c8fa6eed60c2 -->

<!-- START_4a3fbb251b3780a0b3a359c3276aa216 -->
## Store a new model.

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/links" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/links`


<!-- END_4a3fbb251b3780a0b3a359c3276aa216 -->

<!-- START_3e24df97e7dbb5049e63f12aeb042e46 -->
## Delete the specified model.

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/links/{id}`


<!-- END_3e24df97e7dbb5049e63f12aeb042e46 -->

#Names


APIs for managing names
<!-- START_1e0430434c304b4be8f4ee1a04e6a251 -->
## Retrieve all for model.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [
                {
                    "id": 3,
                    "name_id": "6",
                    "type": "role",
                    "family_name": "Jefferson",
                    "given_name": null,
                    "middle_name": null,
                    "maiden_name": null,
                    "suffix": null,
                    "title": null,
                    "role": null,
                    "public_notes": null,
                    "staff_notes": null
                }
            ],
            "links": []
        },
        {
            "id": 7,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 8,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 9,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 10,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 11,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 12,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 13,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 14,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 15,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 16,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 17,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        },
        {
            "id": 18,
            "family_name": "testing",
            "given_name": "another test",
            "middle_name": "",
            "maiden_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null,
            "name_key": "testing-another test--1968-04-23",
            "aliases": [],
            "links": []
        }
    ]
}
```

### HTTP Request
`GET api/v1/names`


<!-- END_1e0430434c304b4be8f4ee1a04e6a251 -->

<!-- START_6f2a2899737a3c1cdc6f95308d1821db -->
## Retrieve the model for the given ID.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/names/{id}`


<!-- END_6f2a2899737a3c1cdc6f95308d1821db -->

<!-- START_c6c410a18c77cd6b7edf849f896c9c10 -->
## Update the specified model.

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/names/{id}`


<!-- END_c6c410a18c77cd6b7edf849f896c9c10 -->

<!-- START_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->
## Store a new model.

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/names`


<!-- END_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->

<!-- START_2f14d29bd7da846c5c64a1e07c08a19d -->
## Delete the specified model.

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/names/{id}`


<!-- END_2f14d29bd7da846c5c64a1e07c08a19d -->

#Project Lists


APIs for managing project lists
<!-- START_f1b8eb2943d95c92b42a3439d853d551 -->
## Retrieve all for model.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 2,
            "project_id": "123-456-789",
            "name": "associated subjects",
            "type": "subject",
            "description": null,
            "subjects": [
                {
                    "id": 4,
                    "subject_name": "child",
                    "display_name": "this is a child",
                    "staff_notes": "",
                    "keywords": "",
                    "loc": "",
                    "links": [
                        {
                            "id": 5,
                            "linkable_id": "4",
                            "linkable_type": "Models\\Subject",
                            "type": "source",
                            "authority": "snac",
                            "authority_id": "12345",
                            "display_title": "this is a link",
                            "url": "www.google.com",
                            "notes": "nothing"
                        }
                    ]
                },
                {
                    "id": 5,
                    "subject_name": "grandchild",
                    "display_name": "this is a grand child",
                    "staff_notes": "",
                    "keywords": "",
                    "loc": "",
                    "links": []
                }
            ],
            "names": [
                {
                    "id": 6,
                    "family_name": "testing",
                    "given_name": "another test",
                    "middle_name": "",
                    "maiden_name": "",
                    "suffix": "",
                    "keywords": "",
                    "date_of_birth": "1968-04-23",
                    "date_of_death": null,
                    "public_notes": null,
                    "staff_notes": null,
                    "bio_filename": null,
                    "name_key": "testing-another test--1968-04-23",
                    "pivot": {
                        "project_list_id": "2",
                        "listable_id": "6",
                        "listable_type": "Models\\Name"
                    },
                    "aliases": [
                        {
                            "id": 3,
                            "name_id": "6",
                            "type": "role",
                            "family_name": "Jefferson",
                            "given_name": null,
                            "middle_name": null,
                            "maiden_name": null,
                            "suffix": null,
                            "title": null,
                            "role": null,
                            "public_notes": null,
                            "staff_notes": null
                        }
                    ],
                    "links": []
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET api/v1/lists`


<!-- END_f1b8eb2943d95c92b42a3439d853d551 -->

<!-- START_1b5803b0b970d515247e13c48bfe44b4 -->
## Retrieve the model for the given ID.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/lists/{id}`


<!-- END_1b5803b0b970d515247e13c48bfe44b4 -->

<!-- START_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->
## Update the specified model.

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/lists/{id}`


<!-- END_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->

<!-- START_f88b33dc550222c72ee0a4cf694a9a32 -->
## Store a new model.

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/lists`


<!-- END_f88b33dc550222c72ee0a4cf694a9a32 -->

<!-- START_1001bf95d9727bed33119c4e7901ecfd -->
## Delete the specified model.

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/lists/{id}`


<!-- END_1001bf95d9727bed33119c4e7901ecfd -->

#Projects


APIs for managing projects
<!-- START_d4bb0000cd4525b356d3f4e604741ee1 -->
## Retrieve all Projects

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 10,
            "project_id": "123-456-789",
            "name": "test project",
            "description": "testing",
            "subjects": []
        },
        {
            "id": 40,
            "project_id": "111-5-585-156",
            "name": "another test",
            "description": "testing",
            "subjects": []
        }
    ]
}
```

### HTTP Request
`GET api/v1/projects`


<!-- END_d4bb0000cd4525b356d3f4e604741ee1 -->

<!-- START_c0c7035d6f07233f5023f3108d569268 -->
## Retrieve the specified Project

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/projects/{id}`


<!-- END_c0c7035d6f07233f5023f3108d569268 -->

<!-- START_fc1e4c1f87d2406ebf0d9350665d59e4 -->
## Update the specified Project

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/projects/{id}`


<!-- END_fc1e4c1f87d2406ebf0d9350665d59e4 -->

<!-- START_e832cdeb3d8617c57febfca7405a7263 -->
## Store a new Project

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"123-4567-89","name":"ea","description":"aut"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "123-4567-89",
    "name": "ea",
    "description": "aut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/projects`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `project_id` | string |  required  | The id of the project.
        `name` | string |  required  | The name of the project.
        `description` | required |  optional  | The description of the project.
    
<!-- END_e832cdeb3d8617c57febfca7405a7263 -->

<!-- START_85c1605eb5b3323aa82926b6add7c133 -->
## Delete the specified Project

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/projects/{id}`


<!-- END_85c1605eb5b3323aa82926b6add7c133 -->

<!-- START_8b9d872f016395ac37367b49ef763ef4 -->
## Retrieve subjects for a Project

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/projects/{id}/subjects`


<!-- END_8b9d872f016395ac37367b49ef763ef4 -->

<!-- START_0bb4aaae1fd132c511525815304354f2 -->
## Add Subject to a Project

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/projects/{id}/subjects`


<!-- END_0bb4aaae1fd132c511525815304354f2 -->

<!-- START_1276459bba6bc7a6f4396200acdf2741 -->
## Remove subject from a Project

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/projects/{project_id}/subjects`


<!-- END_1276459bba6bc7a6f4396200acdf2741 -->

#Subjects


APIs for managing subjects
<!-- START_451cd228b1ef6fa32ccba39a38733061 -->
## Retrieve all for model.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 3,
            "subject_name": "parent test",
            "display_name": "this is a parent",
            "staff_notes": "",
            "keywords": "",
            "loc": "",
            "links": []
        },
        {
            "id": 4,
            "subject_name": "child",
            "display_name": "this is a child",
            "staff_notes": "",
            "keywords": "",
            "loc": "",
            "links": [
                {
                    "id": 5,
                    "linkable_id": "4",
                    "linkable_type": "Models\\Subject",
                    "type": "source",
                    "authority": "snac",
                    "authority_id": "12345",
                    "display_title": "this is a link",
                    "url": "www.google.com",
                    "notes": "nothing"
                }
            ]
        },
        {
            "id": 5,
            "subject_name": "grandchild",
            "display_name": "this is a grand child",
            "staff_notes": "",
            "keywords": "",
            "loc": "",
            "links": []
        },
        {
            "id": 6,
            "subject_name": "grandchild",
            "display_name": "this is a grand child",
            "staff_notes": "",
            "keywords": "",
            "loc": "",
            "links": []
        },
        {
            "id": 10,
            "subject_name": "grandchild",
            "display_name": "this is a grandchild",
            "staff_notes": null,
            "keywords": null,
            "loc": null,
            "links": []
        }
    ]
}
```

### HTTP Request
`GET api/v1/subjects`


<!-- END_451cd228b1ef6fa32ccba39a38733061 -->

<!-- START_5e15402500604bd4622bbff7103366c8 -->
## Retrieve the model for the given ID.

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/subjects/{id}`


<!-- END_5e15402500604bd4622bbff7103366c8 -->

<!-- START_7d8b60b8cc1fcf16b328476c1e8a5b05 -->
## Update the specified model.

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/v1/subjects/{id}`


<!-- END_7d8b60b8cc1fcf16b328476c1e8a5b05 -->

<!-- START_34aba826805a0fc069bf7672b1ceae89 -->
## Store a new model.

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/subjects`


<!-- END_34aba826805a0fc069bf7672b1ceae89 -->

<!-- START_99bae6d5929e7514b230a0ae09d07d94 -->
## Delete the specified model.

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/subjects/{id}`


<!-- END_99bae6d5929e7514b230a0ae09d07d94 -->

<!-- START_146806a2035ca7516f03a22a91a93c46 -->
## Retrieve the projects for the specified subject

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET api/v1/subjects/{id}/projects`


<!-- END_146806a2035ca7516f03a22a91a93c46 -->


