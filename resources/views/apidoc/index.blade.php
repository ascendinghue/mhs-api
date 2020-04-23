<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.</p>
<!-- END_INFO -->
<h1>Aliases</h1>
<p>APIs for managing aliases</p>
<!-- START_cfd537a33df77d89af88a3218de5584e -->
<h2>Browse</h2>
<p>Retrieve a list of all available aliases</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/aliases</code></p>
<!-- END_cfd537a33df77d89af88a3218de5584e -->
<!-- START_7b56a1d63dd44cd0375d1a340d4f631e -->
<h2>Read</h2>
<p>Retrieve a specific alias</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": "3",
    "family_name": "Jefferson",
    "type": "role",
    "name_id": 6
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/aliases/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the Alias.</td>
</tr>
</tbody>
</table>
<!-- END_7b56a1d63dd44cd0375d1a340d4f631e -->
<!-- START_dcaf040745d3176c01ff334ee050609e -->
<h2>Edit</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name_id":1,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"id","public_notes":"velit","staff_notes":"nesciunt"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    "role": "id",
    "public_notes": "velit",
    "staff_notes": "nesciunt"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/aliases/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the Alias.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name_id</code></td>
<td>integer</td>
<td>optional</td>
<td>optional The id of the name.</td>
</tr>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>optional</td>
<td>optional The type of alias.</td>
</tr>
<tr>
<td><code>family_name</code></td>
<td>string</td>
<td>optional</td>
<td>optional The family name for the alias.</td>
</tr>
<tr>
<td><code>given_name</code></td>
<td>string</td>
<td>optional</td>
<td>optional The given name for the alias.</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
<td>optional The middle name for the alias.</td>
</tr>
<tr>
<td><code>suffix</code></td>
<td>string</td>
<td>optional</td>
<td>optional The suffix for the alias.</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>optional The title for the alias.</td>
</tr>
<tr>
<td><code>role</code></td>
<td>string</td>
<td>optional</td>
<td>optional The role for the alias.</td>
</tr>
<tr>
<td><code>public_notes</code></td>
<td>text</td>
<td>optional</td>
<td>optional The public notes for the alias.</td>
</tr>
<tr>
<td><code>staff_notes</code></td>
<td>text</td>
<td>optional</td>
<td>optional The staff notes for the alias.</td>
</tr>
</tbody>
</table>
<!-- END_dcaf040745d3176c01ff334ee050609e -->
<!-- START_0e0a5bf73fdd990c73308a946ee2ac06 -->
<h2>Add</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/aliases" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name_id":3,"type":"role","family_name":"Buren","given_name":"Martin","middle_name":"Van","suffix":"Mr.","title":"President","role":"nostrum","public_notes":"perspiciatis","staff_notes":"veritatis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    "role": "nostrum",
    "public_notes": "perspiciatis",
    "staff_notes": "veritatis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/aliases</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name_id</code></td>
