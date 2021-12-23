<!DOCTYPE html>
<html>

<?php
    $this->load->view('user/top/'.$top);
?>

<body class="body2">

<?php
    $this->load->view('user/content/'.$content);
    $this->load->view('user/bottom/'.$bottom);
?>

</body>
</html>