DOCUMENTATION
=============

1) Adresse

The API Adresse is available [here](https://geo.api.gouv.fr/adresse)

Search

```php
// Create an Adresse provider.
$provider = new AdresseProvider();

// Create a Search request.
$model = new SearchRequest("address");

// Call the API and get the response.
$response = $provider->search($model);

// Handle the response.
// ...
```

> IMPORTANT NOTICE: $response is a [FeatureCollection](https://github.com/webeweb/geo-json-library/blob/master/doc/index.md).

Reverse

```php
// Create an Adresse provider.
$provider = new AdresseProvider();

// Create a Reverse request.
$model = new ReverseRequest(49.897443, 2.290084);

// Call the API and get the response.
$response = $provider->reverse($model);

// Handle the response.
// ...
```

> IMPORTANT NOTICE: $response is a [FeatureCollection](https://github.com/webeweb/geo-json-library/blob/master/doc/index.md).

Search CSV

```php
// Create an Adresse provider.
$provider = new AdresseProvider();

// Create a Search CSV request.
$model = new SearchCsvRequest("/path/to/file.csv");

// Call the API and get the response.
$response = $provider->searchCsv($model);

// Handle the response.
foreach($response->getAdresses() as $current) {

	foreach($current->getColumns() as $k => $v) {
		// ...
	}

	$current->getCity();
	$current->getCityCode();
	$current->getContext();
	$current->getDistance();
	$current->getDistrict();
	$current->getHouseNumber();
	$current->getId();
	$current->getLabel();
	$current->getLatitude();
	$current->getLongitude();
	$current->getName();
	$current->getOldCity();
	$current->getOldCityCode();
	$current->getPostcode();
	$current->getScore();
	$current->getStreet();
	$current->getType();
}
```

Reverse CSV

```php
// Create an Adresse provider.
$provider = new AdresseProvider();

// Create a Reverse CSV request.
$model = new ReverseCsvRequest("/path/to/file.csv");

// Call the API and get the response.
$response = $provider->reverseCsv($model);

// Handle the response.
foreach($response->getAdresses() as $current) {

	foreach($current->getColumns() as $k => $v) {
		// ...
	}

	$current->getCity();
	$current->getCityCode();
	$current->getContext();
	$current->getDistance();
	$current->getDistrict();
	$current->getHouseNumber();
	$current->getId();
	$current->getLabel();
	$current->getLatitude();
	$current->getLongitude();
	$current->getName();
	$current->getOldCity();
	$current->getOldCityCode();
	$current->getPostcode();
	$current->getScore();
	$current->getStreet();
	$current->getType();
}
```
