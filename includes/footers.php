        </div>
        <footer>
            <p>EverQuest is a registered trademark of Daybreak Game Company LLC.</p>
            <p>EQEmulator or The Al`kabor Project is not associated or affiliated in any way with Daybreak Game Company LLC.</p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="<?php echo $includes_url; ?>js/jquery.floatHead.js"></script>
        <script>
            $(document).ready(function(){
                $(".sticky-header").floatThead({
                    responsiveContainer: function($table){
                        return $table.closest('.table-wrapper');
                    }
                });
                
                $(".refine-search").on('click', function(el) {
                    el.preventDefault();
                    $('.search-wrapper, .refine-search').toggleClass('visible');
                })
            });
        </script>
    </body>
</html>
