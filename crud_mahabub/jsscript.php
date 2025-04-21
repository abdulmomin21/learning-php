<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<script type="text/javascript">
    function submitData(action) {
        $(document).ready(function() {
            var data = {
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                number: $("#number").val(),
                password: $("#password").val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response) {
                    alert(response);
                    if (response == "Deleted Succesfully") {
                        // $("#" + action).css("display", "none");
                        location.reload();


                    }

                }
            });
        })
    }
</script>