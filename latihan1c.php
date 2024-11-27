<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            font-size: 24px;
            font-weight: bold;
            width: 100px;
            height: 100px;
        }
        .empty {
            visibility: hidden;
        }
    </style>
</head>
<body>

<?php
    // Mendefinisikan variabel huruf
    $A = 'A';
    $B = 'B';
    $C = 'C';
?>

<div class="grid-container">
    <!-- Baris 1 -->
    <div class="grid-item"><?php echo $A; ?></div>
    <div class="grid-item empty"></div>
    <div class="grid-item empty"></div>
    
    <!-- Baris 2 -->
    <div class="grid-item"><?php echo $A; ?></div>
    <div class="grid-item"><?php echo $B; ?></div>
    <div class="grid-item empty"></div>
    
    <!-- Baris 3 -->
    <div class="grid-item"><?php echo $A; ?></div>
    <div class="grid-item"><?php echo $B; ?></div>
    <div class="grid-item"><?php echo $C; ?></div>
</div>

</body>
</html>