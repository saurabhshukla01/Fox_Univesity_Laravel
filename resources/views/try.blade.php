<html>
<body>
<?php foreach ($courses as $game) : ?>
    <li><?= $game->course_name; ?></li>
    <?php endforeach; ?>

<?php foreach ($teacher as $game) : ?>
    <li><?= $game->teacher_name; ?></li>
    <?php endforeach; ?>
</body>
</html>
