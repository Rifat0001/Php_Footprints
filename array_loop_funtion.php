<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Demo</title>
    <style>
      body{
      }
      </style>
  </head>
  <body>
      <?php
      $books = [
        [
          'name' => 'Mathematic',
          'author' => 'Andy kol',
          'purchaseUrl' => 'http://example.com'
        ],
        [
          'name' => 'Chemistry',
          'author' => 'Andy kol',
          'purchaseUrl' => 'http://example.com'
        ],
        [
          'name' => 'Physics',
          'author' => 'Dol den',
          'purchaseUrl' => 'http://example.com'
        ],
        ];

        function filterByAuthor($books,$author){
          $filteredBooks = [];
          foreach($books as $book){
            if($book['author']===$author){
              $filteredBooks[] = $book;
            }
          }
          return $filteredBooks;
        }
      ?>
      <ul>
      <?php foreach (filterByAuthor($books, 'Andy kol') as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> 
                    - (<?= $book['author'] ?>) 
                    - (<?= $book['purchaseUrl'] ?>) 
                </a>
            </li>
        <?php endforeach; ?>
      </ul>
  </body>
</html>

