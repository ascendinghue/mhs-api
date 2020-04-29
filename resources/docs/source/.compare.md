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

Retrieve a list of aliases

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
    -d '{"name_id":1,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"nam","public_notes":"nostrum","staff_notes":"sit"}'

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
    "role": "nam",
    "public_notes": "nostrum",
    "staff_notes": "sit"
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
    -d '{"name_id":3,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"aut","public_notes":"rerum","staff_notes":"cumque"}'

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
    "role": "aut",
    "public_notes": "rerum",
    "staff_notes": "cumque"
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

#Links


APIs for managing links
<!-- START_5abf710e926abfce98a2456aa6b223f5 -->
## Browse

Retrieve a list of links

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
            "linkable_type": "Models\\Subjectd",
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
## Read

Retrieve a specific link

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/links/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/3"
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
    "linkable_id": "4",
    "linkable_type": "Models\\Subject",
    "type": "source",
    "authority": "snac",
    "authority_id": "12345",
    "display_title": "this is a link",
    "url": "www.yahoo.com",
    "notes": "n\/a"
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/links/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Link.

<!-- END_61603de006810d4d80d39ef53695ac09 -->

<!-- START_b5208241d490e2668223c8fa6eed60c2 -->
## Edit

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/links/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"source","authority":"snac","authority_id":"123456","display_title":"Click me","url":"www.yahoo.com","notes":"n\/a"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "source",
    "authority": "snac",
    "authority_id": "123456",
    "display_title": "Click me",
    "url": "www.yahoo.com",
    "notes": "n\/a"
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
`PATCH api/v1/links/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Link.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | string |  optional  | optional The type of the link.
        `authority` | string |  optional  | optional The authority of the link.
        `authority_id` | string |  optional  | optional The authority id of the link.
        `display_title` | string |  optional  | optional The display title of the link.
        `url` | string |  optional  | optional The url of the link.
        `notes` | string |  optional  | optional The notes of the link.
    
<!-- END_b5208241d490e2668223c8fa6eed60c2 -->

<!-- START_4a3fbb251b3780a0b3a359c3276aa216 -->
## Add

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/links" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"source","authority":"snac","authority_id":"123456","display_title":"Click me","url":"www.yahoo.com","notes":"n\/a"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "source",
    "authority": "snac",
    "authority_id": "123456",
    "display_title": "Click me",
    "url": "www.yahoo.com",
    "notes": "n\/a"
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
`POST api/v1/links`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | string |  optional  | optional The type of the link.
        `authority` | string |  optional  | optional The authority of the link.
        `authority_id` | string |  optional  | optional The authority id of the link.
        `display_title` | string |  optional  | optional The display title of the link.
        `url` | string |  optional  | optional The url of the link.
        `notes` | string |  optional  | optional The notes of the link.
    
<!-- END_4a3fbb251b3780a0b3a359c3276aa216 -->

<!-- START_3e24df97e7dbb5049e63f12aeb042e46 -->
## Delete

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/links/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/links/3"
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

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Link.

<!-- END_3e24df97e7dbb5049e63f12aeb042e46 -->

#Lists


APIs for managing project lists
<!-- START_f1b8eb2943d95c92b42a3439d853d551 -->
## Browse

Retrieve a list of lists

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
                    "links": []
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
## Read

Retrieve a specific list

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/lists/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/3"
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
    "id": "2",
    "project_id": "123-456-789",
    "name": "associated subjects",
    "type": "subject"
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/lists/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the List.

<!-- END_1b5803b0b970d515247e13c48bfe44b4 -->

<!-- START_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->
## Edit

Update a specific list

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/lists/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"123-456-789","name":"associated subjects","type":"subject"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "123-456-789",
    "name": "associated subjects",
    "type": "subject"
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
`PATCH api/v1/lists/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the List.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `project_id` | string |  optional  | optional The project id of the list.
        `name` | string |  optional  | optional The name of the list.
        `type` | string |  optional  | optional The type of the list.
    
<!-- END_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->

<!-- START_f88b33dc550222c72ee0a4cf694a9a32 -->
## Add

Create a new list

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"123-456-789","name":"associated subjects","type":"subject"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "123-456-789",
    "name": "associated subjects",
    "type": "subject"
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
`POST api/v1/lists`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `project_id` | string |  optional  | optional The project id of the list.
        `name` | string |  optional  | optional The name of the list.
        `type` | string |  optional  | optional The type of the list.
    
