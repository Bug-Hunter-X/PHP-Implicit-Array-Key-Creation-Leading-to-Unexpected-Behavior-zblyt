To avoid this issue, explicitly check for the existence of keys before accessing them or use functions that gracefully handle missing keys. Here's an improved version:

```php
<?php
$myArray = [];
$myArray["key1"] = "value1";
$myArray[1] = "value2";

if (array_key_exists(0, $myArray)) {
  echo $myArray[0];
} else {
  echo "Key 0 does not exist";
}

//Alternatively using isset

if (isset($myArray[0])) {
    echo $myArray[0];
} else {
    echo "Key 0 does not exist";
}
?>
```
This version explicitly checks if key `0` exists before attempting to access it, preventing unexpected output and potential errors.