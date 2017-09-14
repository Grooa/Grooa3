<?php
$form->addClass('hidden user-delete-form');
echo $form->render();
?>

<section class="object">
    <h3>Delete account</h3>
    <section class="columns">
        <p>Warning! This action is not reversible! You will loose all your purchased content</p>
        <button id="userDelete" class="dangerous delete-user">Delete Account</button>
    </section>

</section>

<script type="text/javascript">
    var userDelete = document.getElementById('userDelete');
    var form = document.querySelector('.user-delete-form');

    userDelete.addEventListener('click', function () {
        if (confirm('Are you sure you want to delete your account?')) {
            form.submit();
        }
    });

</script>
