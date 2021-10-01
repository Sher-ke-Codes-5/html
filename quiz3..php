<!DOCTYPE html>

<html>

        <header>
        
           <h1> Wad quiz 3 </h1>
         
</br>

<br>
<br>
<br>
<script type="text/javascript">
    function funct(){

        var tb=document.getElementById("MYform");
        var rows=tb.insertRow();
        var cell1=rows.insertCell();
        var cell2=rows.insertCell();
        var cell3=rows.insertCell();
        var cell4=rows.insertCell();
        var cell5=rows.insertCell();
        var cell6=rows.insertCell();
        var cell7=rows.insertCell();
        var cell8=rows.insertCell();

        
        cell1.innerhtml=document.getElementById("GN").value;
        cell2.innerhtml=doccument.getElementById("Nid").value;
        cell3.innerhtml=document.getElementById("Cid").value;
        cell4.innerhtml=document.getElementById("Phid").value;
        cell5.innerhtml=document.getElementById("Aid").value;
        cell6.innerhtml=document.getElementById("Sn").value;
        cell7.innerhtml=document.getElementById("Eid").value;
        cell8.innerhtml=document.getElementById("Sid").value;
      

    }
    </script>




        </header>

                <body>
                <h1> fill it </h1>
                <form onsubmit="funct();return false">
                    <input type="text" id="Nid" placeholder="Name" pattern="[A-Z]{1}[a-z]{8,12}" required > </br>
                    <input type="number" id="Cid" placeholder="Class Name" pattern="[0-9]{1}" required > </br>
                    <input type="text" id="Phid" placeholder="Phone Num" pattern="[0][0-5]{3}[-][7]{0-9}"required > </br>
                    <input type="text" id="Aid" placeholder="Address Place" pattern="[0-9]{3}[-][A-Z]{1}[-][a-z]{10,20}" required > </br>
                    <input type="text" id="Sn" placeholder=" School Name" pattern="[A-Z]{20,30}"required > </br>
                    <input type="email" id="Eid" placeholder="Email enter " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required > </br>
                    <input type="text" id="Sid" placeholder="Cnic" pattern="[0-5]{5}[-]{0-9]{7}[-]{0-9}{1}" required > </br>
                    <input type="text" id="GN" placeholder="Guardian Name" pattern="[A-Z]{1}[a-z]{8,12}",required > </br>
                    <input type='submit' value ="fill admission form "/>
                    <input type='reset' value ="clear form "/>
                            
 
                    </form>   
</br>
</br>
</br>

                    <h1> My Admission form <h1>
                    <table id="MYform" border="2" cellspacing="2" >
                        <tr>

                        <th> Name </th>
                        <th> Class </th>
                        <th> Phone </th>
                        <th> Address </th>
                        <th> School Name </th>
                        <th> Email </th>
                        <th> CNIC </th>
                        <th> Guardian Name </th>
</tr>

                    </table>
                  

                  

                </body>


</html>