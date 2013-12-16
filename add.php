<form action="process.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="300" border="1" cellspacing="0" cellpadding="0" bgcolor="#999999">
    <tr align="center">
      <td colspan="2">LEAVE MESSAGE</td>
    </tr>
    <tr>
      <td width="30%" align="center">
          NAME:
          </td>
      <td>
      <input type="text" name="name">
          </td>
    </tr>
    <tr>
      <td width="30%" align="center">
          TITLE:
          </td>
      <td>
      <input type="text" name="title">
          </td>
    </tr>
    <tr>
      <td width="30%" align="center">
          CONTENT:
          </td>
      <td>
      <textarea name="content" cols="25" rows="10">
          </textarea>
          </td>
    </tr>
    <tr>
      <td colspan="2">
          <input type="reset" name="Reset" value="RESET" >
          <input type="submit" name="Submit"value="SUBMIT">
          </td>
    </tr>
  </table>
</form>