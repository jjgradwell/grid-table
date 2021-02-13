<!doctype html>
<html lang='en-US'>
<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=yes' />
  <title>dbGridTable</title>
</head>

<body>
<section class='table'>
<?php
$fmt = '    <div>%s</div>';

$data = json_decode( file_get_contents( './books.json' ), 1 )['books'];
foreach( $data as $id => $book ) {
  $arr[] = '  <article class="item">';
  $arr[] = sprintf( $fmt, $book['isbn'] );
  $arr[] = sprintf( $fmt, $book['title'] );
  $arr[] = sprintf( $fmt, $book['author'] );
  $arr[] = sprintf( $fmt, $book['description'] );
  $arr[] = '  </article>';
  echo implode( PHP_EOL, $arr ) . PHP_EOL;
  $arr = [];
}
?>
</section>

</body>


<style>
:root { font-size: 1em; line-height: 1.5; font-family: Arial; }
*, *::before, *:after { font-family: inherit; margin: 0; padding: 0; }

.table {
  margin: 0.5em;
  display: grid;
  grid-template-columns: 1fr;
  grid-auto-rows: auto;
  background: #eee;
  gap: 2px;
  border: 2px solid #eee;
}

.item {
  display: grid;
  gap: 2px;
  grid-template-columns: 14ch minmax( 6em, 12em ) minmax( 6em, 10em ) 1fr;
}
.item > div { padding: 0.125em; background: white; }
</style>