<td>integer</td>
<td>required</td>
<td>The id of the name.</td>
</tr>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>required</td>
<td>The type of alias.</td>
</tr>
<tr>
<td><code>family_name</code></td>
<td>string</td>
<td>required</td>
<td>The family name for the alias.</td>
</tr>
<tr>
<td><code>given_name</code></td>
<td>string</td>
<td>optional</td>
<td>optional The given name for the alias.</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
<td>optional The middle name for the alias.</td>
</tr>
<tr>
<td><code>suffix</code></td>
<td>string</td>
<td>optional</td>
<td>optional The suffix for the alias.</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>optional The title for the alias.</td>
</tr>
<tr>
<td><code>role</code></td>
<td>string</td>
<td>optional</td>
<td>optional The role for the alias.</td>
</tr>
<tr>
<td><code>public_notes</code></td>
<td>text</td>
<td>optional</td>
<td>optional The public notes for the alias.</td>
</tr>
<tr>
<td><code>staff_notes</code></td>
<td>text</td>
<td>optional</td>
<td>optional The staff notes for the alias.</td>
</tr>
</tbody>
</table>
<!-- END_0e0a5bf73fdd990c73308a946ee2ac06 -->
<!-- START_03b79615cdc57d7ec10e04ab8f0d0e25 -->
<h2>Delete</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/aliases/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/aliases/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the Alias.</td>
</tr>
</tbody>
</table>
<!-- END_03b79615cdc57d7ec10e04ab8f0d0e25 -->
<!-- START_cd980cb4eac119a960b8fb8e1958a1e7 -->
<h2>Retrieve the name for an Alias</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/aliases/1/name" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/aliases/{id}/name</code></p>
<!-- END_cd980cb4eac119a960b8fb8e1958a1e7 -->
<h1>Links</h1>
<p>APIs for managing links</p>
<!-- START_5abf710e926abfce98a2456aa6b223f5 -->
<h2>Retrieve all for model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/links" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/links</code></p>
<!-- END_5abf710e926abfce98a2456aa6b223f5 -->
<!-- START_61603de006810d4d80d39ef53695ac09 -->
<h2>Retrieve the model for the given ID.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/links/{id}</code></p>
<!-- END_61603de006810d4d80d39ef53695ac09 -->
<!-- START_b5208241d490e2668223c8fa6eed60c2 -->
<h2>Update the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/links/{id}</code></p>
<!-- END_b5208241d490e2668223c8fa6eed60c2 -->
<!-- START_4a3fbb251b3780a0b3a359c3276aa216 -->
<h2>Store a new model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/links" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/links</code></p>
<!-- END_4a3fbb251b3780a0b3a359c3276aa216 -->
<!-- START_3e24df97e7dbb5049e63f12aeb042e46 -->
<h2>Delete the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/links/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/links/{id}</code></p>
<!-- END_3e24df97e7dbb5049e63f12aeb042e46 -->
<h1>Names</h1>
<p>APIs for managing names</p>
<!-- START_1e0430434c304b4be8f4ee1a04e6a251 -->
<h2>Retrieve all for model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/names</code></p>
<!-- END_1e0430434c304b4be8f4ee1a04e6a251 -->
<!-- START_6f2a2899737a3c1cdc6f95308d1821db -->
<h2>Retrieve the model for the given ID.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/names/{id}</code></p>
<!-- END_6f2a2899737a3c1cdc6f95308d1821db -->
<!-- START_c6c410a18c77cd6b7edf849f896c9c10 -->
<h2>Update the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/names/{id}</code></p>
<!-- END_c6c410a18c77cd6b7edf849f896c9c10 -->
<!-- START_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->
<h2>Store a new model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/names</code></p>
<!-- END_3c0e59fe8a0631e8f1b4cb6e6fddb6ac -->
<!-- START_2f14d29bd7da846c5c64a1e07c08a19d -->
<h2>Delete the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/names/{id}</code></p>
<!-- END_2f14d29bd7da846c5c64a1e07c08a19d -->
<h1>Project Lists</h1>
<p>APIs for managing project lists</p>
<!-- START_f1b8eb2943d95c92b42a3439d853d551 -->
<h2>Retrieve all for model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/lists</code></p>
<!-- END_f1b8eb2943d95c92b42a3439d853d551 -->
<!-- START_1b5803b0b970d515247e13c48bfe44b4 -->
<h2>Retrieve the model for the given ID.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/lists/{id}</code></p>
<!-- END_1b5803b0b970d515247e13c48bfe44b4 -->
<!-- START_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->
<h2>Update the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/lists/{id}</code></p>
<!-- END_1023d20bc3b0d7b7ba6ea1aecc22c4ca -->
<!-- START_f88b33dc550222c72ee0a4cf694a9a32 -->
<h2>Store a new model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/lists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/lists</code></p>
<!-- END_f88b33dc550222c72ee0a4cf694a9a32 -->
<!-- START_1001bf95d9727bed33119c4e7901ecfd -->
<h2>Delete the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/lists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/lists/{id}</code></p>
<!-- END_1001bf95d9727bed33119c4e7901ecfd -->
<h1>Projects</h1>
<p>APIs for managing projects</p>
<!-- START_d4bb0000cd4525b356d3f4e604741ee1 -->
<h2>Retrieve all Projects</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects</code></p>
<!-- END_d4bb0000cd4525b356d3f4e604741ee1 -->
<!-- START_c0c7035d6f07233f5023f3108d569268 -->
<h2>Retrieve the specified Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{id}</code></p>
<!-- END_c0c7035d6f07233f5023f3108d569268 -->
<!-- START_fc1e4c1f87d2406ebf0d9350665d59e4 -->
<h2>Update the specified Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/projects/{id}</code></p>
<!-- END_fc1e4c1f87d2406ebf0d9350665d59e4 -->
<!-- START_e832cdeb3d8617c57febfca7405a7263 -->
<h2>Store a new Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"123-4567-89","name":"in","description":"quam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://mhs-api.azurewebsites.net/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "123-4567-89",
    "name": "in",
    "description": "quam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project_id</code></td>
