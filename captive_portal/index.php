<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style media="screen">
      body {
        background-color: #dc3545;
      }
      #container {
        /* border: 1px solid black; */
        width: 60%;
        margin: 15% auto 15% auto;
        height: 40%;
      }

      input[type=text] {
        width: 100%;
        padding: 5%;
        margin: 0 0 10px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
        font-size: 250%;
        text-align:center;
      }

input[type=submit] {
  width: 100%;
  background-color: #8cc63f;
  color: white;
  padding: 5% 2%;
  margin: 8px 0;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  font-size: 250%;
}

#selection {
  text-align: center;
  width: 96%;
  background-color: #8cc63f;
  color: white;
  padding: 5% 2%;
  margin: 10px 0;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  font-size: 250%;
}
#selection a {
  color: #ffffff;
  text-decoration: none;

}



    </style>
    <center>
      <img src="captiveportal-STW.png" width="80%">
    </center>

    <div id="container">
      <form action="$PORTAL_ACTION$" method="post">
        <input name="auth_voucher" type="text" placeholder="Input code">
        <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
        <input name="zone" type="hidden" value="$PORTAL_ZONE$">
        <input name="accept" type="submit" value="Submit" class="bg-warning">

        <div class="" id="selection">
          <a href=" http://stw.com/STW_">Food Menu</a>
        </div>
        <!-- <div class="" id="selection">
          <a href="#">Plans</a>
        </div> -->
      </form>
    </div>
  </body>
</html>
