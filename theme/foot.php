<footer>
         <p>footer data</p>
</footer>  

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/lib/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="/assets/js/build/production.min.js"></script>
        <?php
        if(isset($this->currentPage['pageJS']) && $this->currentPage['pageJS'] != ""){
            echo "<script href=\"/assets/js/page/".$pageJS.".js\"></script>";
        }
        if (isset($this->currentPage['form']) && $this->currentPage['form'] == true) {
            echo "<script href=\"/assets/js/plugin/jquery.validate.min.js\"></script>";
        }else{ echo '<!-- no form to validate on this page -->';}
        ?>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>