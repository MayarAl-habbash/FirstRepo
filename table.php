<?php
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">
    <h3 class="mb-4 text-center" style="font-weight: 900; color: black;">Students List</h3>
    <table class="table table-bordered table-striped table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>GAP</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($students as $student): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $student['stdNo']; ?></td>
                    <td><?= $student['stdName']; ?></td>
                    <td><?= $student['stdEmail']; ?></td>
                    <td><?= $student['stdGAP']; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr style="background-color:#ffcccb; color:#000;">
                <td colspan="5" class="fw-bold">Student number: <?= count($students); ?></td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
