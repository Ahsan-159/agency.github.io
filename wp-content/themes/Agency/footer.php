<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start"><?php dynamic_sidebar('footer-1')?></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <?php dynamic_sidebar('footer-2')?>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                       <?php dynamic_sidebar('footer-3')?>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        
        <?php wp_footer()?>
</body>
</html>