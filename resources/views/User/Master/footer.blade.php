

<footer class="main-footer text-center">

    <strong>Copyright © Reserved By Graphics Design Point {{ date('Y') }} <a href="javascript:void(0)" style="pointer-events: none">Shakibul Hasan</a>.</strong> Owner Of Graphics Design Point
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('Inc/Backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Inc/Backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('Inc/Backend')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Inc/Backend')}}/dist/js/demo.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<script type="text/javascript">
    $(document).ready(function (){
        $('#file').change(function (e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#file2').change(function (e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#file3').change(function (e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image3').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#file4').change(function (e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image4').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#file5').change(function (e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#image5').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
</body>
</html>



