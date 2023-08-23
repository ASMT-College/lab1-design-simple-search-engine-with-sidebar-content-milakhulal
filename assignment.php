<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "GET">
        
      <label for="">Description</label> <br>

      <textarea name="" id="" cols="30" rows="10">Enter your description 
      </textarea> 
      <br>
       <label for="">choose your subject</label>
       <br>
       <input type = "checkbox" name = "Multimedia" value = "on"> Multimedia
         <input type = "checkbox" name = "Image processing" value = "on"> Image processing
         <br>
         <label for="">Choose your career</label>
         <br>
         <input type = "radio" name = "subject" value = "Networking"> Networking
         <input type = "radio" name = "subject" value = "Devloping"> Devloping
         
         <br>
         <label for="">select one movie</label>
         
         <br><select name = "dropdown">

            <option value = "Bimala KHulal" selected>Bimala Khulal</option>
            <option value = "Heroine">Heroine</option>
            <option value = "Queen">Queen</option>

         </select>
         <br>
         <input type = "file" name = "fileupload" accept = "image/*" />
         <br>
         <input type = "submit" name = "submit" value = "Submit" />
         <input type = "reset" name = "reset"  value = "Reset" />
         <input type = "button" name = "ok" value = "OK" />
         <input type = "image" name = "imagebutton" src ="evileye.jpg" style="width: 200px;" />
     </form>
</body>
</html>
