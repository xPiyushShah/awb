
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User List</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Refer ID</th>
            <th>Amount </th>
            <th>Wallet</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?> 
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['referid']; ?></td>
            <td><?php echo $user['amount']; ?></td>
            <td><?php echo $user['wallet']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
