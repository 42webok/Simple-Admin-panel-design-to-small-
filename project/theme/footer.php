  <!-- Js Files Link here -->
  <script src="assets/js/jquery.js"></script> <!-- jQuery first -->
<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script> <!-- Bootstrap JS -->

<script>
$(document).ready(function() {
    function toggleSidebar() {
        if ($(window).width() <= 950) {
            $(".bar").off().click(function(e) {
                e.stopPropagation();
                $(".bar").hide();
                $(".cross").show();
                $(".sidebar").css("left", "0%");
                $(".header .user-info").css("left", "6%");
            });

            $(".cross").off().click(function(e) {
                e.stopPropagation();
                $(".cross").hide();
                $(".bar").show();
                $(".sidebar").css("left", "-100%");
                $(".header .user-info").css("left", "-100%");
            });

            $(document).off().click(function(e) {
                if (!$(e.target).closest('.sidebar, .bar, .cross').length) {
                    $(".cross").hide();
                    $(".bar").show();
                    $(".sidebar").css("left", "-100%");
                    $(".header .user-info").css("left", "-100%");
                }
            });

            $(".sidebar").off().click(function(e) {
                e.stopPropagation();
            });
        } else {
            $(".sidebar").css("left", "0%");
            $(".bar").hide();
            $(".cross").hide();
            $(".header .user-info").css("left", "0%");
        }
    }

    toggleSidebar();
    $(window).resize(function() {
        toggleSidebar();
    });
});



        </script>
</body>
</html>