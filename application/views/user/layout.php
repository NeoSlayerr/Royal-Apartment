<!DOCTYPE html>
<html>

<?php
    $this->load->view('user/top/'.$top);
?>

<body>

<?php
    $this->load->view('user/header/'.$header);
    $this->load->view('user/content/'.$content);
    $this->load->view('user/footer/footer');
    $this->load->view('user/bottom/'.$bottom);
?>

</body>
</html>