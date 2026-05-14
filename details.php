<?php include "header_inc.php"; ?>
    <main>

        <?php
        include "classes.php";
        $db = new DB();
        $exhibits = $db->execute('SELECT * FROM exhibits WHERE id = ' . $_GET['id'] . ';')[0];

        if (isset($exhibits)) {
            ?>
            <article>
                <h2><?php echo $exhibits['title'] ?></h2>
                <p><?php echo $exhibits['description'] ?></p>
                <img alt="Picture" src="gallery/<?php echo $exhibits['image'] ?>"
                     fetchpriority="high" decoding="sync">
            </article>
            <?php
        } else {
            echo "<h2>Error! No Article Found</h2>";
        }
        ?>
        <a href="index.php">Back to Index</a>

    </main>
<?php include "footer_inc.php"; ?>