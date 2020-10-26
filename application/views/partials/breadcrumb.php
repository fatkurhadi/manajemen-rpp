<ol class="breadcrumb">
    <li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>

    <?php foreach ($this->uri->segments as $segment): ?>
	<?php 
		$url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
		$is_active =  $url == $this->uri->uri_string;
	?>

	<li class="active <?php echo $is_active ? 'active': '' ?>">
		<?php if($is_active): ?>
			<?php echo ucfirst($segment) ?>
		<?php else: ?>
			
		<?php endif; ?>
    </li>
    <?php endforeach; ?>
</ol>