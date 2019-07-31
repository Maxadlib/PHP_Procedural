<?php require __DIR__ . '/class/resolver.php'; ?>

<?php var_dump($_GET); ?>
<?php var_dump($_POST); ?>

<?php (new resolver(__DIR__, 'inc', 'header'))->requireFile() ?>

<form method="post">
    <input name="name" placeholder="Donnez un nom" />
    <input name="age" placeholder="Donnez un age" />
    <input name="hobby" placeholder="Donnez une passion" />

    <button type="submit">Soumettre</button>
</form>

<?php
    $data = $_POST;

    $name = isset($data['name']) ? $data['name'] : '';
    $age = isset($data['age']) ? $data['age'] : '';
    $hobby = isset($data['hobby']) ? $data['hobby'] : '';

    if ($name && $age && $hobby) {
        echo sprintf('<h1>%s qui a %sans aime %s</h1>', $name, $age, $hobby);
    }
?>

<?php (new resolver(__DIR__, 'inc', 'footer'))->requireFile() ?>