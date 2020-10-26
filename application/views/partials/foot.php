<div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="title">Setting</h4>
            </div>
            <form action="pengaturan" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label class="text-default">Kode</label>
                    <p class="text-primary"><?php echo $this->session->userdata('usercode'); ?></p>
                    <input type="hidden" class="form-control" id="idpass" name="idpass" value="<?php echo $this->session->userdata('usercode'); ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="text-default">Nama</label>
                    <p class="text-primary"><?php echo $this->session->userdata('username'); ?></p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="changepass" name="changepass" placeholder="Password baru" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-success" name="ganti" value="Ganti"></input>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalTitle">Logout</h4>
        </div>
        <div class="modal-body">
            <p>Yakin ingin logout?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="logout"><button type="button" class="btn btn-danger">Logout</button></a>
        </div>
        </div>
    </div>
</div>

    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/chart-data.js')?>"></script>
    <script src="<?php echo base_url('assets/js/easypiechart.js')?>"></script>
    <script src="<?php echo base_url('assets/js/easypiechart-data.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-table.js')?>"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
                $(this).find('em:first').toggleClass("glyphicon-minus");	  
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
    <script>
    function closealert(){
        document.getElementById("alert").hidden = true;
        return true;
    }
    </script>
</body>
</html>