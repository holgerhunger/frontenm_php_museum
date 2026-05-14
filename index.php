<?php include "header_inc.php"; ?>
    <main>
        <ul>
            <?php
            include "classes.php";
            $db = new DB();
            $exhibits = $db->execute('SELECT * FROM exhibits');

            if (isset($exhibits)) {
                foreach ($exhibits as $item):
                    ?>
                    <li>
                        <h3>
                            <a href="details.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a>
                        </h3>
                    </li>
                <?php
                endforeach;
            }
            ?>
        </ul>
    </main>
<?php include "footer_inc.php"; ?>