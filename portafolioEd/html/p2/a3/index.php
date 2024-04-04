<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST" name="myForm">


        <label for="">Personal information</label>
        <hr>
        <table>
            <th>
                <td>
                    <label for="">Name</label>
                    <input type="text" name="first_name">
                </td>
                <td>
                    <label for="">last name father</label>
                    <input type="text" name="last_name_p">
                </td>
                <td>
                    <label for="">last name mother</label>
                    <input type="text" name="last_name_m">                 
                </td>
            </th>
            <th>
            </th>
        </table>

        <br>
        <label for="">user name</label>
        <input type="text" name="username">
        <label for="">password</label>
        <input type="password" name="password">
        <label for="">birthday</label>
        <input type="date" name="birthday">


        <br><br>



        <label for="">Personal information</label>
        <hr>
        <table>
            <th>
                <td>
                    <label for="">country</label>
                    <select name="country" id="">
                        <option value="mexico">Mexico</option>
                        <option value="canada">canda</option>
                        <option value="EUA">EUA</option>
                    </select>
                </td>
                <td>
                    <label for="">City</label>
                    <select name="city" id="">
                        <option value="sanluispotosi">San luis potosi</option>
                        <option value="canada">canda</option>
                        <option value="EUA">EUA</option>
                    </select>
                </td>
                <td>
                    <label for="">street</label>
                    <input type="text" name="street">              
                </td>
            </th>
            <th>
            </th>
        </table>
        <br>
        <label for="">number house</label>
        <input type="text" name="number_house">        
        <label for="">colonie</label>
        <input type="text" name="colonie">       
        <label for="">email</label>
        <input type="email" name="email">    
        <br>   
        <label for="">rfc</label>
        <input type="text" name="rfc">    
        <label for="">cp</label>
        <input type="text" name="cp">
        <button type="submit">send</button>
        <button>restart</button>    
    </form>
</body>
</html>