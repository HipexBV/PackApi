# EOL
This project is end of life and will no longer be maintained or updated. Please consider using https://platform-api.hipex.io/.

# PackApi
Wrapper around Hipex hosting platform API. Have a look at https://www.hipex.io/. The better part of this library
is generated from the File generated from [https://service.hipex.io/hipex-pack-api](https://service.hipex.io/hipex-pack-api) GraphQL endpoint.

For a more extended documentation and API explorer please check out [https://service.hipex.io/hipex-pack-api/docs/](https://service.hipex.io/hipex-pack-api/docs/).

## Installation
Any implementation of `psr/log-implementation` is required https://packagist.org/providers/psr/log-implementation. For Magento 2 `monolog/monolog` is already installed.

```bash
composer require hipex/pack-api
```

## Usage
On first usage a login is required. This will store a token in your home directory (~/.hipex-console-auth) or if set a token file provided.
After login you can call the queries and mutations. When calling queries without login first the API will just return without result or on mutations throw an exception.

**Login**
```php
$client = new \HipexPackApi\Client();
$client->login('info@example.com', 'password');
```

**Call query / mutation**
In this example we will fetch a list of all servers and for each server we will fetch the domains on the server. There is a much more efficient way
of making the same API call in GraphQL without using the API wrapper. For this have a look at the extended API documentation.
```php
$servers = $client->queryServer();
foreach ($servers as $server) {
    $filter = new \HipexPackApi\Generated\Schema\Input\FilterInput();
    $filter->setField('server.id');
    $filter->value($server->getId());
    
    $domains = $client->queryDomain($filter);    
} 
```

**Running GraphQL Query**
```php
$query = '
query Server {
    Server {
        id
        name
        domains {
            id
            domain
            letsEncryptSsl
            backup
        }
    }
}
';
$serversAndDomains = $client->raw($query); 
```


## Issues
For issues please include at least the following parts:
- [ ] PHP version used
- [ ] Code example reproducing the issue
- [ ] Expected result of the code
- [ ] Actual result of the code

## Versions
For version Semantic Versioning is followed (https://semver.org/). In short  Given a version number MAJOR.MINOR.PATCH, increment the:
1. MAJOR version Backwards-compatible breaks.
2. MINOR version Added functionality in a backwards-compatible manner
3. PATCH version Bug fixes
