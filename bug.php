```php
function incrementArrayValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index]++;
}

$myArray = [1, 2, 3];
incrementArrayValue($myArray, 5); // Trying to increment a non-existing index
echo json_encode($myArray);
```