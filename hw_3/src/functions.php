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
            ['name' => 'The Dead Souls', 'autor' => 'Gogol', 'pages' => 230],
            ['name' => 'Idiot', 'autor' => 'Dostoyevsky', 'pages' => 330],
            ['name' => "The capitan's daughter", 'autor' => 'Pushkin', 'pages' => 230],
        ]

    ];

    $json_data = json_encode($library);
    file_put_contents('output.json', $json_data);
    $decide = 'w';
    if (rand(1, 2) == '1') {
        $decide = 'w';
        $fp = fopen('output.json', $decide);
        file_put_contents('output2.json', $fp);


    } else {
        $decide = 'r';
        $fp = fopen('output.json', $decide);
        file_put_contents('output2.json', $fp);
    }

    $output = file_get_contents('output.json');
    $output2 = file_get_contents('output2.json');


}

// task 3 в процессе

function task3()
{
    $array = [];
    for ($i = 0; $i <= 50; $i++) {
        $number = rand(1, 100);
        $array[$i] = $number;

    }
    print_r($array);
}