<td>string</td>
<td>required</td>
<td>The id of the project.</td>
</tr>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>The name of the project.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>required</td>
<td>optional</td>
<td>The description of the project.</td>
</tr>
</tbody>
</table>
<!-- END_e832cdeb3d8617c57febfca7405a7263 -->
<!-- START_85c1605eb5b3323aa82926b6add7c133 -->
<h2>Delete the specified Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/projects/{id}</code></p>
<!-- END_85c1605eb5b3323aa82926b6add7c133 -->
<!-- START_8b9d872f016395ac37367b49ef763ef4 -->
<h2>Retrieve subjects for a Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{id}/subjects</code></p>
<!-- END_8b9d872f016395ac37367b49ef763ef4 -->
<!-- START_0bb4aaae1fd132c511525815304354f2 -->
<h2>Add Subject to a Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{id}/subjects</code></p>
<!-- END_0bb4aaae1fd132c511525815304354f2 -->
<!-- START_1276459bba6bc7a6f4396200acdf2741 -->
<h2>Remove subject from a Project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/projects/1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/projects/{project_id}/subjects</code></p>
<!-- END_1276459bba6bc7a6f4396200acdf2741 -->
<h1>Subjects</h1>
<p>APIs for managing subjects</p>
<!-- START_451cd228b1ef6fa32ccba39a38733061 -->
<h2>Retrieve all for model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/subjects</code></p>
<!-- END_451cd228b1ef6fa32ccba39a38733061 -->
<!-- START_5e15402500604bd4622bbff7103366c8 -->
<h2>Retrieve the model for the given ID.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/subjects/{id}</code></p>
<!-- END_5e15402500604bd4622bbff7103366c8 -->
<!-- START_7d8b60b8cc1fcf16b328476c1e8a5b05 -->
<h2>Update the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/v1/subjects/{id}</code></p>
<!-- END_7d8b60b8cc1fcf16b328476c1e8a5b05 -->
<!-- START_34aba826805a0fc069bf7672b1ceae89 -->
<h2>Store a new model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://mhs-api.azurewebsites.net/api/v1/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/subjects</code></p>
<!-- END_34aba826805a0fc069bf7672b1ceae89 -->
<!-- START_99bae6d5929e7514b230a0ae09d07d94 -->
<h2>Delete the specified model.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://mhs-api.azurewebsites.net/api/v1/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/subjects/{id}</code></p>
<!-- END_99bae6d5929e7514b230a0ae09d07d94 -->
<!-- START_146806a2035ca7516f03a22a91a93c46 -->
<h2>Retrieve the projects for the specified subject</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://mhs-api.azurewebsites.net/api/v1/subjects/1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/subjects/{id}/projects</code></p>
<!-- END_146806a2035ca7516f03a22a91a93c46 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>