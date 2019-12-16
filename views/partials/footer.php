    <footer>
        
    </footer>
    <? if($q != 'welcome'): ?>
    <script src="<?= URL ?>assets/scripts/script.js"></script>
    <? endif; ?>
    <script src="<?= URL ?>assets/scripts/<?= $controller ?>.js"></script>
    <? if($q == 'search'): ?>
    <script src="https://cdn.jsdelivr.net/npm/scandit-sdk@4.x"></script>
    <script src="<?= URL ?>assets/scripts/search2.js"></script>
    <? endif; ?>
</body>
</html>