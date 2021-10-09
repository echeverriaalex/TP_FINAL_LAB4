
      

        <!-- Scripts -->
        <script src="Views/vendor/jquery/jquery.min.js"></script>
        <script src="Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Views/assets/js/owl-carousel.js"></script>
        <script src="Views/assets/js/animation.js"></script>
        <script src="Views/assets/js/imagesloaded.js"></script>
        <script src="Views/assets/js/custom.js"></script>

        <script>

            $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
                }
            });
        </script>
    </body>
</html>