
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0"
                    >Basic CMS &#9829; implemented by Team <a href="https://twoandfrom.com/" target="_blank">Two & From</a></p
                    >
                </div>
            </div>
        </div>
    </footer>

    <!-- Required Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/admin_files/assets/js/plugins/popper.min.js"></script>
    <script src="/admin_files/assets/js/plugins/simplebar.min.js"></script>
    <script src="/admin_files/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/admin_files/assets/js/fonts/custom-font.js"></script>
    <script src="/admin_files/assets/js/pcoded.js"></script>
    <script src="/admin_files/assets/js/plugins/feather.min.js"></script>

    <?php if ($adminFunctions->dataTable): ?>
        <script src="/admin_files/assets/js/plugins/jquery.dataTables.min.js"></script>
        <script src="/admin_files/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
        <script src="/admin_files/assets/js/plugins/custom.dataTables.js?v=<?php echo $adminFunctions->version; ?>"></script>
        <script>
            $('#table-style-hover').DataTable();
        </script>
    <?php endif ?>

</body>
<!-- [Body] end -->

</html>