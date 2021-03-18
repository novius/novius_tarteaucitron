<script type="text/javascript">
    window.tacOverrideLang = <?= json_encode(\Arr::get($config, 'translations', array())) ?>;
</script>

<script type="text/javascript" src="<?= \Arr::get($config, 'script') ?>"></script>
