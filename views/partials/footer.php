    <footer>
        
    </footer>
    <? if($q != 'welcome'): ?>
    <script src="<?= URL ?>assets/scripts/script.js"></script>
    <? endif; ?>
    <script src="<?= URL ?>assets/scripts/<?= $controller ?>.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/scandit-sdk@4.x"></script>
</body>
</html>