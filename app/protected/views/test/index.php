<h1>Welcome to TEST PAGE</h1>

<p>Run the test <a class="run-test" href="#">run</a>.</p>

<script type="text/javascript">
$('.run-test').click(function() {
    alert('run');
    $.ajax({
        type: 'POST',
        url: "<?php  echo  CController::createUrl('test/TimeConsumingProcess'); ?>",
        success: function(data){
            alert(data);
        }
    });
});
</script>
