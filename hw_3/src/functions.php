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
        'books' => [
            ['name' => 'The Dead Souls', 'author' => 'Gogol', 'pages' => 230]
        ]


    ];

    $json_data = json_encode($library);
    file_put_contents('output.json', $json_data);

    $arrayOpen = file_get_contents('output.json');
    $rand =  rand(0,1);

    if($rand){
        $arrayOpen['name']= 'Oblomov';
    }
    $json_data2 = json_encode($arrayOpen);
    file_put_contents('output2.json', $json_data2);

    $openOutput = file_get_contents('output.json');
    $openOutput2 = file_get_contents('output2.json');

    $decodOutput = json_decode($openOutput, true);
    $decodOutput2 = json_decode($openOutput2, true);

    print_r($decodOutput);
    echo '<br>';
    print_r($decodOutput2);

    $diff = array_diff_assoc($decodOutput, $decodOutput2);

    if(!empty($diff)){
        echo 'Разница в массивах: ';
        print_r($diff);
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

function task4() {
$fp = fopen('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json' , 'r');
print_r($fp);

}