<?php
//giving a html tag a specefic class in certain conditions
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <section <?php if (is_page('page-slug' or 'parent=about-us')) echo 'class="certain_css"' ?>>
        <div>
            <p>salam</p>
        </div>
    </section>
</body>
</html>