<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
	<title>Receipt</title>
</head>
<body>
   <h1>ROBINSONS SELECTIONS</h1>
   <h3>ROBINSONS SUPERMARKET CORPORATION</h3>
   <h3>VAT REG TIN 000-405-340-109</h3>
   <h3>8 FORBES TOWN CENTER</h3>
   <h3>BONIFACIO GLOBAL CITY</h3>
   <h3>TAGUIG CITY</h3>
   
 <form method="POST">
   <table>
         <tr>
            <td>Name:</td>
            <td><input type="text" id="txtName" name="txtName" /></td>
         </tr>
         <tr>
            <td>TIN:</td>
            <td><input type="text" id="txtTIN" name="txtTIN" /></td>
         </tr>
      <tr>
         <td>ID No:</td>
         <td><input type="text" id="txtIDNo" name="txtIDNo" /></td>
      </tr>
      <tr>
         <td>Address:</td>
         <td><input type="text" id="txtAddress" name="txtAddress" /></td>
      </tr>
      <tr>
         <td>Item:</td>
         <td><input type="text" id="txtItem" name="txtItem" /></td>
      </tr>
      <tr>
         <td>Cashier:</td>
         <td><input type="text" id="txtCashier" name="txtCashier" /></td>
      </tr>
      <tr>
         <td>Total Cash:</td>
         <td><input type="text" id="txtTotalCash" name="txtTotalCash" /></td>
      </tr>
      <tr>
         <td>Total Bill:</td>
         <td><input type="text" id="txtTotalBill" name="txtTotalBill" /></td>
      </tr>
      <tr>
            <td colspan="2">
               <input type="submit" id="submit" name="submit" /></td>
            <th colspan="2"> 
      <tr>
         <td>Change:</td>
         <td><input type="text" id="txtChange" name="txtChange" /></td><br>
      </tr>
      
               <?php
               if (isset($_REQUEST['txtName'])) 
               {
                  $txtName = $_REQUEST["txtName"];
                  echo $_POST ["txtName"];
               }

               if (isset($_REQUEST['txtTIN'])) 
               {
                  $txtTIN = $_REQUEST["txtTIN"];
                  echo $_POST ["txtTIN"];
               }
               if (isset($_REQUEST['txtTIN'])) 
               {
                  $txtIDno = $_REQUEST["txtIDNo"];
                  echo $_POST ["txtIDNo"];
               }
               if (isset($_REQUEST['txtAddress'])) 
               {
                  $txtAddress = $_REQUEST["txtAddress"];
                  echo $_POST ["txtAddress"];
               }
               if (isset($_REQUEST['txtItem'])) 
               {
                  $txtItem = $_REQUEST["txtItem"];
                  echo $_POST ["txtItem"];
               }
               if (isset($_REQUEST['txtCashier'])) 
               {
                  $txtCashier = $_REQUEST["txtCashier"];
                  echo $_POST ["txtCashier"];
               }
               if (isset($_REQUEST['txtTotalCash'])) 
               {
                  $txtTotalCash = $_REQUEST["txtTotalCash"];
                  echo $_POST ["txtTotalCash"];
               }
               if (isset($_REQUEST['txtTotalBill'])) 
               {
                  $txtTotalBill = $_REQUEST["txtTotalBill"];
                  echo $_POST ["txtTotalBill"];
               }
               if (isset($_REQUEST['txtChange'])) 
               {
                  $txtChange = $_REQUEST["txtChange"];
                  echo $_POST ["txtChange"];
               }

               ?>
            </th>
         </td>
      </tr>
   </table>
</form>

</body>
</html>