<script src="<?php echo base_url().'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/slick.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/select2.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/tinymce.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/multi-step-modal.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/jquery.webui-popover.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/O7BMTay5.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/main.js'; ?>"></script>
<script src="<?php echo base_url().'assets/global/toastr/toastr.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/jquery.nestable.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/jquery.form.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/bootstrap-tagsinput.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/custom.js'; ?>"></script>

<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>

<script type="text/javascript">
	toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>

<?php endif;?>