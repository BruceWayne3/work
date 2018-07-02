<?php
$json = file_get_contents(__DIR__ . '/phonebook.json');
$data = json_decode($json, true);
?>

<html>
<head>
    <tittle>Телефонная книжка</tittle>
</head>
<body>
<table>
    </tr>
         <td>Имя</td>
         <td>Фамилия</td>
         <td>Адрес</td>
         <td>Номер телефона</td>
     </tr>
     <?php foreach ($data as $item) { ?>
         <tr>
             <td><?php echo $item['firstName']; ?></td>
             <td><?php echo $item['lastName']; ?></td>
             <td><?php echo $item['address']; ?></td>
             <td><?php echo $item['phoneNumber']; ?></td>
         </tr>
     <?php } ?>
</table>
</body>
</html>