    <footer>
        
    </footer>
    <!--Chech if the URL is different as 'Welcome' and display the script if it is-->
    <? if($q != 'welcome'): ?>
        <script src="<?= URL ?>assets/scripts/script.js"></script>
    <? endif; ?>
    <!--Always tru to load the script if he contains the name of the controllers-->
    <script src="<?= URL ?>assets/scripts/<?= $controller ?>.js"></script>
    <!--Check if the page is 'Search', if its is and load this scripts-->
    <? if($q == 'search'): ?>
        <script src="https://cdn.jsdelivr.net/npm/scandit-sdk@4.x"></script>
        <script src="<?= URL ?>assets/scripts/search2.js"></script>
    <? endif; ?>
</body>
</html>