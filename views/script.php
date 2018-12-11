<?php if ($js = \Arr::get($config, 'script')): ?>
    <script type="text/javascript"
            src="<?= $js.'?'.md5_file($js) ?>"></script>
<?php endif ?>

<script type="text/javascript">
    tarteaucitron.lang =
        <?= json_encode(\Arr::get($config, 'translations', array())) ?>;
    tarteaucitron.init(
        <?= json_encode(\Arr::get($config, 'settings', array())) ?>
    );
</script>
