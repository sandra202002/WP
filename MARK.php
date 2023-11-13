<html>
    <head>
        <title>internal marks</title>
    </head>
    
    
    <body>
        <form action="marksheet1.php" method="post">
        <h1 align="center">MACE</h1>
        <h3 align="center">kothamngalam,8866443690</h3>
        <table align="center" border="solid" width="50%">
            <tr>
                <th align="center" colspan="3">FIRST SESSIONAL EXAM</th>
            </tr>
            <tr>
                <th colspan="3">
                    Roll no:
                    <input type="text" name="rollno">
                </th>
            </tr>
             <tr>
                <th colspan="3">
                    Name:
                    <input type="text" name="name">
                </th>
            </tr>
            <tr>
                <th>Slno:</th>
                <th>Subject:</th>
                <th>Mark:</th>
            </tr>
            <tr>
                <th>1</th>
                <th>ADS</th>
                <th width="30%"><input type="number" name="marks1"></th>
            </tr>
            <tr>
                <th>2</th>
                <th>ASE</th>
                <th width="30%"><input type="number" name="marks2"></th>
            </tr>
            <tr>
                <th>3</th>
                <th>MFC</th>
                <th width="30%"><input type="number" name="marks3"></th>
            </tr>
            <tr>
                <th>4</th>
                <th>DFO</th>
                <th width="30%"><input type="number" name="marks4"></th>
            </tr>
            <tr><th colspan="3"><input type="submit" name="submit" value="SUBMIT"></th></tr>
        </table>
        </form>
    </body>
</html>