<script type="text/javascript"
        src="<?= \Arr::get($config, 'script') ?>"></script>

<script type="text/javascript">
    tarteaucitron.init(
        <?= json_encode(\Arr::get($config, 'settings', [])) ?>
    );
</script>
