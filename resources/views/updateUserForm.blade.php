<form method="post" action="/updateUser">
    <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> />
    <input type="hidden" name="id" value=<?php echo $id; ?> />
    <input type="text" name="new_login" value="<?php echo $user->nom ?>" />
    <input type="text" name="new_pwd" value="<?php echo $user->age ?>" />
    <input type="submit" value="Update" />
</form>