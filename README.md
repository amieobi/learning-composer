# Learning Composer

I am learning how to use composer

## Installation

composer create-project amaka/learning-composer

### Usage

```php
<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
    "name" => "John",
    "course" => "English",
    "level" => 200
);

new JsonResponse("Ok", "", $student);
```

### Param 1 (Required)

1. Success or OK - 200 HTTP Status
2. Unauthorized - 401 HTTP Status
3. Exception - 500 HTTP Status (Internal Server Error)

### Param 2 (Optional)

String - The return message. Use empty quote if unavailable

### Param 3 (Optional)

Array - Array of Data
