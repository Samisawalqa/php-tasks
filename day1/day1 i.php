<?php 


/////task 1


// $cities = ['NewYork',
// 'Tokyo',
// 'London',
// 'Paris',
// 'Sydney',
// 'Cairo',
// 'Beijing',
// 'Mumbai',
// 'Rio de Janeiro',
// 'Toronto'];

// for ($i = count($cities) - 1 ; $i >= 0 ; $i--){
//     echo $cities[$i] . '<br>';
// }

// echo array_search('Paris' , $cities);

// unset($cities[array_search('Cairo', $cities)]);
// print_r($cities)

// $firstThree = array_slice($cities , 0 , 3);
// print_r($firstThree);


////// task 2

// $products = array(
//     "Orange" => 1.25,
//     "Strawberry" => 3.00,
//     "Banana" => 0.75,
//     "Grapes" => 2.50,
//     "Apple" => 1.50
// );

// ksort($products);
// print_r($products);

// asort($products);
// print_r($products);

// $sum = 0;
// foreach($products as $product => $price){
//     $sum += $price;
// }
// echo $sum;

// arsort($products);
// print_r(array_slice($products , 0 , 1));



/// task 3 


// $books = [
//     ["title" => "The Help", "author" => "Kathryn Stockett", "year" => 2009],
//     ["title" => "The Girl with the Dragon Tattoo", "author" => "Stieg Larsson", "year" => 2005],
//     ["title" => "The Hunger Games", "author" => "Suzanne Collins", "year" => 2008],
//     ["title" => "Gone Girl", "author" => "Gillian Flynn", "year" => 2012],
//     ["title" => "The Fault in Our Stars", "author" => "John Green", "year" => 2012]
// ];

// foreach($books as $book){
//     if($book['year'] > 2010){
//         print_r($book);
//     }
// };

// $books[] = ["title" => "Room", "author" => "Emma Donoghue", "year" => 2010];
// print_r($books);

// $books[2]['author'] = 'abdullah';
// print_r($books);

// $titles = array();
// foreach($books as $book){
//     $titles[] = $book['title'];
// };
// asort($titles);
// $sortedTitles = array_values($titles);
// // print_r($sortedTitles);
// $sortedBooks = array();

// for($i = 0; $i < count($sortedTitles) ; $i++){
//     foreach ($books as $book){
//         if($sortedTitles[$i] == $book['title']){
//             // print_r($book['title'].'<br>');
//             // echo $sortedTitles[$i];
//             $sortedBooks[] = $book;
//         };
//     };
// }
// print_r($sortedBooks);


?>