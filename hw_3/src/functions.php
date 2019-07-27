<?php

//task 1

function task1($xml_file)
{
    $fileData = file_get_contents($xml_file);
    $xml = new SimpleXMLElement($fileData);
    echo '<div class="container">';

    foreach ($xml->Address as $address) {
        echo '<div class="col-6">';
        echo 'Name: ' . $address->Name . '</br>';
        echo 'Addrees: ' . $address->Street . '</br>';
        echo 'City: ' . $address->City . '</br>';
        echo 'State: ' . $address->State . '</br>';
        echo 'ZIP: ' . $address->Zip . '</br>';
        echo 'Country: ' . $address->Country . '</br>';


        foreach ($xml->DeliveryNotes as $notes) {
            echo 'Notes: ' . $notes . ' <br><br>';
        }

        echo '</div>';
    }


    foreach ($xml->Items->Item as $item) {
        echo '<div class="col-6">';
        echo 'Product Name: ' . $item->ProductName . '<br>';
        echo 'Quantity: ' . $item->Quantity . '<br>';
        echo 'Price: ' . $item->USPrice . '<br>';
        echo 'Comment: ' . $item->Comment . '<br><br>';
        echo '</div>';

    }

    echo '</div>';


}

// task 2

function task2()
{
    $library = [
        'books' => ['name' => 'The Dead Souls', 'author' => 'Gogol', 'pages' => 230]



    ];

    $json_data = json_encode($library);
    file_put_contents('output.json', $json_data);

    $arr = file_get_contents('output.json');
    $arr1 = json_decode($arr, true);
    $rand = rand(0, 1);

    if ($rand) {
        $arr1['books']['price'] = 300;
        echo 'Массив был изменен';
    }
    $json_data2 = json_encode($arr1);

    file_put_contents('output2.json', $json_data2);

    $openOutput = file_get_contents('output.json');
    $openOutput2 = file_get_contents('output2.json');

    $decodOutput = json_decode($openOutput, true);
    $decodOutput2 = json_decode($openOutput2, true);


    echo '<pre>';
    print_r($decodOutput);
    echo '</pre>';


    echo '<pre>';
    print_r($decodOutput2);
    echo '</pre>';


    $diff = array_diff_assoc($decodOutput, $decodOutput2);

    if (!empty($diff)) {
        echo 'Разница в массивах: ';
        echo '<pre>';
        print_r($diff);
        echo '</pre>';
    }

}

// task 3

function task3()
{
    $array = [];
    for ($i = 0; $i <= 50; $i++) {
        $number = rand(1, 100);
        $array[$i] = $number;

    }


    $randomNumbers = fopen('randomnumbers.csv', 'w');
    fputcsv($randomNumbers, $array, ',');
    $even = fopen('randomnumbers.csv', 'r');
    while ($str = fgetcsv($even, 1000 * 1024, ',')) {
        foreach ($str as $item) {
            if ($item % 2 === 0) {
                echo $item . ' ';
            }

        }
    }
    echo '<br>';
}

// task 4

function task4()
{
    $fp = fopen('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json', 'r');
    file_put_contents('filejson.json', $fp);
    $file = file_get_contents('filejson.json');
    $obj = json_decode($file, true);
    echo 'Page id is: ' . $obj['query']['pages']['15580374']['pageid'] . '<br>';
    echo 'Page title is : ' . $obj['query']['pages']['15580374']['title'];


}