<!DOCTYPE html>
<html>

<?php
    $this->load->view('admin/top/'.$top);
?>

<body>

<?php
    $this->load->view('admin/header/'.$header);
    $this->load->view('admin/content/'.$content);
    $this->load->view('admin/footer/footer');
    $this->load->view('admin/bottom/'.$bottom);
?>

</body>
</html>