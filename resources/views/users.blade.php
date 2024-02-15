modifief
    <tr>
        <td>
          
        </td>
        <td>
           
        </td>
      
        <td>
            <form action="/updateUserForm" method="get">
                <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> />
                <input type="hidden" name="id" value="<?php echo $user->id ?>">
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    
</table>
<form action="/createUser" method="get">
    <input type="submit" value="Create User" />
</form>