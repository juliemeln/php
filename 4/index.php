
<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
    <style>
        .list{
            list-style-type: none;
            width: 80%;
            margin: 0;
            padding:0;
            border: 1px solid;
        }

        li{
            display: inline-block;
            padding-right: 20px;
            width: 120px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<?php
// считываем данные из файла
$xml = simplexml_load_file('data.xml');
// проходимся по каждому item и выводим на экран

echo '<ul class="list">';
echo '<li>'."Address".'</li>';
echo '<li>'."Name".'</li>';
echo '<li>'."Street".'</li>';
echo '<li>'."City".'</li>';
echo '<li>'."State".'</li>';
echo '<li>'."Zip".'</li>';
echo '<li>'."Country".'</li>';
echo '</ul>';
foreach ($xml->Address as $address)
{


    echo '<ul class="list">';
    echo '<li>'.$address['Type'].'</li>';
    echo '<li>'."$address->Name" .'</li>';
    echo '<li>'."$address->Street" .'</li>';
    echo '<li>'."$address->City".'</li>';
    echo '<li>'."$address->State".'</li>';
    echo '<li>'."$address->Zip".'</li>';
    echo '<li>'."$address->Country".'</li>';
    echo '</ul>';
}
echo "Delivery notes: ".$xml->DeliveryNotes;

echo '<ul class="list">';
echo '<li>'."PartNumber".'</li>';
echo '<li>'."Quantity".'</li>';
echo '<li>'."USPrice".'</li>';
echo '<li>'."Comment".'</li>';
echo '</ul>';

foreach ($xml->Items->Item as $item)
{
    echo '<ul class="list">';
    echo '<li>'.$item['PartNumber'].'</li>';
    echo '<li>'."$item->ProductName" .'</li>';
    echo '<li>'."$item->Quantity" .'</li>';
    echo '<li>'."$item->USPrice" .'</li>';
    echo '<li>'."$item->Comment" .'</li>';
    echo '</ul>';
}
?>
</body>
</html>
