<!Doctype html>
<html>
<head>
    <title>Home Page</title>
    <style>
    .image1 {
    float: left;
    margin: 0px 20px 15px 20px;
   }
   .div1{
     line-height: 1.4;
     text-align: justify;
     font-size: 140%;
   }
   .div2{
     line-height: 1.4;
     text-align: justify;
     font-size: 140%;
     float: right;
   }
  .image2 {
      float: right;
      margin: 0px 20px 15px 20px;
  }
  table, td, th {
    border: 1px solid black;
  }

  table {
      border-collapse: collapse;
      margin-top: 30px;
      margin-bottom: 50px;
      width: 80%;
  }

  th {
      text-transform: capitalize;
      background-color: #4CAF50 ;
      color: white;
      border : 3px solid black;
      height: 50px;
  }
  td {
      border : 2px solid black;
      height: 50px;
      text-align: center;
      vertical-align: bottom;
  }
  tr:hover{
    background-color: #555555;
  }
  tr:nth-child(even) {
    background-color: #f4f4f4;
  }
  h1{
    text-decoration: underline;
    font-variant: small-caps;
  }
  span{
    text-decoration: underline;
    text-transform: capitalize;

  }
  caption{
    caption-side: bottom;
    font-weight: bold;
  }
   a:link,a:visited{
    text-decoration: none;
    text-align: center;
    color : blue;
    padding : 2px,5px;
    background-color: rgba(0,0,0,0.12);
    display : inline-block;
  }
  a:hover{
    color : hotpink;
  }
  a : active{
    color:red;
  }
  
    </style>
</head>
<body>
    <div>
        <a href="registrationPage.html" target="_blank"><h3>Sign Up</h3></a>
           <a href="loginPage.php" target="_blank"><h3>Login</h3></a>
        <h1 align="center">WELCOME TO THE MAGIC WORLD</h1>
    </div>
    <div class="div1">
          <p><div class="image1"><img src = "pic/homePage11.jpg" width="200" height="200"> </div>
          Hi this is one of my project. I used pure html for making its structure.
          And then for its styling CSS is used .<br/>
          <span>SAMPLE CONTENT</span> : In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.

          "Whenever you feel like criticizing any one," he told me, "just remember that all the people in this world haven't had the advantages that you've had."

          He didn't say any more, but we've always been unusually communicative in a reserved way, and I understood that he meant a great deal more than that. In consequence, I'm inclined to reserve all judgments, a habit that has opened up many curious natures to me and also made me the victim of not a few veteran bores.</p>
    </div><br/>
      <hr>
    <div class="div2">
        <p><div class="image2"><img src = "pic/homePage2.jpg" width="200" height="200"></div>
        Hi this is one of my project. I used pure html for making its structure.
        And then for its styling CSS is used .<br/>
        <span>SAMPLE CONTENT</span> : In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.

        "Whenever you feel like criticizing any one," he told me, "just remember that all the people in this world haven't had the advantages that you've had."

        He didn't say any more, but we've always been unusually communicative in a reserved way, and I understood that he meant a great deal more than that. In consequence, I'm inclined to reserve all judgments, a habit that has opened up many curious natures to me and also made me the victim of not a few veteran bores.
        </p><br/>
        <hr/>
    </div>
    <br/><br/><br/>
    <h1 align = "center">Table</h1>
    <table align = "center">
    <caption>sample table 1.1</caption>
        <tr>
          <th colspan="2">Heading1</th>
          <th>Heading2</th>
          <th>Heading3</th>
          <th>Heading4</th>
        </tr>
        <tr>
          <th>subheading1</th>
          <th>subheading2</th>
          <th colspan="3"></th>
        </tr>
        <tr>
          <td>data1</td>
          <td>data2</td>
          <td>data3</td>
          <td>data4</td>
          <td>data5</td>
        </tr>
        <tr>
          <td>data1</td>
          <td>data2</td>
          <td>data3</td>
          <td>data4</td>
          <td>data5</td>
        </tr>
        <tr>
          <td colspan = "3">data1</td>
          <td colspan = "2">data2</td>
        </tr>
        <tr>
          <td colspan = "5">data</td>
        </tr>
    </table>
    <hr/>
    <div align = "center">
      <a href = "list.html"><h3>View List</h3></a>
    </div>
</body>
</html>