<form action="<?php echo e(route("postLogIn")); ?>" method="post" >
    <header>Auth Page</header>
    <?php echo csrf_field(); ?>
    <div class="container" >
        <input   type="text" placeholder="Enter Username" name="name" required>

        <br>
        <input  class="form-control" type="password" placeholder="Enter Password" name="password" required>
        <br>
        <button type="submit">Login</button>

    </div>

</form>
<?php /**PATH C:\Users\Dada\Desktop\dada\resources\views/login.blade.php ENDPATH**/ ?>