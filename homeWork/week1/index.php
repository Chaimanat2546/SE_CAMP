<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm" rel="stylesheet">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>Multiplication table of  <?php echo $multi_x ?></h1>
    <div class="cylinder"></div>
    <div class="table">
        <table>
            <tbody>
                <?php for ($i = 1; $i <= 24; $i++) { ?>
                    <tr>
                        <td><?php echo $multi_x; ?></td>
                        <td><?php echo 'x'; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo '='; ?></td>
                        <td><?php echo $multi_x * $i; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <style>
        body {
            background-size: cover;
            background-image: url(https://th.bing.com/th/id/R.edc04621b3c1e9595f98c744ec156798?rik=RSCH4zSdGHjnpw&pid=ImgRaw&r=0);
        }

        h1 {
            font-family: Charm;
            text-shadow: 5px 5px #558ABB;
            margin-left: 560px;
            margin-right: 560px;
            margin-top: 45px;
            font-size: 80px;
            color: wheat;
        }

        .table {
            width: 280px;
            height: 550px;
            overflow-y: scroll;
            background-color: #f8e0b4;
            padding: 20px;
            margin-left: 760px;
            margin-top: 10px;
            position: absolute;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .cylinder {
            box-shadow: #558ABB 1px 0px 10px 4px, white 0px 0px 10px 10px;
            position: absolute;
            width: 420px;
            height: 592px;
            margin-left: 700px;
            margin-top: 10px;
            background-color: #f8e0b4;
            border-radius: 50px 50px / 20px 20px;
        }
    </style>
</body>

</html>