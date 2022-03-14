<?php
session_start();
include_once('config.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/app.css">
    <title>Document</title>
</head>
<body>
<header class="mx-auto w-full bg-purple-900 text-purple-300 flex">
    <div>
        <p class=""><a class="btn-primary flex-1" href="#">link1</a></p>
        <p class=""><a class="btn-primary flex-1" href="#">link2</a></p>
        <p class=""><a class="btn-primary flex-1" href="#">link3</a></p>
    </div>
</header>

<?php
$books = $collection ->find([]);
$bookCount = $collection->countDocuments([]);



?>

<main class="w-5/6 mx-auto bg-stone-100 h-full p-4 pt-8">
    <h2 class="rounded-t mt-16 mb-2 p-2 text-4xl text-white bg-pink-700 opy-4 w-full sticky bottom-0">headings 2</h2>
    <div class="px-4">
        <p>hello</p>

        <table class="table-auto w-full py-4 px-2 border border-1 border-gray-400 my-auto mx-auto">
            <thead>
            <tr class="bg-indigo-400 text-white">
                <th class="p-1 text-left">Row</th>
                <th class="p-1 text-left">Title</th>
                <th class="p-1 text-left">Authors</th>
                <th class="p-1 text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($books as $aBook) {
            ?>


            <tr class="bg-stone-200 text-black">
                <td class="p-2 m-0 border border-0 border-r-1 border-gray-500">cell1</td>
                <td class="p-2 m-0 border border-0 border-r-1 border-gray-500"><?= $aBook -> name ?></td>
                <td class="p-2 m-0 border border-0 border-r-1 border-gray-500">
                    <?php
                        $authors = $aBook -> author;
                        foreach ($authors as $anAuthor){

                        ?>
                    <?= $anAuthor -> name; ?> <br>

                    <?php
                    }

                    ?>

                    </td>
                <td class="p-2 m-0 border border-0 border-r-1 border-gray-500">cell4</td>
            </tr>
            </tbody>
<!--            tfoot>tr>td>[colspan=4]-->
            <tfoot>
            <tr>
                <td>
                    <div class="col-span-5">
                        number of documents: <?= $bookCount ?>
                    </div>
                </td>
            </tr>
            </tfoot>

        <?php
            } ?>
        </table>
    </div>

</main>

<footer class="bg-indigo-900 text-indigo-300 text-sm flex p-8 pt-16">
    <div class="flex-1">
        <p><a href="#">link1</a></p>
        <p><a href="#">link2</a></p>
    </div>
    <div class="flex-1">
        <p><a href="#">link1</a></p>
        <p><a href="#">link2</a></p>
    </div>
</footer>
</body>
</html>