<!-- END_f88b33dc550222c72ee0a4cf694a9a32 -->

<!-- START_1001bf95d9727bed33119c4e7901ecfd -->
## Delete

Remove a specific list

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/lists/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/lists/3"
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

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the List.

<!-- END_1001bf95d9727bed33119c4e7901ecfd -->

#Names


APIs for managing names
<!-- START_1e0430434c304b4be8f4ee1a04e6a251 -->
## Browse

Retrieve a list of names

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
## Read

Retrieve a specific name

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/names/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/3"
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
    "id": "6",
    "family_name": "testing",
    "given_name": "another test",
    "maiden_name": "",
    "middle_name": "",
    "suffix": "",
    "keywords": "",
    "date_of_birth": "1968-04-23",
    "date_of_death": null,
    "public_notes": null,
    "staff_notes": null,
    "bio_filename": null,
    "aliases": [
        {
            "id": "6",
            "family_name": "testing",
            "given_name": "another test",
            "maiden_name": "",
            "middle_name": "",
            "suffix": "",
            "keywords": "",
            "date_of_birth": "1968-04-23",
            "date_of_death": null,
            "public_notes": null,
            "staff_notes": null,
            "bio_filename": null
        }
    ]
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/names/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the name.

<!-- END_6f2a2899737a3c1cdc6f95308d1821db -->

<!-- START_c6c410a18c77cd6b7edf849f896c9c10 -->
## Edit

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/names/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"family_name":"John","given_name":"Doe","maiden_name":"nemo","middle_name":"in","suffix":"cum","keywords":"ut","date_of_birth":"quis","date_of_death":"rerum","public_notes":"sunt","staff_notes":"itaque","bio_filename":"quasi"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "family_name": "John",
    "given_name": "Doe",
    "maiden_name": "nemo",
    "middle_name": "in",
    "suffix": "cum",
    "keywords": "ut",
    "date_of_birth": "quis",
    "date_of_death": "rerum",
    "public_notes": "sunt",
    "staff_notes": "itaque",
    "bio_filename": "quasi"
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
`PATCH api/v1/names/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Name.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `family_name` | string |  optional  | optional The family name of the name.
        `given_name` | string |  optional  | optional The given name of the name.
        `maiden_name` | string |  optional  | optional The maiden name of the name.
        `middle_name` | string |  optional  | optional The middle name of the name.
        `suffix` | string |  optional  | optional The suffix of the name.
        `keywords` | string |  optional  | optional The keywords of the name.
        `date_of_birth` | string |  optional  | optional The date of birth of the name.
        `date_of_death` | string |  optional  | optional The date of death of the name.
        `public_notes` | string |  optional  | optional The public notes of the name.
        `staff_notes` | string |  optional  | optional The staff notes of the name.
        `bio_filename` | string |  optional  | optional The bio filename of the name.
    
<!-- END_c6c410a18c77cd6b7edf849f896c9c10 -->

<!-- START_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->
## Add

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"family_name":"John","given_name":"Doe","maiden_name":"voluptatem","middle_name":"natus","suffix":"ex","keywords":"quis","date_of_birth":"in","date_of_death":"veritatis","public_notes":"impedit","staff_notes":"deserunt","bio_filename":"sint"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "family_name": "John",
    "given_name": "Doe",
    "maiden_name": "voluptatem",
    "middle_name": "natus",
    "suffix": "ex",
    "keywords": "quis",
    "date_of_birth": "in",
    "date_of_death": "veritatis",
    "public_notes": "impedit",
    "staff_notes": "deserunt",
    "bio_filename": "sint"
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
`POST api/v1/names`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `family_name` | string |  optional  | optional The family name of the name.
        `given_name` | string |  optional  | optional The given name of the name.
        `maiden_name` | string |  optional  | optional The maiden name of the name.
        `middle_name` | string |  optional  | optional The middle name of the name.
        `suffix` | string |  optional  | optional The suffix of the name.
        `keywords` | string |  optional  | optional The keywords of the name.
        `date_of_birth` | string |  optional  | optional The date of birth of the name.
        `date_of_death` | string |  optional  | optional The date of death of the name.
        `public_notes` | string |  optional  | optional The public notes of the name.
        `staff_notes` | string |  optional  | optional The staff notes of the name.
        `bio_filename` | string |  optional  | optional The bio filename of the name.
    
<!-- END_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->

<!-- START_2f14d29bd7da846c5c64a1e07c08a19d -->
## Delete

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/names/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/names/3"
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

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Name.

<!-- END_2f14d29bd7da846c5c64a1e07c08a19d -->

#Projects


APIs for managing projects
<!-- START_d4bb0000cd4525b356d3f4e604741ee1 -->
## Browse

Retrieve a list of Projects

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
            "project_id": "111-5-585-156666",
            "name": "another test",
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
## Read

Retrieve the specified Project

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/3"
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
    "id": "10",
    "project_id": "111-5-585-156",
    "name": "another test",
    "description": "testing"
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/projects/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Project.

<!-- END_c0c7035d6f07233f5023f3108d569268 -->

<!-- START_fc1e4c1f87d2406ebf0d9350665d59e4 -->
## Edit

Update the specified Project

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/projects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"111-5-585-1566","name":"1800s Project","description":"maiores"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "111-5-585-1566",
    "name": "1800s Project",
    "description": "maiores"
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
`PATCH api/v1/projects/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Project.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `project_id` | string |  optional  | optional The project id of the Project.
        `name` | string |  optional  | optional The name of the Project.
        `description` | string |  optional  | optional The description of the Project.
    
