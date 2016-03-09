# JSON5 for PHP
JSON5 for PHP

## about JSON5

- http://json5.org
- https://github.com/aseemk/json5

## JSON5 for PHP

- https://github.com/kujirahand/JSON5-PHP

## Sample

sample code

```
<?php
require 'json5.php';
$json5 = file_get_contents("test.json5");
$a = json5_decode($json5);
var_dump($a);
```

file: test.json5

```
// json5 sample
{
  // comment
  /* comment */
  name: "Lucy",
  age: .8,
}
```

