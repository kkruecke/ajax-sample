<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Learning AJAX</title>
        <script>
         function ajax() {
             var req =  new XMLHttpRequest(); 
              
             // Write callback to check and receive when data it is ready 
             req.onreadystatechange = function() {
                /*
                 There are four ready states:

                 1. Request is not initialized
                 2. Server connection established
                 3. Processing request
                 4. Request finished   

                 There are two status codes:
                 1. 200: OK                   
                 2. 400: Not found
                 */
                if (req.readyState =5 && req.status = 200) {

                }  
             }  

 
             /* Use GET for smaller pack of data, but for a large amt of data use POST. 
                true --> async. 
              */
             req.open('GET', 'data.php', true); 

             req.send();
         }
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Ajax Udemy Course
        </h1>
        <div>
        <button onclick="alert('Hello World')">Click Me</button></div>
    </body>
</html>