<!-- END_fc1e4c1f87d2406ebf0d9350665d59e4 -->

<!-- START_e832cdeb3d8617c57febfca7405a7263 -->
## Add

Create a new Project

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"111-5-585-1566","name":"1800s Project","description":"distinctio"}'

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
    "project_id": "111-5-585-1566",
    "name": "1800s Project",
    "description": "distinctio"
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
    `project_id` | string |  required  | The project id of the Project.
        `name` | string |  required  | The name of the Project.
        `description` | required |  optional  | optional The description of the Project.
    
<!-- END_e832cdeb3d8617c57febfca7405a7263 -->

<!-- START_85c1605eb5b3323aa82926b6add7c133 -->
## Delete

Remove the specified Project

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/projects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects/3"
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

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Project.

<!-- END_85c1605eb5b3323aa82926b6add7c133 -->

<!-- START_8b9d872f016395ac37367b49ef763ef4 -->
## Browse Subjects

Retrieve subjects for a Project

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
## Add Subject

Add Subject to a Project

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
## Delete Subject

Remove subject from a Project

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
## Browse

Retrieve a list of Subjects

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
            "links": []
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
## Read

Retrieve the specified Subject

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3"
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
    "subject_name": "grandchild",
    "display_name": "this is a grandchild"
}
```
> Example response (404):

```json
{
    "message": "No query results for model"
}
```

### HTTP Request
`GET api/v1/subjects/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Subject.

<!-- END_5e15402500604bd4622bbff7103366c8 -->

<!-- START_7d8b60b8cc1fcf16b328476c1e8a5b05 -->
## Edit

Update the specified Subject

> Example request:

```bash
curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"subject_name":"sed","display_name":"exercitationem"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "subject_name": "sed",
    "display_name": "exercitationem"
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
`PATCH api/v1/subjects/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Subject.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `subject_name` | string |  optional  | optional The subject name of the Subject.
        `display_name` | string |  optional  | optional The display name of the Subject.
    
<!-- END_7d8b60b8cc1fcf16b328476c1e8a5b05 -->

<!-- START_34aba826805a0fc069bf7672b1ceae89 -->
## Add

Create a new Subject

> Example request:

```bash
curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"subject_name":"ut","display_name":"voluptas"}'

```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "subject_name": "ut",
    "display_name": "voluptas"
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
`POST api/v1/subjects`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `subject_name` | string |  optional  | optional The subject name of the Subject.
        `display_name` | string |  optional  | optional The display name of the Subject.
    
<!-- END_34aba826805a0fc069bf7672b1ceae89 -->

<!-- START_99bae6d5929e7514b230a0ae09d07d94 -->
## Delete

Remove the specified Subject

> Example request:

```bash
curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3"
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

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Subject.

<!-- END_99bae6d5929e7514b230a0ae09d07d94 -->

<!-- START_146806a2035ca7516f03a22a91a93c46 -->
## Browse Subject&#039;s Projects
Retrieve the projects for the specified subject

> Example request:

```bash
curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/3/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/subjects/3/projects"
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
[]
```

### HTTP Request
`GET api/v1/subjects/{id}/projects`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the Subject.

<!-- END_146806a2035ca7516f03a22a91a93c46 -->


