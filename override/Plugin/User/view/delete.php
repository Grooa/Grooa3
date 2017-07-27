<?php
$form->addClass('hidden user-delete-form');
echo $form->render();
?>

<button id="userDelete" class="dangerous delete-user">Delete Account</button>

<script type="text/javascript">
    var userDelete = document.getElementById('userDelete');
    var form = document.querySelector('.user-delete-form');

    userDelete.addEventListener('click', function () {
        if (confirm('Are you sure you want to delete your account?')) {
            form.submit();
        }
    });

</script>
