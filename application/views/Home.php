<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscrr</title>
	<link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
</head>
<body class="bg-white">

 	<?php $this->load->view('layout/navbar'); ?>

    <?php $this->load->view('site/hero'); ?>

    <?php $this->load->view('site/overview'); ?>

    <?php $this->load->view('site/ai_spend'); ?>
    
    <?php $this->load->view('site/privacy'); ?>
    
    <?php $this->load->view('site/pricing'); ?>
    
    <?php $this->load->view('layout/footer.php'); ?>

</body>
</html>